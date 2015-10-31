<?php

namespace App\Helpers;


use Symfony\Component\HttpFoundation\File\File;

class RandomProjectLogo extends File
{

    private $logoPath;
    private $originalName;

    public function __construct()
    {
        $this->logoPath = base_path() . '/public/images/project-logos';
        parent::__construct($this->logoPath);
    }

    public function getRandomLogoPath()
    {
        return $this->logoPath;
    }

    public function getImage()
    {

        $images = scandir($this->logoPath);
        $this->originalName = $images[rand (2,8)];

        return $this;

    }
}