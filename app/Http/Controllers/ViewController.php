<?php

namespace App\Http\Controllers;

class ViewController extends Controller {

    public function __construct() {
        $this->middleware('guest');
    }

    public function teste() {
        echo 'teste';
    }
    public function Loginuser() {
        return view('LoginUser');
    }
    public function Registreruser() {
        return view('RegistrerUser');
    }

}
