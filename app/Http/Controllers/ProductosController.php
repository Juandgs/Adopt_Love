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

    public function mostrar(){
        $productos = Productos::all();
        return view('productos.tiendaanimales', compact('productos'));
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
        /*$producto['vendedor_id'] = Auth::id();*/
        Productos::create($producto);
        return redirect()->route('productos.index');
    }

    /*public function filtros(Request $request){
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
    }*/

    public function filtros(Request $request)
    {
    $tipo = $request->input('tipoProducto'); // Obtiene el filtro del formulario

    if ($tipo) {
        $productos = Productos::where('tipoProducto', $tipo)->get();
    } else {
        $productos = Productos::all(); // Si no hay filtro, muestra todos
    }

    return view('productos.tiendaanimales', compact('productos'));
    }

    public function filtros2(Request $request)
    {
    $tipo = $request->input('tipoProducto');

    if ($tipo) {
        $productos = Productos::where('tipoProducto', $tipo)->paginate(10);
    } else {
        $productos = Productos::paginate(10);
    }

    return view('productos.index', compact('productos'));
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
