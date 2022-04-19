<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController {

    public function index() {
        return Serie::all();
    }

    public function store(Request $request){
        return response()->json(
            Serie::create($request->all()),
            status: 201
        );
    }

    public function show(int $id){
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json('', status: 204);
        }
        return response()->json($serie);
    }

    public function update(int $id, Request $request){
        $serie = Serie::find($id);
        if( is_null($serie)){
            return response()->json('Não encontrado', status: 404);
        }
        $serie->fill($request->all());
        $serie->save();
        return response()->json($serie);
    }

}


