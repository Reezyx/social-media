<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = ['following_id', 'follower_id'];

    public function following()
    {
        return $this->belongsTo(User::class, 'following_id', 'id');
    }

    public function follower()
    {
        return $this->belongsTo(User::class, 'follower_id', 'id');
    }
}
