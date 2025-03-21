<?php

use App\Http\Controllers\AuthManagerController;
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

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('admin');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('admin');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('admin');


Route::resource('photos', PhotoController::class);

Route::get('/manage-photos', [AuthManagerController::class, 'index'])->name('photos.manage')->middleware('admin');

require __DIR__.'/auth.php';
