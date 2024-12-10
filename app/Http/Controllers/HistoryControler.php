<?php

namespace App\Http\Controllers;

use App\Models\Trees;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class HistoryControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $compras = DB::table('compras')->where('id', $id)->first();

        return view('compras.history', compact('compras'));  // Pasa la variable $compras a la vista
    }


    public function history($id)
    {
        // Obtén la compra utilizando where para filtrar por ID
        $compras = DB::table('compras')->where('id', $id)->first();
    
        // Verifica si se encontró el registro
        if (!$compras) {
            return redirect()->back()->with('error', 'Compra no encontrada.');
        }
    
        // Accede a la propiedad id de un objeto $compras
        return view('compras.history', compact('compras'));
    }
}    