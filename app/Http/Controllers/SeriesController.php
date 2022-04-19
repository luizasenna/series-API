<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController {

    public function index() {
        return Serie::all();
    }
}


