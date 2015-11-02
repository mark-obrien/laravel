<?php

namespace App\Helpers;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class RandomProjectLogo extends UploadedFile
{

    private $logoPath;
    private $originalName;

    public function __construct()
    {
        $this->logoPath = base_path() . '/public/images/project-logos';
        $images = scandir($this->logoPath);
        $this->fileName = $images[rand (2,6)];
        parent::__construct($this->logoPath . '/' . $this->fileName, $this->fileName);
    }

    public function getRandomLogoPath()
    {
        return $this->logoPath;
    }

    public function getImage()
    {

        $images = scandir($this->logoPath);
        $this->originalName = $images[rand (2,6)];

        return $this;

    }
}