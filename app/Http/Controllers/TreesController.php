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
        $arboles = Trees::table('arboles')->where('estado', 'Disponible')->get();
        return view('trees', ['arboles' => $arboles]);
    }
}