<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Panel;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tag_user');
    }
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasRole(['Admin','Manager','Super Admin']); 
    }
    public function before(User $user, string $ability): bool|null
{
    if ($user->hasRole('Super Admin')) {

        return true;
    }
 
    return null; 
}
}
