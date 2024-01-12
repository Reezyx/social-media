<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasFactory, HasApiTokens;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'user_id',
        'content',
        'likes_count',
        'comment_count',
        'image'

    ];
    protected $append = [
        'is_mine', 'is_like'
    ];




    public function user()
    {

        return $this->belongsTo(User::class);
    }


    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }

    public function like(): MorphOne
    {
        return $this->morphOne(Like::class, 'item');
    }


    public function bookmark()
    {
        return $this->belongsToMany(User::class, 'bookmarks')->withTimestamps();
    }


    public function getIsMineAttribute()
    {
        $user = Auth::user();

        return $user ? $this->like()->where('user_id', $user->id)->exists() : false;
    }


    public function getIsLikeAttribute()
    {
        $user = Auth::user();

        return $user ? $this->like()->where('user_id', $user->id)->exists() : false;
    }

    public function getIsBookmarkAttribute()
    {
        $user = Auth::user();

        return $user ? $this->bookmark()->where('user_id', $user->id)->exists() : false;
    }




    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
