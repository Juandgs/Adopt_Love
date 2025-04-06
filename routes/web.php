<?php

use App\Http\Controllers\AnimalesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EncargadoFundController;
use App\Models\Vendedores;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


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
Route::get('/productos/mostrar', [ProductosController::class, 'mostrar'])->name('productos.mostrar');
Route::get('/productos/filtro', [ProductosController::class, 'filtros'])->name('productos.filtro');
Route::get('/productos/filtroCrud', [ProductosController::class, 'filtros2'])->name('productos.filtro2');
Route::resource('/productos', ProductosController::class);
Route::resource('animales', AnimalesController::class);

require __DIR__.'/auth.php';
/*
Route::post('/register/vendedor', [TuControlador::class, 'store'])->name('register.vendedor.submit');
Route::post('/register/fundacion', [TuControlador::class, 'store'])->name('register.fundacion.submit');
Route::post('/register/cliente', [TuControlador::class, 'store'])->name('register.cliente.submit');
Route::post('/login/vendedor', [TuControlador::class, 'login'])->name('login.vendedor.submit');
Route::post('/login/fundacion', [TuControlador::class, 'login'])->name('login.fundacion.submit');
Route::post('/login/cliente', [TuControlador::class, 'login'])->name('login.cliente.submit');
Route::post('/register/datosfundacion', [TuControlador::class, 'storeDatosFundacion'])->name('register.datosfundacion.submit');
// rutas nuevas vistas por verificar 
// Rutas de registro
Route::get('/registro/fundacion', [AuthController::class, 'showRegistrationFormFundacion'])->name('register.fundacion');
Route::post('/registro/fundacion', [AuthController::class, 'registerFundacion']);

Route::get('/registro/cliente', [AuthController::class, 'showRegistrationFormCliente'])->name('register.cliente');
Route::post('/registro/cliente', [AuthController::class, 'registerCliente']);

Route::get('/registro/vendedor', [AuthController::class, 'showRegistrationFormVendedor'])->name('register.vendedor');
Route::post('/registro/vendedor', [AuthController::class, 'registerVendedor']);

// Rutas de inicio de sesión
Route::get('/inicio-sesion/fundacion', [AuthController::class, 'showLoginFormFundacion'])->name('login.fundacion');
Route::post('/inicio-sesion/fundacion', [AuthController::class, 'loginFundacion']);

Route::get('/inicio-sesion/cliente', [AuthController::class, 'showLoginFormCliente'])->name('login.cliente');
Route::post('/inicio-sesion/cliente', [AuthController::class, 'loginCliente']);

Route::get('/inicio-sesion/vendedor', [AuthController::class, 'showLoginFormVendedor'])->name('login.vendedor');
Route::post('/inicio-sesion/vendedor', [AuthController::class, 'loginVendedor']);

// Rutas de logout (ejemplo)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');*/


// Rutas para las vistas de fundaciones
Route::get('/fundaciones', function () {
    return file_get_contents(public_path('fundaciones/fundaciones.html'));
});

Route::get('/fundaciones/animales', function () {
    return file_get_contents(public_path('fundaciones/animales.html'));
});

Route::get('/fundaciones/animales2', function () {
    return file_get_contents(public_path('fundaciones/animales2.html'));
});

Route::get('/fundaciones/animales3', function () {
    return file_get_contents(public_path('fundaciones/animales3.html'));
});

// Ruta para indexdos.html (asumiendo que está en public)
Route::get('/indexdos.html', function () {
    return file_get_contents(public_path('indexdos.html'));
});

// Ruta para Animales.js (asumiendo que está en public)
Route::get('/Animales.js', function () {
    return response()->file(public_path('Animales.js'), ['Content-Type' => 'application/javascript']);
});

// Ruta para Fundaciones.css (asumiendo que está en public)
Route::get('/Fundaciones.css', function () {
    return response()->file(public_path('Fundaciones.css'), ['Content-Type' => 'text/css']);
});
// Ruta para la tienda
/*Route::get('/tiendaanimales.html', function () {
    return file_get_contents(public_path('tiendaanimales.html'));
});*/

// Ruta para Tienda.css
Route::get('/Tienda.css', function () {
    return response()->file(public_path('Tienda.css'), ['Content-Type' => 'text/css']);
});

// Ruta para Tienda.js
Route::get('/Tienda.js', function () {
    return response()->file(public_path('Tienda.js'), ['Content-Type' => 'application/javascript']);
});


Route::resource('Vendedores', VendedoresController::class);

