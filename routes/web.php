<?php

use App\Http\Controllers\AnimalesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductosController;
use App\Models\Animales;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/productos', ProductosController::class);
    Route::resource('/animales', AnimalesController::class);
});

require __DIR__.'/auth.php';