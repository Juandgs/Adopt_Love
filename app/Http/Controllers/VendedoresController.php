<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use App\Http\Controllers\PersonasController;
use App\Models\Vendedores;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class VendedoresController extends PersonasController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('auth.register');
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Almacenar un recurso recién creado en el almacenamiento.
     */
    public function show(Personas $persona)
    {
        return view('persona.show', compact('persona'));
    }

    public function rolV(){
        $this->vendedorUS = true;
        $this->clienteUS =  false ;
        $this->fundacionUS = false;

        return $this->vendedorUS;
    }

    /*public function store(Request $request): RedirectResponse
    {
    $persona = parent::store($request);

    if (!$persona || !$persona->id) {
        return redirect()->back()->with('error', 'No se pudo obtener el ID de la persona.');
    }

    Vendedores::create([
        'persona_id' => $persona->id,
    ]);

    return redirect()->route('dashboard');
    } */

    public function store(Request $request): RedirectResponse
    {
    parent::store($request);//llamar un metodo de la clase padre

    $personaId = Auth::id();

    if (!$personaId) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión primero.');
    }
    
    Vendedores::create([
        'persona_id' => $personaId,
    ]);

    return redirect()->route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
