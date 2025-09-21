<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CountryController;
use App\Http\Controllers\MechanicController;


//Route::get('/',[CountryController::class,'index']);

Route::get('/',[MechanicController::class,'index']);