<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    /**
     * Get article associated with given tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function articles()
    {
        return $this->belongsToMany('Model\Article');
    }

}
