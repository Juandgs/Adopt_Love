<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\Animales;
use App\Models\Vendedores;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;



class administradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(Request $request)
{
    // Filtro para productos
    $tipoFiltroProducto = $request->input('tipo');
    $queryProductos = Productos::query();

    if ($tipoFiltroProducto) {
        $queryProductos->where('tipoProducto', $tipoFiltroProducto);
    }

    $productos = $queryProductos->get();

    // Conteo de productos
    $conteoQueryProducto = Productos::query();
    if ($tipoFiltroProducto) {
        $conteoQueryProducto->where('tipoProducto', $tipoFiltroProducto);
    }

    $conteoPorTipoProducto = $conteoQueryProducto->selectRaw('tipoProducto, count(*) as total')
        ->groupBy('tipoProducto')
        ->pluck('total', 'tipoProducto');

    $tiposProducto = Productos::select('tipoProducto')->distinct()->pluck('tipoProducto');

    // Filtro para animales
    $tipoFiltroAnimal = $request->input('tipoA');
    $queryAnimales = Animales::query();

    if ($tipoFiltroAnimal) {
        $queryAnimales->where('tipoAnimal', $tipoFiltroAnimal);
    }

    $animales = $queryAnimales->get();

    // Conteo de animales
    $conteoQueryAnimal = Animales::query();
    if ($tipoFiltroAnimal) {
        $conteoQueryAnimal->where('tipoAnimal', $tipoFiltroAnimal);
    }

    $conteoPorTipoAnimal = $conteoQueryAnimal->selectRaw('tipoAnimal, count(*) as total')
        ->groupBy('tipoAnimal')
        ->pluck('total', 'tipoAnimal');

    $tiposAnimal = Animales::select('tipoAnimal')->distinct()->pluck('tipoAnimal');

    // Vendedores
    $vendedores = Vendedores::all();

    

    // Pasar todas las variables a la vista
    return view('dashboard', compact(
        'productos', 'conteoPorTipoProducto', 'tiposProducto',  // Tipos para productos
        'animales', 'conteoPorTipoAnimal', 'tiposAnimal',       // Tipos para animales
        'vendedores', 'tiposProducto' // Añadir 'tiposProducto' para que esté disponible en la vista
    ));
}

     

public function generarPDFproductos(Request $request)
{
    $tipo = $request->input('tipoProducto');

    $query = Productos::query();

    if ($tipo) {
        $query->where('tipoProducto', $tipo);
    }

    $productos = $query->with('vendedor')->get();

    $pdf = Pdf::loadView('pdf.productos', compact('productos', 'tipo'));
    return $pdf->download('reporte_productos.pdf');
}
    
public function generarPDFanimales(Request $request)
{
    $tipo = $request->input('tipoAnimal');

    $query = Animales::query();

    if ($tipo) {
        $query->where('tipoAnimal', $tipo);
    }

    $animales = Animales::select('nombre', 'edad', 'raza', 'tipoAnimal')->get();

    $pdf = Pdf::loadView('pdf.animales', compact('animales', 'tipo'));
    return $pdf->download('reporte_animales.pdf');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}
