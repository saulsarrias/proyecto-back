<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaFactura extends Model
{
    use HasFactory;

    protected $table = 'lineas_factura';

    protected $fillable = [
        'id_factura',
        'concepto',
        'base_unitaria',
        'iva',
        'precio'
    ];

    public function factura()
    {
        return $this->belongsTo(Factura::class, 'id_factura');
    }
}
