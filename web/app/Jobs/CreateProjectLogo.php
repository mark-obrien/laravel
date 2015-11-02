<?php

namespace App\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Models\ProjectLogo;
use Image;
use App\Helpers\RandomProjectLogo;

class CreateProjectLogo extends Job implements SelfHandling
{

    protected $file;
    private $size;
    private $destinationPath;

    /**
     * Create a new file instance.
     * @param $file
     * @param $size
     */
    public function __construct($file = null, $size = null)
    {
        $this->file = $file;
        $this->size = $size;
        $this->destinationPath = base_path() . '/public/uploads';
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
            $logo = new RandomProjectLogo();
            $this->file = $logo;
            $extension = $this->file->getClientOriginalExtension();
            $fileName = uniqid() . '.' . $extension;
            copy($logo->getRandomLogoPath() . '/' . $logo->getClientOriginalName(), $this->destinationPath . '/' . $fileName);
        }

        else
        {
            $extension = $this->file->getClientOriginalExtension();
            $fileName = uniqid() . '.' . $extension;
            $this->file->move($this->destinationPath, $fileName);
        }


        if(isset($this->size))
        {
            $this->resizeImage($this->destinationPath, $fileName);
        }

        $img = new ProjectLogo();
        return $img->create([
            'title'    => $fileName,
            'location' => '/uploads'
        ]);
    }

    /**
     * Resize the logo
     *
     * @param $path
     * @param $fileName
     * @return void
     */
    private function resizeImage($path, $fileName)
    {
        $background = Image::canvas($this->size[0], $this->size[1]);
        $img = Image::make($path . '/' . $fileName)->resize($this->size[0], $this->size[1], function ($c) {
            $c->aspectRatio();
            $c->upsize();
        });

        $background->insert($img, 'center');
        $background->save($this->destinationPath . '/' . $fileName);
    }

}
