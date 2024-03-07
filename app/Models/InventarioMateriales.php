<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioMateriales extends Model
{
    use HasFactory;


    protected $table = 'inventario_materiales';

    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidad'
    ];

}
