<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Clientes;
use App\Models\Personas;
use App\Models\Vendedores;
use App\Models\encargadoFund;
use Illuminate\Support\Facades\Auth;


class ClienteMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $persona = Auth::user(); // Obtenemos el usuario autenticado

        if (!$persona) {
            return response()->json(['error' => 'No autenticado'], 401);
        }

        $cliente = Clientes::where('persona_id', $persona->id)->first();

        if (!$cliente) {
            return response()->json(['error' => 'No autorizado como cliente'], 403);
        }

        Log::info('Solicitud de usuario cliente', [
            'Persona ID' => $persona->id,
            'Correo' => $persona->correo,
            'URL' => $request->url(),
        ]);

        return $next($request);
    }
}
