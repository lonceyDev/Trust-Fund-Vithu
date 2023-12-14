<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
