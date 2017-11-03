@extends('bordas')

@section('title', 'Lista de Usuários')

@section('sidebar')
    
    @parent
    
@stop

@section('content')

<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Lista de Usuários</h4><hr><table class="table table-striped table-advance table-hover">


                <thead>
                    <tr>
                        <th class="hidden-phone"><i class="fa fa-user"></i> Nome</th>
                        <th><i class="fa fa-bookmark"></i> CPF</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->nome}}</td>
                        <td>{{$usuario->cpf}}</td>
                        <td>
                        @if($usuario->status == 1)
                            <span class="label label-success label-mini">Ativo</span>
                        @else
                            <span class="label label-danger label-mini">Inativo</span>
                        @endif
                        </td>
                        <td>
                            <a href="editar/{{$usuario->id}}"><button value="{{$usuario->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            <a href="ativar/{{$usuario->id}}"><button value="{{$usuario->id}}" class="btn btn-success btn-xs"><i class="fa fa-check"></i></button></a>
                            <a href="inativar/{{$usuario->id}}"><button value="{{$usuario->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>
                            <button class="btn btn-primary btn-xs" disabled><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-success btn-xs" disabled><i class="fa fa-check"></i></button>
                            <button class="btn btn-danger btn-xs" disabled><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div>

@stop