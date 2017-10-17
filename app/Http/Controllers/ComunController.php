<?php
namespace App\Http\Controllers;

class ComunController {

    public function __construct() {
        $this->middleware('auth');
    }
}
