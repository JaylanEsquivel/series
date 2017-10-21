<?php

namespace App\Http\Controllers;

class ViewController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    public function Loginuser() {
        return view('LoginUser');
    }
    public function Registreruser() {
        return view('RegistrerUser');
    }
    public function dashboard() {
        echo 'login';
    }

}
