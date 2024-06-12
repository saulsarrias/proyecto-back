<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlHorario extends Model
{
    use HasFactory;
    protected $table = 'control_horario';

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'id_user',
        'Fecha_Hora_Entrada',
        'Fecha_Hora_Salida',
    ];


    public function empleado()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
