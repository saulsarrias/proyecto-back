<?php

namespace App\Http\Controllers;

use App\Models\ControlHorario;
use Illuminate\Http\Request;

class ControlHorarioController extends Controller
{
    public function index(){
        $registro = ControlHorario::all();
        return response()->json($registro);
    }

    public function update(Request $request, $id){
        $registro = ControlHorario::find($id);
        $registro->update($request->all());
        return response()->json($registro);
    }

    public function store(Request $request){
        $registro = ControlHorario::create($request->all());
        return response()->json($registro, 201);
    }

    public function destroy($id){
        $registro = ControlHorario::find($id);
        $registro->delete();
        response()->json("Registro borrado con exito");
    }

    public function find($id){
        $registro = ControlHorario::where('id_user', '=', "$id")->get();
        return response()->json($registro);
    }
}
