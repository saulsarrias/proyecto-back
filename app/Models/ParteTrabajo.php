<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParteTrabajo extends Model
{
    use HasFactory;

    protected $table = 'partes_trabajo';

    protected $fillable = [
        'id_user',
        'id_obra',
        'fecha_parte',

    ];

    public function tareas()
    {
        return $this->hasMany(Tarea::class, 'parte_trabajo_id', 'id');
    }

}
