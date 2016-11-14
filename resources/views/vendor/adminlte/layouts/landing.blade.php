<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>Pasa-MAC</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#"><b>Pasa-MAC</b></a> -->
                <img class="text-center" src="/img/logo-menu.png" alt="">
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">Inicio</a></li>
                    <li><a href="#desc" class="smoothScroll">Pasa-MAC</a></li>
                    <li><a href="#showcase" class="smoothScroll">Funciones</a></li>
                    <li><a href="#contact" class="smoothScroll">Contacto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">Registro</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home"></section>
    <div id="">
        <div class="">
            <div class="row centered">
                <div class="col-md-12">
                  <div class="box-body">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="/img/slide1.png" alt="First slide">

                            <div class="carousel-caption">

                            </div>
                          </div>
                          <div class="item">
                            <img src="/img/slide2.png" alt="Second slide">

                            <div class="carousel-caption">

                            </div>
                          </div>
                          <div class="item">
                            <img src="/img/slide3.png" alt="Third slide">

                            <div class="carousel-caption">

                            </div>
                          </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                          <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                          <span class="fa fa-angle-right"></span>
                        </a>
                      </div>
                  </div>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->


    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1>Plataforma especial para estudiantes de Matemáticas Aplicadas y Computación</h1>
                <br>
                <br>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/registro.png') }}" alt="">
                    <h3>Registrate</h3>
                    <p>Registro único para estudiantes de MAC.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/descarga.png') }}" alt="">
                    <h3>Descarga</h3>
                    <p>Encuentra y descarga tareas, proyectos y exámenes de la carrera.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/graduacion.png') }}" alt="">
                    <h3>Graduate</h3>
                    <p>Se parte de esta comunidad, ayuda, recibe ayuda y graduate!</p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered">Todo sobre Pasa-MAC</h1>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <img class="centered" src="{{ asset('/img/logo2.png') }}" alt="">
                </div>

                <div class="col-lg-6">
                    <h3>¡La mejor herramienta para concluir la carrera!</h3>
                    <br>
                    <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                    ¿Qué es Pasa-MAC?
                                </a>
                            </div><!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <p>Es una plataforma estudiantil creada por estudiantes de la carrera de Lic. en Matemáticas Aplicadas y Computación, donde encontrarás tareas, proyectos y exámenes de todos los semestres y profesores.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    ¿Cómo nació Pasa-MAC?
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>Entendemos lo complicado que es terminar la carrera, es por eso que decidimos desarrollar una plataforma o comunidad donde todos nos apoyemos y sea más fácil concluir nuestros estudios.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    ¿Cómo funciona Pasa-MAC?
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>El objetivo es formar una comunidad estudiantil donde los alumnos de MAC se registren, aporte al subir tareas, proyectos o exámenes, pueda descargar éstos y calificar el contenido.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>


                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                    ¿Tiene algún costo?
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>Tenemos bien claro que para terminar una carrera se necesita el apoyo de nuestros compañeros, por lo que esto no tiene ningún costo, con tus aportaciones a la plataforma nos ayudas a todos!</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>
                    </div><!-- Accordion -->
                </div>
            </div>
        </div><!--/ .container -->
    </div><!--/ #features -->


    <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            <div class="row">
                <h1 class="centered">Funciones</h1>
                <br>
                

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 text-center">
                           <img class="centered" src="{{ asset('/img/logo-login.png') }}" alt=""><br><br><br>
                           <a href="{{ url('/register') }}"><button type="button" class="btn btn-block btn-success btn-lg">Registrar</button></a>
                        </div>
                        <div class="col-md-8 text-center">
                            <div class="box-body">
                              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="/img/minislide1.jpg" alt="First slide">

                                    <div class="carousel-caption">
                                      Responsivo
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img src="/img/minislide1.jpg" alt="Second slide">

                                    <div class="carousel-caption">
                                      
                                    </div>
                                  </div>
                                  <div class="item">
                                    <img src="/img/minislide1.jpg" alt="Third slide">

                                    <div class="carousel-caption">
                                      
                                    </div>
                                  </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                  <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                  <span class="fa fa-angle-right"></span>
                                </a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
            <br>
            <br>
            <br>
        </div><!-- /container -->
    </div>


    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>Dudas o sugerencias</h3>
                <p>
                    Si tienes alguna duda sobre como funciona, recomendación o idea de como mejorar la plataforma, no dudes en mandarnos un correo, se parte de esta gran comunidad!
                </p>
            </div>

            <div class="col-lg-7">
                <h3>Contacto</h3>
                <br>
                <form role="form" action="#" method="post" enctype="plain">
                    <div class="form-group">
                        <label for="name1">Nombre</label>
                        <input type="name" name="Name" class="form-control" id="name1" required="" placeholder="Escribe tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="email1">Correo</label>
                        <input type="email" name="Mail" class="form-control" id="email1" required="" placeholder="Escribe tu correo">
                    </div>
                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea class="form-control" name="Message" required="" rows="3"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-large btn-success">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <div id="c">
        <div class="container">
            <p>
                <strong>Copyright &copy; 2016 <a href="#">Pasa-MAC</a></strong>. Creado por: <a href="#">Pasa-MAC</a>
            </p>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
