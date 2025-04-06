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
     * Mostrar el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('vendedores.register_vendedor');
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

    public function store(Request $request): RedirectResponse
{
    // Guardar persona
    $request->validate([
        'nombre' => ['required', 'string', 'max:255'],
        'apellido' => ['required', 'string', 'max:255'],
        'telefono' => ['required', 'string', 'max:255'],
        'correo' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:personas'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $persona = Personas::create([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'correo' => $request->correo,
        'telefono' => $request->telefono,
        'password' => Hash::make($request->password),
    ]);

    event(new Registered($persona));
    Auth::login($persona);

    // Guardar vendedor usando ID de la persona autenticada
    Vendedores::create([
        'persona_id' => $persona->id,
    ]);

    return redirect()->route('productos.index');
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
