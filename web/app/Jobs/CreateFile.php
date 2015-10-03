<?php

namespace App\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use SpaceCamp\ProjectFiles\ProjectFile;

class CreateFile extends Job implements SelfHandling
{

    protected $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return ProjectFile
     */
    public function handle()
    {
        $destinationPath = base_path() . '/public/uploads';
        $extension = $this->file->getClientOriginalExtension();
        $fileName = rand(11111,99999).'.'.$extension;
        $this->file->move($destinationPath, $fileName);

        $file = new ProjectFile();
        return $file->create([
            'title'    => $fileName,
            'location' => '/uploads'
        ]);

    }
}
