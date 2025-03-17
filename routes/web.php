<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/gallery', function(){
    return view('index');
})->name('gallery');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/photos', [PhotoController::class, 'store'])->name('photo.create');
    Route::get('/photos', [PhotoController::class, 'edit'])->name('photo.edit');
    Route::patch('/photos', [PhotoController::class, 'update'])->name('photo.update');
    Route::delete('/photos', [PhotoController::class, 'destroy'])->name('photo.destroy');

});

require __DIR__.'/auth.php';
