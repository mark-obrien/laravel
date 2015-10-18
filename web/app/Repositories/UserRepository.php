<?php

namespace App\Repositories;

class UserRepository extends SpacecampRepository
{

    function model()
    {
        return 'Models\Project';
    }
}