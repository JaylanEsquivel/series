@extends('index')

@section('sidebar')

<div class="row">
    <div class="col-lg-12">
        <h3><i class="fa fa-angle-right"></i>Séries</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Cadastro de Séries</h4>
                    <form class="form-horizontal style-form" method="post" action="/series/cadastrar">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Nome:</label>
                            <div class="col-sm-11">
                                <input type="text" id="nome" name="nome" class="form-control">
                            </div>
                            <br><br><br>
                            <label class="col-sm-1 control-label">Sinopse:</label>
                            <div class="col-sm-11">
                                <textarea type="text" id="sinopse" name="sinopse" class="form-control"></textarea>
                            </div>
                            <br><br><br><br>
                            <div class="col-sm-1" style="float: left;">
                                <button type="submit" class="btn btn-theme" style="float: left;">Registrar</button>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if(isset($editarSeries))
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Séries</h4>
                        <form class="form-horizontal style-form" method="post" action="/series/atualizar">
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Nome:</label>
                                <div class="col-sm-11">
                                    <input type="text" id="nome" name="nome" value="{{$editarSeries->nome}}" class="form-control">
                                </div>
                                <br><br><br>
                                <label class="col-sm-1 control-label">Sinopse:</label>
                                <div class="col-sm-11">
                                    <textarea type="text" id="sinopse" name="sinopse" class="form-control">{{$editarSeries->sinopse}}</textarea>
                                </div>
                                <br><br><br><br>
                                <div class="col-sm-1">
                                    <button type="submit" class="btn btn-theme" style="float: left;">Editar</button>
                                </div>
                                <div class="col-sm-1">
                                    <a href="{{url('/series')}}"><button class="btn btn-danger" style="float: left;">Cancelar</button></a>
                                </div>

                                <input type="hidden" name="id" value="{{ $editarSeries->id }}">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Séries Registradas</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome das Séries</th>
                                <th>Sinopse</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>                                             
                            @forelse ($series as $serie)
                                <tr>
                                    <td>{{ $serie->nome }}</td>
                                    <td>{{ $serie->sinopse }}</td>
                                    <td>
                                        <a href="{{url('/series/editar/'.$serie->id)}}"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button></a>
                                        <a href="{{url('/series/excluir/'.$serie->id)}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                    </td>
                                </tr>
                            @empty
                                <p>Nenhuma Séries cadastradas.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div><!-- /form-panel -->
            </div><!-- /col-lg-12 -->
        </div><!-- /row -->
    </div>
</div>
@endsection

