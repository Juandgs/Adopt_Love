<?php

namespace App\Http\Controllers;

use App\Models\Animales;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
use Illuminate\Support\Facades\Auth;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animales = Animales::paginate(5);
        return view('animales.index', compact('animales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'raza' => 'required',
            'tipoAnimal' => 'required',
            'imagen' => 'required'
        ]);
        $animale = $request->all();
        if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'images/';
            $imagenAnimal = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenAnimal);
            $animale['imagen'] = "$imagenAnimal";
        }
        /*$animale['fundacion_id'] = Auth::id();*/
        Animales::create($animale);
        return redirect()->route('animales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animales $animales)
    {
        //
    }

    public function filtros(Request $request)
    {
    $tipo = $request->input('tipoAnimal'); // Obtiene el filtro del formulario

    if ($tipo) {
        $animales = Animales::where('tipoAnimal', $tipo)->get();
    } else {
        $animales = Animales::all(); // Si no hay filtro, muestra todos
    }

    return view('productos.tiendaanimales', compact('animales'));
    }

    public function filtros2(Request $request)
    {
    $tipo = $request->input('tipoAnimal');

    if ($tipo) {
        $animales = Animales::where('tipoAnimal', $tipo)->paginate(10);
    } else {
        $animales = Animales::paginate(10);
    }
    return view('animales.index', compact('animales'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animales $animale)
    {
        return view('animales.edit', compact('animale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animales $animale):RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'raza' => 'required',
            'tipoAnimal' => 'required',
            'imagen' => 'nullable|image'
        ]);
        $animal = $request->all();
        if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'images/';
            $imagenAnimal = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg,$imagenAnimal);
            $animal['imagen'] = "$imagenAnimal";
        }else{
            unset($animal['imagen']);
        }
        $animale->update($animal);
        return redirect()->route('animales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animales $animale):RedirectResponse
    {
        $animale->delete();
        return redirect()->route('animales.index');
    }
}
