<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model

{

    protected $fillable = ['name','mechanic_id','owner_id']; // Car
    public function Mechanic(){
        return $this->belongsTo(Mechanic::class);
    }

    public function owner(){
        return $this->belongsTo(Owner::class);
    }

}
