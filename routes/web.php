<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EncargadoFundController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/registroVendedor', [VendedoresController::class, 'create'])->name('registroVendedor');
Route::post('/registroVendedor/store', [VendedoresController::class, 'store']);

Route::get('/registroComprador', [ClientesController::class, 'create'])->name('registroComprador');
Route::post('/registroComprador/store', [ClientesController::class, 'store']);

Route::get('/registroEncargado', [EncargadoFundController::class, 'create'])->name('registroEncargado');
Route::post('/registroEncargado/store', [EncargadoFundController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';