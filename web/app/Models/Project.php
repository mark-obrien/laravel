<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = [
        'title',
        'slug',
        'file_id',
        'user_id'
    ];

    /**
     * A Project is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsToMany('Models\User');
    }

    /**
     * A Project has one file (logo).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ProjectLogo()
    {
        return $this->hasOne('Models\ProjectLogo');
    }

}
