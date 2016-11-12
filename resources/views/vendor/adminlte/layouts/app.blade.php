<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div id="app">
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    @include('adminlte::layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('adminlte::layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12 text-center">
              <img class="" src="{{ asset('/img/logo-login.png') }}" alt="">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Agregados recientemente</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-6">
                      <strong><i class="fa fa-file margin-r-5"></i> Seguridad computacional</strong>
                      <p class="text-muted">
                        Segundo examen parcial<br>
                        <strong>Profesor:</strong> Javier Rosas Hernández
                      </p>
                    </div>
                    <div class="col-md-6 text-center">
                      <img class="" src="{{ asset('/img/examen.jpg') }}" alt="">
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-md-6">
                      <strong><i class="fa fa-suitcase margin-r-5"></i> Administracion de redes</strong>
                      <p class="text-muted">
                        Proyecto Final<br>
                        <strong>Profesor:</strong> Sergio Quiroz Almaraz
                      </p>
                    </div>
                    <div class="col-md-6 text-center">
                      <img class="" src="{{ asset('/img/word.jpg') }}" alt="">
                    </div>
                  </div>
                  <hr>

                </div>
              <!-- /.box-body -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Ranking de participantes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th class="col-md-6">Usuario</th>
                        <th class="col-md-3">Aportes</th>
                        <th class="col-md-3">Likes</th>
                      </tr>
                      <tr>
                        <td>Manuel Hidalgo</td>
                        <td>5</td>
                        <td>16</td>
                      </tr>
                      <tr>
                        <td>Zurcaled</td>
                        <td>15</td>
                        <td>14</td>
                      </tr>
                      <tr>
                        <td>El_Bueno</td>
                        <td>1</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>Miguel.1899</td>
                        <td>3</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>


        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    @include('adminlte::layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>
