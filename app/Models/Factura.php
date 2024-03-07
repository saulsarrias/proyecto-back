<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas';

    protected $fillable = [
        'id_cliente',
        'id_obra',
        'fecha_emision',
        'monto',
        'estado_pago',
        'retencion',
        'pie_factura'
    ];

    public function lineasFactura()
    {
        return $this->hasMany(LineaFactura::class, 'id_factura');
    }
}
