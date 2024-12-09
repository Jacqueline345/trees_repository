<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trees;

class AdminController extends Controller
{
    public function dashboard(){
        $friendsCount = User::count();
        $treesAvailableCount = Trees::where('estado', 'Disponible')->count();
        $treesSoldCount = Trees::where('estado', 'Vendido')->count();
        $trees = Trees::all();
    
        return view('adminDashboard', [
            'friendsCount' => $friendsCount,
            'treesAvailableCount' => $treesAvailableCount,
            'treesSoldCount' => $treesSoldCount,
            'trees' => $trees,
        ]);
    }
}
