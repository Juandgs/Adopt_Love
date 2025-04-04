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

class ClienteMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar autenticación (ejemplo)
         // Buscar el usuario en la base de datos
         $personas = Personas::where('correo', $request->correo)->first();
         $cliente = Clientes::where('persona_id', $personas->id)->first();


        if ($cliente == null || !$personas) {
            return response()->json(['error' => 'No autenticado'], 401);
        }

        // Registrar la solicitud en el log
        Log::info('Solicitud de usuario', ['Persona' => $personas->id, 'url' => $request->url()]);

        return $next($request);
    }
}
