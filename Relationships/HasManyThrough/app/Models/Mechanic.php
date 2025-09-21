<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    public function owner(){
        return $this->hasManyThrough(
         Owner::class,
         Car::class,
        'mechanic_id',
        'car_id',
        'id',
        'id'
    );
    }
}
