<?php

namespace App\Http\Controllers;

use App\Models\Fundacion;
use Illuminate\Http\Request;
use App\Models\Personas;
use App\Http\Controllers\PersonasController;
use App\Models\encargadoFund;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class FundacionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fundaciones.register_datosfundacion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string'],
            'correo' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:personas'],
            'ciudad' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
        ]);
    
        $fundacion = Fundacion::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'ciudad' => $request->ciudad,
            'descripcion' => $request->descripcion,
        ]);
    

        return redirect()->route('register.encargadofundacion', ['fundacion' => $fundacion->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Fundacion $fundacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fundacion $fundacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fundacion $fundacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fundacion $fundacion)
    {
        //
    }
}
