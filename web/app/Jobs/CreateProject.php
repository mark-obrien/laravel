<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Http\Request;
use SpaceCamp\Projects\Project;
use SpaceCamp\Users\User;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateProject extends Job implements SelfHandling
{

    protected $user;

    protected $request;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Request $request, User $user)
    {
        $this->user = $user;
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Project::create([
            'title' => $this->request->get('title'),
            'image' => $this->request->get('image')
        ]);
    }
}
