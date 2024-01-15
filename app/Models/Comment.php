<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;


    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'comment',
        'post_id',
        'user_id',
        'parent_comment_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function post()
    {

        return $this->belongsTo(Post::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }

    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    public function like(): MorphOne
    {
        return $this->morphOne(Like::class, 'item');
    }


    public function getIsMineAttribute()
    {
        $user = Auth::user();
        if ($this->user_id == $user->id) {
            return true;
        }
        return false;
    }

    public function getIsLikeAttribute()
    {
        $user = Auth::user();

        return $user ? $this->like()->where('user_id', $user->id)->exists() : false;
    }





    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
