<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MechanicController;

Route::get('/',[MechanicController::class,'index']);
