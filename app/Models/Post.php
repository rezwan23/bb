<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $fillable = [
        'title', 'slug', 'content', 'style', 'meta', 'featured_media_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_post');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tag');
    }
    public function media()
    {
        return $this->belongsTo(Media::class, 'featured_media_id');
    }
}
