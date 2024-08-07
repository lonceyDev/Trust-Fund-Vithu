<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tag extends Model
{
    use HasFactory,HasSlug;
    protected $guarded=[];

    public function getSlugOptions() :SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name') 
            ->saveSlugsTo('slug');       
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class,'project_tag');
    }
    public function events()
    {
        return $this->belongsToMany(Event::class,'event_tag');
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_tag');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'tag_user');
    }
}
