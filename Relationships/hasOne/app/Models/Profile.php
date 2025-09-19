<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['username','bio','avatar','website'];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
