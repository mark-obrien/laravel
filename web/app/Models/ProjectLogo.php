<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class ProjectLogo extends Model {

    protected $fillable = [
        'title',
        'location'
    ];

    /**
     * A Logo is owned by a project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo('Models\Project');
    }

}
