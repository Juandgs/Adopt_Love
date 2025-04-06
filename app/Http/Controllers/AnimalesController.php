<?php

namespace App\Http\Controllers;

use App\Models\Animales;
use Illuminate\Http\Request;
use App\Models\Productos;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        return view('Animales.index', compact('productos'));
    }

    public function filtros(Request $request){
        $productosA = Productos::where('tipoProducto', "Aseo")->get();
        $productosC = Productos::where('tipoProducto', "Comida")->get();
        $productosJ = Productos::where('tipoProducto', "Juguetes")->get();
        $productosO = Productos::where('tipoProducto', "Otros")->get();
        $productos = Productos::all();

        $Oreo = "Aseo";
        if($Oreo == "Aseo"){
            return $productosA;
        }elseif ($Oreo == "Comida") {
            return $productosC;
        }elseif ($Oreo == "Juguetes") {
            return $productosJ;
        }elseif ($Oreo == "Otros") {
            return $productosO;
        }else{
            return $productos;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Animales $animales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animales $animales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animales $animales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animales $animales)
    {
        //
    }
}
