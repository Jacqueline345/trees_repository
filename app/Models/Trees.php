<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trees extends Model
{
    protected $table = 'arboles';   
    protected $fillable = [
        'especie',
        'nombre_cientifico',
        'tamaño',
        'ubicacion_geografica',
        'estado',
        'precio',
        'foto',
        'fecha_actualizada',
    ];
}
