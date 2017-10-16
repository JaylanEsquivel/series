<?php

namespace App\Http\Controllers;

class RegisterController extends Controller {
    public function __construct() {
        $this->middleware('guest');
    }

    public function register(){
       return view('registerAdmin');
        
    }
   
}
