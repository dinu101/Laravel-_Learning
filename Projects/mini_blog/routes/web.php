<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

// Route::get('/dashboard',[DashboardController::class,'show_post'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'show_post'])
    ->middleware(['auth'])
    ->name('dashboard');




Route::middleware(['auth'])->group(function(){
Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::post('/post',[PostController::class,'create'])->name('post.create');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::put('/post/edit/{id}',[PostController::class,'update'])->name('post.update');
Route::delete('/post/delete/{id}',[PostController::class,'destroy'])->name('post.destroy');
});

Route::get('/',[HomeController::class,'show_post'])->name('home');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
