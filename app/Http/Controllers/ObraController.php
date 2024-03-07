<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use Illuminate\Http\Request;

class ObraController extends Controller
{
    public function index(){
        $obras = Obra::all();
        return response()->json($obras);
    }

    public function update(Request $request, $id){
        $obra = Obra::find($id);
        $obra->update($request->all());
        return response()->json($obra);

    }

    public function store(Request $request){
        $obra = Obra::create($request->all());
        return response()->json($obra, 201);
    }

    public function destroy($id){
        $obra = Obra::find($id);
        $obra->delete();
        return response()->json('Obra borrada correctamente', 200);
    }

    public function find($id){
        $obras = Obra::where('id_cliente', '=', "$id")->get();
        return response()->json($obras);
    }

    /*public function getByClient(Request $request){
        $query = $request ->input('query');
        $obras = Obra::where('id_cliente', 'LIKE', "%$query%")->get();
        return response()->json($obras);
    }*/
}
