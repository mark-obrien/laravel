<?php namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnPublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * An article is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('SpaceCamp\User');
    }

    /**
     * Get the tags associated with the given article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    /**
     * Get list of tag ids associated with current article
     *
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }



}
