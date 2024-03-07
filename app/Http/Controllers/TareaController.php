<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index(){
        $tareas = Tarea::all();
        return response()->json($tareas);
    }

    public function update(Request $request, $id){
        $tarea = Tarea::find($id);
        $tarea->update($request->all());
        return response()->json($tarea);
    }

    public function store(Request $request){
        $tarea = Tarea::create($request->all());
        return response()->json($tarea, 201);
    }

    public function destroy($id){
        $tarea = Tarea::find($id);
        $tarea->delete();
        response()->json("Tarea borrada con exito");
    }

    public function find($id){
        $tareas = Tarea::where('parte_trabajo_id', '=', "$id")->get();
        return response()->json($tareas);
    }
}
