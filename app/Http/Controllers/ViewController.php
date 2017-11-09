<?php

namespace App\Http\Controllers;

class ViewController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    public function dashboard() {
        return view('principal');
    }
    public function sair() {
        return view('copia');
    }

}
