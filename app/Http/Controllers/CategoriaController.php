<?php

namespace App\Http\Controllers;

class CategoriaController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function exibirCategoria() {
        return view('categoria');
    }
}
