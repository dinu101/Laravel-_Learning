<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class MechanicController extends Controller
{
   public function index(){
     $data = Mechanic::with('owner')->get();
    return $data;
   }
}
