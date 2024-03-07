<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        $facturas = Factura::all();
        return response()->json($facturas);
    }

    public function update(Request $request, $id){
        $factura = Factura::find($id);
        $factura->update($request->all());
        return response()->json($factura);
    }

    public function store(Request $request){
        $factura = Factura::create($request->all());
        return response()->json($factura, 201);
    }

    public function destroy($id){
        $factura = Factura::find($id);
        $factura->delete();
        response()->json("Factura borrada con exito");
    }

    public function findById($id){

        $facturas = Factura::where('id_cliente', '=', "$id")->get();
        return response()->json($facturas);
    }
}
