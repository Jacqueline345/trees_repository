<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $friendsCount = User::count();
        $treesAvailableCount = Tree::where('estado', 'disponible')->count();
        $treesSoldCount = Tree::where('estado', 'vendido')->count();
        $trees = Tree::all();

        return view('adminDashboard', [
            'friendsCount' => $friendsCount,
            'treesAvailableCount' => $treesAvailableCount,
            'treesSoldCount' => $treesSoldCount,
            'trees' => $trees,
        ]);
    }
}
