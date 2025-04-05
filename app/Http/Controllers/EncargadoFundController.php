<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Auth;
use App\Models\Fundacion;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class EncargadoFundController extends PersonasController
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function show(Personas $persona)
    {
        return view('persona.show', compact('persona'));
    }

  
    public function rolF(){
        $this->vendedorUS = false;
        $this->clienteUS = false;
        $this->fundacionUS = true;

        return $this->fundacionUS;
    }


    public function store(Request $request): RedirectResponse
    {
    parent::store($request);//llamar un metodo de la clase padre

    $personaId = Auth::id();

    if (!$personaId) {
        return redirect()->route('login')->with('error', 'Debes iniciar sesión primero.');
    }
    
    Fundacion::create([
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
