<?php

namespace App\Http\Controllers;
use App\Models\Compra;
use App\Models\Trees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ComprarController extends Controller
{
    public function mostrarCompra($id)
    {
        $arbol = DB::table('arboles')
            ->where('id', $request->arbol_id) // ID enviado desde el formulario
        if (!$arbol) {
            return redirect()->back()->with('error', 'Árbol no encontrado');
        }

        return view('comprar', compact('arbol'));
    }

    public function comprar(Request $request)
    {
        $userId = Auth::id();

        $compra = new Compra();
        $compra->user_id = $userId;
        $compra->especie = $request->especie;
        $compra->nombre_cientifico = $request->nombre_cientifico;
        $compra->tamaño = $request->tamaño;
        $compra->ubicacion_geografica = $request->ubicacion_geografica;
        $compra->estado = $request->estado;
        $compra->precio = $request->precio;
        $compra->foto = $request->foto;
        $compra->save();

        $arboles = DB::table('arboles')
            ->where('id', $request->arbol_id) // ID enviado desde el formulario
            ->update(['estado' => 'Vendido']); // Cambiar el estado a 'Vendido'
        $arboles->save();

        return to_route('mis_compras');
    }
}

