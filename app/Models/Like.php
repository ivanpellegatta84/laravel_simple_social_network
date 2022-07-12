<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'users_id',
        'users_username'
    ];

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }
}
