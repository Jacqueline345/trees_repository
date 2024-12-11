<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Compra;

use Illuminate\Http\Request;

class AmigoCpntroller extends Controller
{
    public function index()
    {
        // Obtener usuarios con rol "amigo"
        $amigos = User::where('role', 'amigo')->get();
        return view('amigos.index', compact('amigos'));
    }

    public function show($id)
    {
        // Obtener usuario y sus compras
        $amigo = User::with('compras')->findOrFail($id);
        return view('amigos.show', compact('amigo'));
    }

    public function editCompra($id)
    {
        // Editar una compra específica
        $compra = Compra::findOrFail($id);
        return view('amigos.edit', compact('compra'));
    }

    public function updateCompra(Request $request)
    {
        $compras = Compra::find($request->id);

        // Verifica si la compra existe
        if (!$compras) {
            return redirect()->back()->with('error', 'Compra no encontrada.');
        }

        // Actualiza los atributos
        $compras->especie = $request->especie;
        $compras->tamaño = $request->tamaño;
        $compras->ubicacion_geografica = $request->ubicacion_geografica;
        $compras->estado = $request->estado;

        // Guarda los cambios
        $compras->save();

        // Redirige a la ruta 'operador'
        return to_route('amigos.show',$compras->user_id);
    }
        
}
