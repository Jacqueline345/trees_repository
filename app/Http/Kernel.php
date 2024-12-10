<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Los middleware globales de la aplicación.
     *
     * @var array
     */
    protected $middleware = [
        // Middleware global de la aplicación
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ];

    /**
     * Los middleware de ruta de la aplicación.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Middleware que autentica al usuario
        'auth' => \App\Http\Middleware\Authenticate::class,
        
        // Middleware personalizado para verificar el rol del usuario
        'role' => \App\Http\Middleware\CheckRole::class, // Registra el middleware CheckRole aquí
    ];
}
