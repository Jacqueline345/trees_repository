<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsAdmin extends Controller
{
    public function handle($request, Closure $next)
    {
        // Validar si el usuario autenticado es administrador
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect()->route('home')->with('error_message', 'No tienes acceso a esta sección.');
    }
}
