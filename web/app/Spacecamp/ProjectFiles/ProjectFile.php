<?php namespace SpaceCamp\ProjectFiles;

use Illuminate\Database\Eloquent\Model;

class ProjectFile extends Model {

    protected $fillable = [
        'title',
        'location'
    ];

}
