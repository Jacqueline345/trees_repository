<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Compra;


class MisComprasController extends Controller
{
    public function index(){
        $user = Auth::user();
        $compras = DB::table('compras')
            ->where('user_id', $user->id) // Asumiendo que la columna `user_id` en la tabla `compras` almacena el ID del usuario
            ->get();        
        return view("/compras/mis_compras",compact('compras'));
    }
    public function verCompras()
    {
        //obtener al usuario logeado
        $user = Auth::user();

        $compras = $user->compras;

        return view('compras.mis_compras', compact('compras'));
    }
}
