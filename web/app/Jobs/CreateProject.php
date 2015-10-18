<?php

namespace App\Jobs;

use App\Facades\GenerateSlug;
use Illuminate\Http\Request;
use Models\ProjectLogo;
use Models\Project;
use Models\User;
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
     * @param $request
     * @param $user
     * @param $file
     */
    public function __construct(Request $request, User $user, ProjectLogo $file)
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
        $project->slug = str_slug($project->title, "-");
        $project->save();

        $project->user()->attach($this->user);

        $this->file->project()->associate($project);
        $this->file->save();
    }
}
