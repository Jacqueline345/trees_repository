<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trees extends Model
{
     //desactiva las marcas de tiempo
    protected $table = 'arboles';   
    protected $fillable = [
        'especie',
        'nombre_cientifico',
        'tamaño',
        'ubicacion_geografica',
        'estado',
        'precio',
        'foto',
    ];

    protected function casts(): array{
        return['fecha_actualizada' => 'datetime'];
    }
}
