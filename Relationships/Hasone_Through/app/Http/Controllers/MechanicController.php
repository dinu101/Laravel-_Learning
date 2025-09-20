<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function index(){
     $ownerName = Mechanic::find(7)?->owner?->name;

    return response()->json([
        'owner_name' => $ownerName ?? 'Not found'
    ]);    
    }
}
