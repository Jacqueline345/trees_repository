<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use Illuminate\Support\Facades\DB;

class ActualizaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:compras,id',
            'tamaño' => 'required|string',
            'foto' => 'required|image|max:2048',
            'updated_at' => 'required|date',

        ]);

        $imagePath = $request->file('image')->store('tree_images', 'public');

        ActualizaController::create([
            'id' => $request->tree_id,
            'tamaño' => $request->tamaño,
            'foto' => $imagePath,
            'updated_at' => $request->updated_at,

        ]);

        return response()->json(['message' => 'Tree update saved successfully.']);
    }
}


