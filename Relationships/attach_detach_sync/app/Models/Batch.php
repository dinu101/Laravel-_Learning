<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
