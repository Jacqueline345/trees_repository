<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Compra;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function index() {
        return view("/auth/login");
    }
    public function register(){
        return view("/auth/register");
    }
    public function registrar(Request $request){
        
        $item = new User();
        $item->name = $request->name;
        $item->lastname = $request->lastname;
        $item->phone_number = $request->phone_number;
        $item->email = $request->email;
        $item->address = $request->address;
        $item->country = $request->country;
        $item->password = Hash::make($request->password);
        $item->role = $request->role;
        $item->save();
        return to_route('login');

    }
    public function logear (Request $request)
    {
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credenciales)) {
            // Verificamos si el usuario está autenticado correctamente
            if (auth()->check()) {
                $role = auth()->user()->role;

                // Si el rol del usuario es 'amigo'
                if ($role === 'amigo') {
                    return redirect()->route('home');
                }
                // Si el rol del usuario es 'admin'
                else if ($role === 'admin') {
                    return redirect()->route('dashboard');
                } else if ($role === 'operador'){
                    return redirect()->route('operadorDash');
                }
            }
        } else {
            // Si las credenciales no son correctas, redirige al login
            return to_route('login');
        }

    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }

    public function home (){
        return view('dashboard/home');
    }

    public function compras(){
        return $this->hasMany(Compra::class);
    }

    public function misCompras()
    {
        $compras = Auth::user()->compras;
        return view ('/compras/mis_compras', compact('mis_compras'));
    }
    public function verUser(){
        
    }
    
}
