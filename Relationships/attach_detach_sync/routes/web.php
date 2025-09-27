<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//Route::get('/hasone',[StudentController::class,'index1']);
Route::get('/',[StudentController::class,'index']);
