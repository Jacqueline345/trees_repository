<?php

namespace App\Http\Controllers;

use App\Models\Trees;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TreesController extends Controller
{
    public function index()
    {
        $arboles = DB::table('arboles')->where('estado', 'Disponible')->get();
        return view("/trees/trees",compact('arboles'));
    }

    public function verArboles()
    {
        $arboles = Trees::where('estado', 'Disponible')->get();
        return view('trees', ['arboles' => $arboles]);
    }

    public function addTree()
    {
        return view('addTree'); // Muestra el formulario
    }

    public function storeTree(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            'especie' => 'required|string|max:255',
            'nombre_cientifico' => 'required|string|max:255',
            'tamaño' => 'required|string|max:255',
            'ubicacion_geografica' => 'required|string|max:255',
            'estado' => 'required|in:Disponible,Vendido',
            //'foto' => 'nullable|image|max:2048',
        ]);

        // Crear un nuevo árbol
        $tree = new Tree();
        $tree->especie = $request->input('especie');
        $tree->nombre_cientifico = $request->input('nombre_cientifico');
        $tree->tamaño = $request->input('tamaño');
        $tree->ubicacion_geografica = $request->input('ubicacion_geografica');
        $tree->estado = $request->input('estado');

        // Manejar la subida de la foto
        //if ($request->hasFile('foto')) {
       //     $path = $request->file('foto')->store('public/fotos');
       //     $tree->foto = $path;
       // }

        $tree->save(); // Guarda en la base de datos

        return redirect()->route('dashboard')->with('success', 'Árbol agregado exitosamente.');
    }
}