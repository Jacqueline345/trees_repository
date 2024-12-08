<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $mis_compras = 'mis_compras';   
    protected $fillable = [
        'user_id',
        'arbol_id',
        'especie',
        'nombre_cientifico',
        'tamaño',
        'ubicacion_geografica',
        'estado',
        'precio',
        'foto',
    ];
}
