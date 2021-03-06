<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function posts () {
        return $this->hasOne(Post::class);
    }

    public function author () {
        return $this->hasOne(User::class);
    }
}
