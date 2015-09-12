<?php

namespace App\Jobs;

use Illuminate\Http\Request;
use SpaceCamp\ProjectFiles\ProjectFile;
use SpaceCamp\Projects\Project;
use SpaceCamp\Users\User;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateProject extends Job implements SelfHandling
{

    protected $user;
    protected $request;
    protected $file;
    protected $project;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Request $request, User $user, ProjectFile $file)
    {
        $this->user = $user;
        $this->request = $request;
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $project = new Project();
        $project->title = $this->request->get('title');

        $project->save();
        $project->file()->save($this->file);
        $project->user()->attach($this->user);
    }
}
