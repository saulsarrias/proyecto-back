<?php

namespace App\Http\Controllers;

use App\Models\InventarioMateriales;
use Illuminate\Http\Request;

class InventarioMaterialesController extends Controller
{
    public function index(){
        $materiales = InventarioMateriales::all();
        return response()->json($materiales);
    }

    public function update(Request $request, $id){
        $material = InventarioMateriales::find($id);
        $material->update($request->all());
        return response()->json($material);
    }

    public function store(Request $request){
        $material = InventarioMateriales::create($request->all());
        return response()->json($material, 201);
    }

    public function destroy($id){
        $material = InventarioMateriales::find($id);
        $material->delete();
        response()->json("Material borrado con exito");
    }
}
