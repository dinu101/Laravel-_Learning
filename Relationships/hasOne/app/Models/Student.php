<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable=['name','email','password'];

   public function profile(){
    return $this->hasOne(Profile::class);
   }

}
