<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trees;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{ 
    public function dashboard(){
        // Contar los amigos con el rol 'amigo'
    $friendsCount = DB::table('users')->where('role', 'amigo')->count();
    $treesAvailableCount = DB::table('arboles')->where('estado', 'Disponible')->count();
    $treesSoldCount = DB::table('arboles')->where('estado', 'Vendido')->count();
    $trees = DB::table('arboles')->get();

    // Pasar las variables a la vista
    return view('Adm/dashboard', [
        'friendsCount' => $friendsCount,
        'treesAvailableCount' => $treesAvailableCount,
        'treesSoldCount' => $treesSoldCount,
        'trees' => $trees,
    ]);
}
}