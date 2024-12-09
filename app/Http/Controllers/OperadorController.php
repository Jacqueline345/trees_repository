<?php

namespace App\Http\Controllers;

use App\Models\Trees;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')->where('role', 'amigo')->get();
        $arbolesDisponibles = DB::table('arboles')->where('estado', 'Disponible')->get();
        $arbolesVendidos = DB::table('arboles')->where('estado', 'Vendido')->get();
        return view("/Historial/operadorDash", compact('arbolesDisponibles','arbolesVendidos'));

    }

    public function dash()
    {
        $friendsCount = DB::table('users')->where('role', 'amigo')->count();
        $treesAvailableCount = DB::table('arboles')->where('estado', 'Disponible')->count();
        $treesSoldCount = DB::table('arboles')->where('estado', 'Vendido')->count();
        $trees = DB::table('arboles')->get();

        // Pasar las variables a la vista
        return view('Historial/operadorDash', [
            'friendsCount' => $friendsCount,
            'treesAvailableCount' => $treesAvailableCount,
            'treesSoldCount' => $treesSoldCount,
            'trees' => $trees,
        ]);
    }
}

