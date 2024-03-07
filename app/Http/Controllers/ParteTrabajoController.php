<?php

namespace App\Http\Controllers;

use App\Models\ParteTrabajo;
use Illuminate\Http\Request;

class ParteTrabajoController extends Controller
{
    public function index(){
        $partes = ParteTrabajo::all();
        return response()->json($partes);
    }

    public function update(Request $request, $id){
        $parte = ParteTrabajo::find($id);
        $parte->update($request->all());
        return response()->json($parte);
    }

    public function store(Request $request){
        $parte = ParteTrabajo::create($request->all());
        return response()->json($parte, 201);
    }

    public function destroy($id){
        $parte = ParteTrabajo::find($id);
        $parte->delete();
        response()->json("Parte borrado con exito");
    }

    public function find($fecha){
        $tareas = ParteTrabajo::where('fecha_parte', 'LIKE', "%$fecha%")->get();
        return response()->json($tareas);
    }
}
