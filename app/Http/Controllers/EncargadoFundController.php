<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\FundacionController;
use App\Models\encargadoFund;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
class EncargadoFundController extends PersonasController
{

    public function createid($fundacionId)
    {
        return view('fundaciones.register_fundacion', ['fundacionId' => $fundacionId]);
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
        $request->validate([
            'fundacion_id',
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
            Auth::login($persona);
    
    encargadoFund::create([
        'fk_id_fundacion' => $request->fundacion_id,
        'persona_id' => $persona->id,
    ]);

    return redirect()->route('home');
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
