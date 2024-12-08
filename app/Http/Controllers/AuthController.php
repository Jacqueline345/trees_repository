<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $item->save();
        return to_route('login');

    }
    public function logear (Request $request){
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credenciales)){
           return to_route('home');
        } else {
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
}
