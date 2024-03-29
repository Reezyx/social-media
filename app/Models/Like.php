<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Like extends Model
{
    use HasFactory;


    public $incrementing = true;
    protected $fillable = [
        'id',
        'user_id',
        'item_type',
        'item_id',
    ];


    public function likeable(): MorphTo
    {
        return $this->morphTo();
    }
}
