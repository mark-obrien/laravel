<?php

namespace App\Repositories;

class ProjectRepository extends SpacecampRepository
{

    protected $model = 'Project';

    public function create(array $attr)
    {
        parent::create($attr);
    }




}