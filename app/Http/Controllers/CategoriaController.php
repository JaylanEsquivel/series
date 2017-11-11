<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class CategoriaController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function exibirCategoria() {
        $categoria = Categoria::all();
        return view('categoria', ['cate' => $categoria ]);
        // $serie->save(); $a $serie->Categoria()->athach(id) id do categoria
    }
}
