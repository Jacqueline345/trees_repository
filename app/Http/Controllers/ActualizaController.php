<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use Illuminate\Support\Facades\DB;

class ActualizaController extends Controller
{

    public function mostrarCompra($id)
    {
        // Obtén el árbol por su ID
        $compras = DB::table('compras')->where('id', $id)->first();

        if (!$compras) {
            return redirect()->back()->with('error', 'Árbol no encontrado');
        }

        return view('/actualiza', compact('compras'));
    }
    public function actualiza(Request $request)
    {
        // Encuentra el registro usando Eloquent
        $compras = Compra::find($request->id);

        // Verifica si la compra existe
        if (!$compras) {
            return redirect()->back()->with('error', 'Compra no encontrada.');
        }

        // Actualiza los atributos
        $compras->tamaño = $request->tamaño;
        $compras->foto = $request->foto;

        // Guarda los cambios
        $compras->save();

        // Redirige a la ruta 'operador'
        return to_route('operadorDash');
    }

}
