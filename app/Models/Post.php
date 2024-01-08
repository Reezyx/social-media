<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasFactory,HasApiTokens;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'user_id',
        'content',
        'likes_count',
        'comment_count',
        'image'
        
    ];

    


    public function user(){

        return $this->belongsTo(User::class);
    }

    public function comment(){

        return $this->hasMany(Comment::class);
    }

    public function like(){

        return $this->morphMany(Like::class,"item");
    }
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

}
