@extends('index')

@section('sidebar')

<div class="row">
    <div class="col-lg-12">
        <h3><i class="fa fa-angle-right"></i>Categoria</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                   <h4 class="mb"><i class="fa fa-angle-right"></i> Cadastro de Categoria</h4>
                   <form class="form-horizontal style-form" method="get">
                       <div class="form-group">
                              <label class="col-sm-1 control-label">Nome:</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                              </div>
                               <div class="col-sm-1">
                                <button type="submit" class="btn btn-theme" style="float: right;">Registrar</button>
                              </div>
                       </div>
                   </form>
                </div>
            </div>
        </div>
        <div class="row mt">
           <div class="col-lg-12">
          	<div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Categorias Registradas</h4>
                     <table class="table">
		                          <thead>
		                          <tr>
		                              <th>Nome Serie</th>
		                              <th>Ações</th>
		                          </tr>
		                          </thead>
		                          <tbody>                                             
                                    @forelse ($cate as $c)
		                          <tr>
		                              <td>{{ $c->nome }}</td>
                                              <td>
                                                  <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </td>
		                          </tr>
                                    @empty
                                          <p>Nenhuma Categoria cadastradas.</p>
                                    @endforelse
		                          </tbody>
		                      </table>
                    <a href="#" id="subir" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i> Categorias inativa</a>
          	</div><!-- /form-panel -->
           </div><!-- /col-lg-12 -->
        </div><!-- /row -->
        <div class="row mt ver">
           <div class="col-lg-12">
          	<div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Categorias Inativas</h4>
                     <table class="table">
		                          <thead>
		                          <tr>
		                              <th>Nome Categoria</th>
		                              <th>Ações</th>
		                          </tr>
		                          </thead>
		                          <tbody>
		                          <tr>
		                              <td>Larry</td>
                                              <td>
                                                  <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                              </td>		                          </tr>
		                          </tbody>
		                      </table>
          	</div><!-- /form-panel -->
           </div><!-- /col-lg-12 -->
        </div><!-- /row -->

    </div>
</div>
@endsection
@section('js')
<script>
$(document).ready(function(){
        $('#subir').click(function(){
            var disp = $('.ver').css("display");
           if( disp == "none"){
               $('.ver').css("display","block");
           }else{
               $('.ver').css("display","none");
           }
        })
    })
</script>
@endsection

