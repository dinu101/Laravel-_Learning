<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //protected $hidden = ['pivot'];

    public function students(){
        return $this->belongsToMany(Student::class)->withPivot('student_id','course_id');
    }
}
