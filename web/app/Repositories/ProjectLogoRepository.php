<?php

namespace App\Repositories;

class ProjectLogoRepository
{

    public function assignRandomProjectLogo()
    {
        return ProjectLogo::find(10);
    }

}