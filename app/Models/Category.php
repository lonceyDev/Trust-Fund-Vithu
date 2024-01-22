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
        return $this->belongsToMany(Post::class,'category_post');
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class,'category_project');
    }
    public function events()
    {
        return $this->belongsToMany(Event::class,'category_event');
    }

}
