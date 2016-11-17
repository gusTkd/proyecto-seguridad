@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page" style="background: url(/img/fondo-login.jpg) no-repeat;">
    <div id="app">
        <div class="register-box">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Ups!</strong> Hubo algunos problemas con tu registro<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="register-box-body">
                <div class="text-center">
                    <img class="text-center" src="{{ asset('/img/logo-login.png') }}" alt="">
                </div>
                <p class="login-box-msg">Registro de nuevo usuario</p>
                <form action="{{ url('/register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Apellido paterno" name="a_paterno" value="{{ old('a_paterno') }}"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Apellido materno" name="a_materno" value="{{ old('a_materno') }}"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
                        <span class="glyphicon glyphicon-date form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="genero">Género</label>
                        <select class="form-control" name="genero">
                            <option selected disabled>-- Selecciona una opción --</option>
                            <option value="0" {{ old('genero') == 0 ? 'selected' : '' }}>Mujer</option>
                            <option value="1" {{ old('genero') == 1 ? 'selected' : '' }}>Hombre</option>
                            <option value="2" {{ old('genero') == 2 ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="semestre">Semestre</label>
                        <input type="number" class="form-control" name="semestre" value="{{ old('semestre') }}" min="1" max="9">
                    </div>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="{{ old('usuario') }}"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>

                    <div class="row">
                        <div class="col-xs-1">
                            <label>
                                <div class="checkbox_register icheck">
                                    <label>
                                        <input type="checkbox" name="terms">
                                    </label>
                                </div>
                            </label>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                Acepto los<a href="#" data-toggle="modal" data-target="#terminos"> términos</a>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4 col-xs-push-1">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <a href="{{ url('/login') }}" class="text-center">Ya tengo una cuenta</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
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


<!-- ******************************** MODAL ************************ -->
<div id="terminos" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Terminos y condicones</h4>
            </div>

            <div class="modal-body">
                <p>.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>


@endsection
