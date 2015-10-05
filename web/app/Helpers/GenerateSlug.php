<?php

namespace App\Helpers;


class GenerateSlug
{
    public function generate($string)
    {
         str_slug($string, '-');
    }
}