<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Route::get('/',[StudentController::class,'index']);
Route::get('/', [StudentController::class, 'index'])->name('students.index');
