@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page" style="background: url(/img/fondo-login.jpg) no-repeat;">
    <div id="app">
        <div class="login-box">


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>¡Error!</strong> Los datos ingresados, son incorrectos.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
          <div class="text-center">
              <!-- <a href="{{ url('/home') }}"><b>Pasa</b>MAC</a> -->
              <img class="text-center" src="/img/logo-login.png" alt="">
          </div><!-- /.login-logo -->
          <p class="login-box-msg"> Inicio de sesión</p>
        <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Usuario" name="usuario"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div><br>
            <div class="row">
                {{-- <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Recordarme
                        </label>
                    </div>
                </div><!-- /.col --> --}}
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <button type="submit" class="btn btn-primary btn-block btn-flat text-center">Ingresar</button>
                </div><!-- /.col -->
                <div class="col-md-2"></div>
            </div>
        </form><br>



        {{-- <a href="{{ url('/password/reset') }}">Olvidé mi contraseña</a><br> --}}
        <a href="{{ url('/register') }}" class="text-center">Crear nueva cuenta</a>

    </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
