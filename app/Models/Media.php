<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table='medias';

    protected $fillable = ['title', 'slug', 'media', 'ext'];

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getMedia($size)
    {
        return $this->media.'_'.$size.'.'.$this->ext;
    }

    public function post()
    {
        return $this->hasOne(Post::class, 'featured_media_id');
    }
}
