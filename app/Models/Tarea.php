<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $table = 'tareas';

    protected $fillable = [
        'parte_trabajo_id',
        'descripcion',
        'personal_asignado',
        'precio_por_hora',
        'horas_trabajadas',
    ];


    public function parteTrabajo()
    {
        return $this->belongsTo(ParteTrabajo::class, 'parte_trabajo_id', 'id');
    }
}
