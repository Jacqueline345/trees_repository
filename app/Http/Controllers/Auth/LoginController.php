<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function redirectPath()
    {
        if (\Auth::check()) { // Verificamos si el usuario está autenticado
            $user = \Auth::user();
            $role = auth()->user()->role;


            // Verificamos si el usuario está activo
            if ($user->active === 1) {
                // Validamos el rol del usuario
                if ($role === 'amigo') {
                    return "/home"; // Redirige al home si es 'amigo'
                } elseif ($role === 'admin') {
                    return "/dashboard"; // Redirige al dashboard de administrador
                } else {
                    \Auth::logout(); // Desloguea al usuario si no tiene un rol válido
                    return "/"; // Redirige a la página de inicio o login
                }
            } else {
                \Auth::logout(); // Desloguea al usuario si no está activo
                return "/"; // Redirige a la página de inicio o login
            }
        } else {
            return "/login"; // Redirige al login si no está autenticado
        }

    }
}