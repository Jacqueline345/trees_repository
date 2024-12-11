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
            'precio' => 'required|string|max:255',
            'estado' => 'required|in:Disponible,Vendido',
            'foto' => 'nullable|image|max:2048',
        ]);

        // Crear un nuevo árbol
        $tree = new Trees();
        $tree->especie = $request->input('especie');
        $tree->nombre_cientifico = $request->input('nombre_cientifico');
        $tree->tamaño = $request->input('tamaño');
        $tree->ubicacion_geografica = $request->input('ubicacion_geografica');
        $tree->precio = $request->input('precio');
        $tree->estado = $request->input('estado');

        //Manejar la subida de la foto
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/fotos');
            $relativePath = str_replace('public/', 'storage/', $path); // Ajusta la ruta para acceso público
            $tree->foto = $relativePath;
        }

        $tree->save(); // Guarda en la base de datos

        return redirect()->route('dashboard')->with('success', 'Árbol agregado exitosamente.');
    }
    /** 
     * Métof+do para mostrar el formulario de editar
    */
    public function edit($id){
        $tree = Trees::findOrFail($id);//busca el árbol por ID
        if (!$tree) {
            return redirect()->route('dashboard')->with('error', 'Árbol no encontrado');
        }
        return view('trees.editTree', compact('tree'));//pasa los datos al formulario 
    }
    /**
     * Metodo para eliminar el arbol
     */
    public function destroy($id){
        $tree = Trees::findOrFail($id); // Encuentra el árbol por ID

        // Elimina el árbol
        $tree->delete();

        // Redirige con un mensaje de éxito
        return redirect()->route('dashboard')->with('success', 'Árbol eliminado exitosamente');
    }
}