<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController {

    public function index() {
        return [
            "Greys Anatomy",
            "Lost"
        ];
    }
}


