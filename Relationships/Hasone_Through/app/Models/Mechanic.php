<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{

protected $fillable = ['name'];    

    public function owner()
    {
        return $this->hasOneThrough(
            Owner::class,   // Final model
            Car::class,     // Intermediate model
            'mechanic_id',  // Foreign key on cars table
            'id',           // Foreign key on owners table
            'id',           // Local key on mechanics table
            'owner_id'      // Local key on cars table
        );
    }
}
