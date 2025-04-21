<?php

use App\Http\Controllers\AnimalesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EncargadoFundController;
use App\Models\Vendedores;
use App\Http\Controllers\FundacionController;
use App\Http\Controllers\loginController;
use App\Http\Middleware\ClienteMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Role;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {return view('home');})->name('home');


// VENDEDOR
Route::get('/register/vendedor', [VendedoresController::class, 'create'])->name('register.vendedor');
Route::post('/register/vendedor/store', [VendedoresController::class, 'store'])->name('vendedores.store');

// CLIENTE
Route::get('/register/cliente', [ClientesController::class, 'create'])->name('register.cliente');
Route::post('/register/cliente/store', [ClientesController::class, 'store'])->name('clientes.store');

// FUNDACIÓN
Route::get('/register/fundacion', [FundacionController::class, 'create'])->name('register.fundacion');
Route::post('/register/fundacion/store', [FundacionController::class, 'store'])->name('fundacion.store');

Route::get('/register/encargadofundacion/{fundacion}', [EncargadoFundController::class, 'createid'])->name('register.encargadofundacion');
Route::post('/register/encfundacion/store', [EncargadoFundController::class, 'store'])->name('encargadofundacion.store');


Route::get('/login', [loginController::class, 'create'])->name('login');
Route::post('/login/submit', [loginController::class, 'show'])->name('login.submit');

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

Route::get('/animales/mostrar', [AnimalesController::class, 'mostrar'])->name('animales.mostrar');
Route::get('/animales/filtro', [AnimalesController::class, 'filtros'])->name('animales.filtro');
Route::get('/animales/filtroCrud', [AnimalesController::class, 'filtros2'])->name('animales.filtro2');
Route::resource('animales', AnimalesController::class);

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


// Rutas de inicio de sesión
Route::get('/inicio-sesion/fundacion', [AuthController::class, 'showLoginFormFundacion'])->name('login.fundacion');
Route::post('/inicio-sesion/fundacion', [AuthController::class, 'loginFundacion']);

Route::get('/inicio-sesion/cliente', [AuthController::class, 'showLoginFormCliente'])->name('login.cliente');
Route::post('/inicio-sesion/cliente', [AuthController::class, 'loginCliente']);

Route::get('/inicio-sesion/vendedor', [AuthController::class, 'showLoginFormVendedor'])->name('login.vendedor');
Route::post('/inicio-sesion/vendedor', [AuthController::class, 'loginVendedor']);

// Rutas de logout (ejemplo)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');*/

/*
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

*/

//RUTAS DE LAS FUNDACIONES
Route::get('/fundaciones/general', [FundacionController::class, 'indexGeneral'])->name('fundaciones.general');
Route::get('/fundaciones/{id}/animales', [FundacionController::class, 'mostrarAnimales'])->name('fundaciones.animales');
Route::get('/fundaciones/animales2', [FundacionController::class, 'mostrarAnimales2'])->name('fundaciones.animales2');
Route::get('/fundaciones/animales3', [FundacionController::class, 'mostrarAnimales3'])->name('fundaciones.animales3');

Route::resource('/fundaciones', FundacionController::class);



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

