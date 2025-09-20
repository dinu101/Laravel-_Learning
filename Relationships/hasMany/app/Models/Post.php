<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
