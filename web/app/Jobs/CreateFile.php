<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use SpaceCamp\Files\File;

class CreateFile extends Job implements SelfHandling
{

    protected $file;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(File $file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $destinationPath = base_path() . '/public/uploads';
        $extension = $this->file->getClientOriginalExtension();
        $fileName = rand(11111,99999).'.'.$extension;
        $this->move($destinationPath, $fileName);

        $this->file->create([
            'title'    => $fileName,
            'location' => $destinationPath
        ]);

    }
}
