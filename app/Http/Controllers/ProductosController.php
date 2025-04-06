<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::paginate(5);
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'tipoProducto' => 'required|in:Aseo,Comida,Juguetes,Otros',
            'imagen' => 'required'
        ]);
        $producto = $request->all();
        if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'images/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenProducto);
            $producto['imagen'] = "$imagenProducto";
        }
        $producto['user_id'] = Auth::id();
        Productos::create($producto);
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $producto):RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'tipoProducto' => 'required',
            'imagen' => 'nullable|image'
        ]);
        $prod = $request->all();
        if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'images/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenProducto);
            $prod['imagen'] = "$imagenProducto";
        }else{
            unset($prod['imagen']);
        }
        $producto->update($prod);
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $producto):RedirectResponse
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
