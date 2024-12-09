<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory , Notifiable;
    protected $table = 'admin';

    protected $fillable = [
        'name',
        'lastname',
        'phone_number',
        'email',
        'address',
        'country',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
