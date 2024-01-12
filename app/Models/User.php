<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
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

    public function post()
    {

        return $this->hasMany(Post::class);
    }


    public function following()
    {
        return $this->hasMany(Follow::class, 'follower_id', 'id');
    }

    public function follower()
    {
        return $this->hasMany(Follow::class, 'following_id', 'id');
    }


    public function bookmark()
    {
        return $this->belongsToMany(Post::class, 'bookmarks')->withTimestamps();
    }

    public function getIsFollowAttribute()
    {
        $user = Auth::user();

        return $user ? $this->follower()->where('follower_id', $user->id)->exists() : false;
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
