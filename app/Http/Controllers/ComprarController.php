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

        $arbol = Trees::find($request->id); // Usa el ID enviado en el request

        if (!$arbol) {
            return redirect()->back()->with('error', 'El árbol especificado no existe.');
        }

        $compra = new Compra();
        $compra->user_id = $userId;
        $compra->especie = $request->especie;
        $compra->nombre_cientifico = $request->nombre_cientifico;
        $compra->tamaño = $request->tamaño;
        $compra->ubicacion_geografica = $request->ubicacion_geografica;
        $compra->estado = $request->estado;
        $compra->precio = $request->precio;

        if ($request->hasFile('foto')) {
            // Guarda la imagen en el almacenamiento
            $path = $request->file('foto')->store('public/fotos');
            $relativePath = str_replace('public/', 'storage/', $path); // Ajusta la ruta para acceso público
            $compra->foto = $relativePath;
        } elseif (!empty($arbol->foto)) {
            // Reutiliza la imagen del árbol si ya existe
            $compra->foto = $arbol->foto;
        }

        DB::table('arboles')
            ->where('id', $request->id) // ID enviado desde el formulario
            ->update(['estado' => 'Vendido']); // Cambiar el estado a 'Vendido'

        $compra->save();


        return to_route('trees');
    }
}

