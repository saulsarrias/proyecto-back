<?php

namespace App\Http\Controllers;

use App\Models\LineaFactura;
use Illuminate\Http\Request;

class LineaFacturaController extends Controller
{
    public function index(){
        $linea_facturas = LineaFactura::all();
        return response()->json($linea_facturas);
    }

    public function update(Request $request, $id){
        $linea_facturas = LineaFactura::find($id);
        $linea_facturas->update($request->all());
        return response()->json($linea_facturas);
    }

    public function store(Request $request){
        $linea_facturas = LineaFactura::create($request->all());
        return response()->json($linea_facturas, 201);
    }

    public function destroy($id){
        $linea_facturas = LineaFactura::find($id);
        $linea_facturas->delete();
        response()->json("Linea de factura borrada con exito");
    }

    public function getById($id){
        $linea_facturas = LineaFactura::where('id_factura', '=', "$id")->get();
        return response()->json($linea_facturas);
    }
}
