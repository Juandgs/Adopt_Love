<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use App\Http\Controllers\PersonasController;
use App\Models\Clientes;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class ClientesController extends PersonasController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

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

    protected $vendedorUS = false;
    protected $clienteUS = false;
    protected $fundacionUS = false;



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
    
    Clientes::create([
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
