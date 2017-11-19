<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Episodio;
use App\Models\Series;
use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodioController extends Controller
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
    public function index(Request $request)
    {
        $temporada = $request->temporada_id;
        $serie = $request->serie_id;
        
        if (($temporada == null) or ( $serie == null)) {
            $episodios = Episodio::join('serie', 'episodio.serie_id', '=', 'serie.id')
                            ->join('temporada', 'episodio.temporada_id', '=', 'temporada.id')
                            ->select('episodio.nome', 'episodio.id', 'temporada.nome as temporada', 'serie.nome as serie')->get();
        } else {
            $episodios = Episodio::join('serie', 'episodio.serie_id', '=', 'serie.id')
                    ->join('temporada', 'episodio.temporada_id', '=', 'temporada.id')
                    ->select('episodio.nome', 'episodio.id', 'temporada.nome as temporada', 'serie.nome as serie');

            if ($temporada <> null) {
                $episodios = $episodios->where('temporada.id', '=', $temporada);
            }
            if ($serie <> null) {
                $episodios = $episodios->where('serie.id', '=', $serie);
            }

            $episodios = $episodios->get();
        };

        $series = Series::all();
        $temporadas = Temporada::all();
        return view('episodio', compact('episodios','series','temporadas'));
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
        Episodio::create($request->all());
        return redirect()->action('EpisodioController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Episodio  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $editarEpisodio = Episodio::where('id', '=', $id)->first();
        $episodios = Episodio::join('serie','episodio.serie_id','=','serie.id')
                               ->join('temporada','episodio.temporada_id','=','temporada.id')
                               ->select('episodio.nome','episodio.id','temporada.nome as temporada',
                                       'serie.nome as serie')->get();
        $series = Series::all();
        $temporadas = Temporada::all();
        return view('episodio', compact('episodios','editarEpisodio','series','temporadas'));
        
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
        $episodio = Episodio::find($request->id);
        $episodio->nome = $request->nome;
        $episodio->serie_id = $request->serie_id; 
        $episodio->temporada_id = $request->temporada_id;
        $episodio->save();
        return redirect()->action('EpisodioController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setor  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episodio = Episodio::find($id);
        $episodio->delete();
        return redirect()->action('EpisodioController@index');
    }
}
