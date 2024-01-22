<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model implements HasMedia
{
    use HasFactory,HasSlug,InteractsWithMedia;
    protected $guarded=[];

    protected $casts = [
       'featured_image'=>'array'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image');
    }

    public function getSlugOptions() :SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title') 
            ->saveSlugsTo('slug');       
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'event_tag');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
