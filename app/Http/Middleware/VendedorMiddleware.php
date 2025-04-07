<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Personas;
use App\Models\Vendedores;

class VendedorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar autenticación (ejemplo)
         // Buscar el usuario en la base de datos
         $personas = Personas::where('correo', $request->correo)->first();
         if ($personas == null) {
            return response()->json(['error' => 'No autenticado'], 401);
        }
         $vendedores = Vendedores::where('persona_id', $personas->id)->first();

        if ($vendedores == null) {
            return response()->json(['error' => 'No tienes los permisos'], 401);
        }

        // Registrar la solicitud en el log
        Log::info('Solicitud de usuario', ['Persona' =>  $personas->id, 'url' => $request->url()]);

        return $next($request);
    }
}
