<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::get('/',[VideoController::class,'index']);
Route::get('/papa',[VideoController::class,'papa']);