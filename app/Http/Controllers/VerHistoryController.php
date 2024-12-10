<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerHistoryController extends Controller
{
    public function index()
    {
        $compras = DB::table('compras')->get();

        return view('Historial.verHistorial', compact('compras'));  // Pasa la variable $compras a la vista
    }


    public function Verhistory()
    {
        // Obtén la compra utilizando where para filtrar por ID
        $compras = DB::table('compras')->get();
    
        // Verifica si se encontró el registro
        if (!$compras) {
            return redirect()->back()->with('error', 'Compra no encontrada.');
        }
    
        // Accede a la propiedad id de un objeto $compras
        return view('Historial.verHistorial', compact('compras'));
    }
}    
