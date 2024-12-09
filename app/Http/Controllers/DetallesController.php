<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class DetallesController extends Controller
{

    public function index($id)
    {
        $compras = DB::table('compras')->where('id', $id)->first();

        return view('compras.detalles', compact('compras'));  // Pasa la variable $compras a la vista
    }


    public function verDetalles($id)
    {
        // Obtén la compra utilizando where para filtrar por ID
        $compras = DB::table('compras')->where('id', $id)->first();
    
        // Verifica si se encontró el registro
        if (!$compras) {
            return redirect()->back()->with('error', 'Compra no encontrada.');
        }
    
        // Accede a la propiedad id de un objeto $compras
        return view('compras.detalles', compact('compras'));
    }
}    