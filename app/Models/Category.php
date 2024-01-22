<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,HasSlug;

    protected $guarded=[];
    public function getSlugOptions() :SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name') 
            ->saveSlugsTo('slug');       
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }

}
