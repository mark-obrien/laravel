<?php namespace SpaceCamp\ProjectFiles;

use Illuminate\Database\Eloquent\Model;

class ProjectFile extends Model {

    protected $fillable = [
        'title',
        'location'
    ];

    /**
     * A File is owned by a project (logo).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo('SpaceCamp\Projects\Project');
    }

}
