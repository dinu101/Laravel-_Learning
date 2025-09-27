<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Batch;
use App\Models\Course;

use Illuminate\Http\Request;

class StudentController extends Controller

{
    
// 

// for hasmany //
// public function index(){
//    $data = Student::select('id','name')
//    ->with('profile:student_id,bio','batches:student_id,batch_name','courses')
//    ->find(1);
  
//    return $data;
// }

//many to many
public function index(){
   $data = Student::with('courses')->find(1);
   $data->courses()->detach([1,2,3,4,6]);
   return $data;
}
}