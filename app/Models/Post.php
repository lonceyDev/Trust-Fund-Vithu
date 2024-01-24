<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model  implements HasMedia
{
    use HasFactory,HasSlug, InteractsWithMedia;
    protected $guarded=[];
    

    public function getSlugOptions() :SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallary');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_post');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tag');
    }
}
