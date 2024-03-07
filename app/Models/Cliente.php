<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $fillable = [
      'nombre',
      'nif',
      'email',
      'direccion',
      'poblacion',
      'provincia',
      'pais',
      'codigo_postal',
      'telefono',
    ];
}
