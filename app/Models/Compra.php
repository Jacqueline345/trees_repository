<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $mis_compras = 'compras';   
    protected $fillable = [
        'user_id',
        'especie',
        'nombre_cientifico',
        'tamaño',
        'ubicacion_geografica',
        'estado',
        'precio',
        'foto',
    ];
}
