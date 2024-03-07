<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function update(Request $request, $id){
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        return response()->json($cliente);
    }

    public function store(Request $request){
        $cliente = Cliente::create($request->all());
        return response()->json($cliente, 201);
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return response()->json('Cliente eliminado correctamente', 200);
    }
    /*public function find(Request $request){
        $filter = $request->input('filter');
        $cliente = Cliente::where('nombre', 'LIKE', "%$filter%")
                            ->orWhere('nif', $filter)
                            ->get();
        return response()->json($cliente);
    }*/
    public function find($id){
        $cliente = Cliente::find($id);
        return response()->json($cliente);
    }
}
