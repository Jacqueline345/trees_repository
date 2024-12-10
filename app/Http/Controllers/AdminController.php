<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trees;
//use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{ 
    public function dashboard(){
        // Contar los amigos con el rol 'amigo'
        $friendsCount = User::where('role','amigo')->count();
        // Contar árboles disponibles y vendidos
        $treesAvailableCount = Trees::where('estado', 'Disponible')->count();
        $treesSoldCount = Trees::where('estado', 'Vendido')->count();
        // Obtener todos los árboles
        $trees = Trees::all();
        //Obtener árboles disponibles
        $treesAvailable = Trees::where('estado', 'Disponible')->get();

        // Pasar las variables a la vista
        return view('Adm/dashboard', [
            'friendsCount' => $friendsCount,
            'treesAvailableCount' => $treesAvailableCount,
            'treesSoldCount' => $treesSoldCount,
            'trees' => $trees,
            'treesAvailable' => $treesAvailable,
        ]);
    }
}
    