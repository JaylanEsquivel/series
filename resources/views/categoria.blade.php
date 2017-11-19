@extends('index')

@section('sidebar')

<div class="row">
    <div class="col-lg-12">
        <h3><i class="fa fa-angle-right"></i>Categoria</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Cadastro de Categoria</h4>
                    <form class="form-horizontal style-form" method="post" action="/categoria/cadastrar">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Nome:</label>
                            <div class="col-sm-9">
                                <input type="text" id="nome" name="nome" class="form-control">
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-theme" style="float: left;">Registrar</button>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        @if(isset($editarCategoria))
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Editar Categoria</h4>
                        <form class="form-horizontal style-form" method="post" action="/categoria/atualizar">
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Nome:</label>
                                <div class="col-sm-8">
                                    <input type="text" id="nome" name="nome" value="{{$editarCategoria->nome}}" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <button type="submit" class="btn btn-theme" style="float: left;">Editar</button>
                                </div>
                                <div class="col-sm-1">
                                    <a href="{{url('/categoria')}}"><button class="btn btn-danger" style="float: left;">Cancelar</button></a>
                                </div>
                                
                                <input type="hidden" name="id" value="{{ $editarCategoria->id }}">

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
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Categorias Registradas</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome das Categorias</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>                                             
                            @forelse ($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->nome }}</td>
                                <td>
                                    <a href="{{url('/categoria/editar/'.$categoria->id)}}"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="{{url('/categoria/excluir/'.$categoria->id)}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                </td>
                            </tr>
                            @empty
                        <p>Nenhuma Categoria cadastradas.</p>
                        @endforelse
                        </tbody>
                    </table>
                </div><!-- /form-panel -->
            </div><!-- /col-lg-12 -->
        </div><!-- /row -->
    </div>
</div>
@endsection

