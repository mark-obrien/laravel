<?php

namespace App\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Models\ProjectLogo;
use Image;

class CreateProjectLogo extends Job implements SelfHandling
{

    protected $file;

    /**
     * Create a new file instance.
     * @param $file
     * @param $size
     */
    public function __construct($file = null, $size = null)
    {
        $this->file = $file;
        $this->size = $size;
    }

    /**
     * Execute the job.
     *
     * @return ProjectLogo
     */
    public function handle()
    {
        if($this->file == null)
        {
            $this->assignRandomLogo();
        }
        else
        {
            $destinationPath = base_path() . '/public/uploads';
            $extension = $this->file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $this->file->move($destinationPath, $fileName);

            if(isset($this->size))
            {
                $this->resizeImage($destinationPath, $fileName);
            }
        }

        $img = new ProjectLogo();
        return $img->create([
            'title'    => $fileName,
            'location' => '/uploads'
        ]);
    }

    private function resizeImage($destinationPath, $fileName)
    {
        $background = Image::canvas($this->size[0], $this->size[1]);
        $img = Image::make($destinationPath . '/' . $fileName)->resize($this->size[0], $this->size[1], function ($c) {
            $c->aspectRatio();
            $c->upsize();
        });

        $background->insert($img, 'center');
        $background->save($destinationPath . '/' . $fileName);
    }

    private function assignRandomLogo()
    {

    }
}
