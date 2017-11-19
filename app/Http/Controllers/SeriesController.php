<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Series;
use App\Models\Categoria;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Controla o acesso do admin.
     *
     */
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::all();
        $categorias = Categoria::all();
        return view('series', compact('series','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Series::create($request->all());
        return redirect()->action('SeriesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Series  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $editarSeries = Series::find($id);
        $categorias = Categoria::all();
        $series = Series::all();
        //dd($editarCategoria);
        return view('series', compact('series','editarSeries','categorias'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $series = Series::find($request->id);
        $series->nome = $request->nome;
        $series->save();
        return redirect()->action('SeriesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setor  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $series = Series::find($id);
        $series->delete();
        return redirect()->action('SeriesController@index');
    }
}
