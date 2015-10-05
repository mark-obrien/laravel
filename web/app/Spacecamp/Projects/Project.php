<?php namespace SpaceCamp\Projects;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = [
        'title',
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
        return $this->belongsToMany('SpaceCamp\Users\User');
    }

    /**
     * A Project has one file (logo).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ProjectLogo()
    {
        return $this->hasOne('SpaceCamp\ProjectLogo\ProjectLogo');
    }

}
