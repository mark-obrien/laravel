<?php

namespace SpaceCamp\ProjectLogo;

use SpaceCamp\ProjectLogo\ProjectLogo;

class ProjectLogoRepository {

    public function assignRandomProjectLogo()
    {
        return ProjectLogo::find(10);
    }


}