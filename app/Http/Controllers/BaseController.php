<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController {

    protected $classe;

    public function index() {
        return $this->classe::all();
    }

    public function store(Request $request){
        return response()->json(
            $this->classe::create($request->all()),
            status: 201
        );
    }

    public function show(int $id){
        $recurso = $this->classe::find($id);
        if(is_null($recurso)){
            return response()->json('', status: 204);
        }
        return response()->json($recurso);
    }

    public function update(int $id, Request $request){
        $recurso = $this->classe::find($id);
        if( is_null($recurso)){
            return response()->json('Não encontrado', status: 404);
        }
        $recurso->fill($request->all());
        $recurso->save();
        return response()->json($recurso);
    }

    public function destroy(int $id){
        $qtdeRecursosRemovidos = $this->classe::destroy($id);
        if ($qtdeRecursosRemovidos === 0 ){
            return response()
            ->json(['erro' => 'Recurso não encontrado'], status: 404);
        }

        return response()->json('Apagado', status: 204);
    }
}


