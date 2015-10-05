<?php

namespace App\Helpers;


use Illuminate\Support\ServiceProvider;

class GenerateSlugServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('generateSlug', 'App\Helpers\GenerateSlug');
    }
}