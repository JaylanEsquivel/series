<html>
    <head>
        <meta charset="UTF-8">
        <title>SERIES</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container-fluid" style="background-image: url('../img/fundo.png'); background-size: 100%;width: 100%; height: 100%;">
            <div class="row">
                <div class="col-lg-12" style="background-color: #099ef4; padding-bottom: 10px; padding-top: 10px; height: 60px">
                    <div class="row">
                      <div class="col-lg-10" style="padding-top: 3px">
                          <span style="font-weight: bold; font-size: 20px;">Registro de Usuario</span>
                      </div>
                      <div class="col-lg-2">
                        <a class="btn btn-dark" href="{{ url('LoginUser') }}">Entrar</a>&nbsp;&nbsp;
                        <a class="btn btn-dark" href="{{ url('RegistrerUser') }}">Registrar</a>
                      </div>
                      </div>
                 </div>
            </div>
 <div class="container">
    <div class="row" style="padding-top: 3%">
        <div class="col-lg-2"></div>
        <div class="col-lg-8" style="background-color: #FFF; border: solid 0.6px #ccc ; padding-top: 10px; border-radius: 10px">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-lg-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                <input id="tipo" name="tipo" type="hidden" value="C"/>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Cpf" class="col-md-4 control-label">Cpf</label>

                            <div class="col-lg-12">
                                <input id="cpf" type="text" class="form-control" name="cpf" required>

                                @if ($errors->has('cpf'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cpf') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma Senha</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-sm btn-block">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            
        </div>
        
<!-- JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!-- JS -->
    </body>
</html>
