<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('index',[PostController::class,'index']);
