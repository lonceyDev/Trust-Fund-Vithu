<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model implements HasMedia

{
    use HasFactory,HasSlug,InteractsWithMedia;
    protected $casts = [
        'extra' => 'json', 
        'featured_image'=>'array'
    ];
    protected $guarded=[];

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
        return $this->belongsToMany(Tag::class,'project_tag');
    }

}
