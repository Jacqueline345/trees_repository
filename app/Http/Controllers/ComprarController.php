<?php

namespace App\Http\Controllers;
use App\Models\Compra;
use App\Models\Trees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ComprarController extends Controller
{
    public function mostrarCompra($id)
    {
        // Obtén el árbol por su ID
        $arbol = DB::table('arboles')->where('id', $id)->first();

        if (!$arbol) {
            return redirect()->back()->with('error', 'Árbol no encontrado');
        }

        return view('/compras/comprar', compact('arbol'));
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

        DB::table('arboles')
            ->where('id', $request->id) // ID enviado desde el formulario
            ->update(['estado' => 'Vendido']); // Cambiar el estado a 'Vendido'

            $compra->save();


        return to_route('trees');
    }
}

