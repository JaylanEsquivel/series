@extends('index')

@section('sidebar')

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Procurar Episódios</h4>
            </div>
            <form class="form-horizontal style-form" method="get" action="{{url('/episodio')}}">
                <div class="modal-body">
                <div class="form-group">

                    <label class="col-sm-2 control-label">Série:</label>
                    <div class="col-sm-10">
                        <select name="serie_id" id="serie_id" class=" form-control" >
                            <option value="" selected>Selecione</option>
                            @forelse($series as $serie)
                            <option value="{{ $serie->id }}" >{{ $serie->nome }}</option>
                            @empty
                            <option value="">Nenhuma Série cadastrada</option>
                            @endforelse
                        </select>
                    </div>
                    <br><br><br>

                    <label class="col-sm-2 control-label">Temporada:</label>
                    <div class="col-sm-10">
                        <select name="temporada_id" id="temporada_id" class="form-control" >
                            <option value="" selected>Selecione</option>
                            @forelse($temporadas as $temporada)
                            <option value="{{ $temporada->id }}" >{{ $temporada->nome }}</option>
                            @empty
                            <option value="">Nenhuma Temporada cadastrada</option>
                            @endforelse
                        </select>
                    </div>
                    <br><br><br><br>
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-theme" style="float: left;">Procurar</button>
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h3><i class="fa fa-angle-right"></i>Episódio</h3>
        
        @if(!isset($editarEpisodio))
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Cadastro de Episódio</h4>
                    <form class="form-horizontal style-form" method="post" action="/episodio/cadastrar">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Nome:</label>
                            <div class="col-sm-11">
                                <input type="text" id="nome" name="nome" class="form-control">
                            </div>
                            <br><br><br>
                            <label class="col-sm-1 control-label">Série:</label>
                            <div class="col-sm-11">
                                <select name="serie_id" id="serie_id" class="form-control" >
                                    <option value="" disabled selected>Selecione</option>
                                    @forelse($series as $serie)
                                    <option value="{{ $serie->id }}">{{ $serie->nome }}</option>
                                    @empty
                                    <option value="">Nenhuma Série cadastrada</option>
                                    @endforelse
                                </select>
                            </div>
                            <br><br><br>
                            
                            <label class="col-sm-1 control-label">Temporada:</label>
                            <div class="col-sm-11">
                                <select name="temporada_id" id="temporada_id" class="form-control" >
                                    <option value="" disabled selected>Selecione</option>
                                    @forelse($temporadas as $temporada)
                                    <option value="{{ $temporada->id }}">{{ $temporada->nome }}</option>
                                    @empty
                                    <option value="">Nenhuma Temporada cadastrada</option>
                                    @endforelse
                                </select>
                            </div>
                            <br><br><br><br>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-theme" style="float: right;">Registrar</button>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
        
        @if(isset($editarEpisodio))
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Episódio</h4>
                    <form class="form-horizontal style-form" method="post" action="/episodio/atualizar">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Nome:</label>
                            <div class="col-sm-11">
                                <input type="text" id="nome" name="nome" value="{{$editarEpisodio->nome}}" class="form-control">
                            </div>
                            <br><br><br>
                            <label class="col-sm-1 control-label">Série:</label>
                            <div class="col-sm-11">
                                <select name="serie_id" id="serie_id" class="form-control" >
                                    <option value="" disabled>Selecione</option>
                                    @forelse($series as $serie)
                                    <option value="{{ $serie->id }}" @if ($editarEpisodio->serie_id === $serie->id) selected @endif >{{ $serie->nome }}</option>
                                    @empty
                                    <option value="">Nenhuma Série cadastrada</option>
                                    @endforelse
                                </select>
                            </div>
                            <br><br><br>
                            
                            <label class="col-sm-1 control-label">Temporada:</label>
                            <div class="col-sm-11">
                                <select name="temporada_id" id="temporada_id" class="selectpicker form-control" >
                                    <option value="" disabled>Selecione</option>
                                    @forelse($temporadas as $temporada)
                                    <option value="{{ $temporada->id }}" @if ($editarEpisodio->temporada_id === $temporada->id) selected @endif >{{ $temporada->nome }}</option>
                                    @empty
                                    <option value="">Nenhuma Temporada cadastrada</option>
                                    @endforelse
                                </select>
                            </div>
                            <br><br><br><br>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-theme" style="float: left;">Editar</button>
                            </div>
                            <div class="col-sm-1">
                                <a href="{{url('/categoria')}}"><button class="btn btn-danger" style="float: left;">Cancelar</button></a>
                            </div>

                            <input type="hidden" name="id" value="{{ $editarEpisodio->id }}">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
        
        @if(!isset($editarEpisodio))
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <div class="col-sm-6">
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Episódios Registrados</h4>
                    </div>
                    <div class="col-sm-6">
                    <button class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">Filtrar</button>
                    </div>
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Episódio</th>
                                <th>Série</th>
                                <th>Temporada</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>                                             
                            @forelse ($episodios as $episodio)
                            <tr>
                                <td>{{ $episodio->nome }}</td>
                                <td>{{ $episodio->serie }}</td>
                                <td>{{ $episodio->temporada }}</td>
                                <td>
                                    <a href="{{url('/episodio/editar/'.$episodio->id)}}"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="{{url('/episodio/excluir/'.$episodio->id)}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                </td>
                            </tr>
                            @empty
                        <p>Nenhuma Episódio cadastradas.</p>
                        @endforelse
                        </tbody>
                    </table>
                </div><!-- /form-panel -->
                
            </div><!-- /col-lg-12 -->
        </div><!-- /row -->
        @endif
    </div>
</div>
@endsection

@section('page-script')
@stop


