<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>THE MAGIC SERIES</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{url('css/estilo_one.css')}}" />
    </head>
    <body>
        <div class="container-fluid" style="background-image:url('img/fundo.png'); background-size: 100%;width: 100%; height: 100%;">
            <div class="row">
                <div class="col-lg-12 perfil">
                    <div class="row">
                        <div class="col-lg-10 spas">
                            <a href="{{ url('/')}}"> <img width="70" style="margin-top: -15px" class="img-responsive" src="img/5.png"></a>
                        </div>
                        <div class="col-lg-2">
                            <a class="btn btn-dark" href="{{ url('login')}}">Entrar</a>&nbsp;&nbsp;
                            <a class="btn btn-dark" href="{{ url('register')}}">Registrar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="padding-top: 10%">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12" ></div>
                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-12 perfil-one">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div style="float: right;">
                                </div>
                            </div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-mail</label>

                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                                        <div class="col-md-12 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-5">
                                            <button type="submit" class="btn btn-success btn-sm btn-block">
                                                Entrar
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Esqueceu sua Senha?
                                            </a>
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