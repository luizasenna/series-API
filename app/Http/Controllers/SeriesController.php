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
            Serie::create(['nome' => $request->nome]),
            status: 201
        );
    }

}


