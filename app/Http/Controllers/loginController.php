<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\encargadoFund;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use App\Models\Personas;
use App\Models\Vendedores;

class loginController extends Controller
{
    public function create(): View
    {
        return view('clientes.login');
    }

    public function show(Request $request)
     {
        // Validar los datos ingresados
        $request->validate([
            'correo' => 'required|email',
            'password' => 'required',
        ]);
    
        // Buscar el usuario en la base de datos
        $personas = Personas::where('correo', $request->correo)->first();
        $vendedores = Vendedores::where('persona_id', $personas->id)->first();
        $cliente = Clientes::where('persona_id', $personas->id)->first();
        $Encargado = encargadoFund::where('persona_id', $personas->id)->first();

    
        // Verificar si el usuario existe y la contraseña es correcta
        if ($personas !== null && Hash::check($request->password, $personas->password)) {
            // Iniciar sesión manualmente
            Auth::login($personas);

            if($vendedores !== null){
                return redirect()->route('productos.index')->with('success', 'Bienvenido, ' . $personas->nombre);
            }elseif($cliente !== null){
                return redirect()->route('home')->with('success', 'Bienvenido, ' . $personas->nombre);
            }elseif($Encargado !== null){
                return redirect()->route('home')->with('success', 'Bienvenido, ' . $personas->nombre);
            }
    
        } else{
        return back()->withErrors(['correo' => 'Credenciales incorrectas.'])->withInput();
        }
    }
    }