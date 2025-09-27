<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //hasone student->profile
    public function profile(){
        return $this->hasOne(Profile::class);
    }
    //hasmany student -> batch
    public function batches(){
        return $this->hasMany(Batch::class);
    }
    // many to many student ->
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
