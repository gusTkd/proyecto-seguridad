<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/img/avatar5.png" class="img-circle" alt="" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->usuario }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> En línea</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header text-center">Menú</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-graduation-cap'></i> <span>Inicio</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-file-archive-o'></i> <span>Tareas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-download'></i> Descargar Tareas</a></li>
                    <li><a href="#"><i class='fa fa-cloud-upload'></i> Subir Tareas</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-file'></i> <span>Exámenes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-download'></i> Descargar Exámenes</a></li>
                    <li><a href="#"><i class='fa fa-cloud-upload'></i> Subir Exámenes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-suitcase'></i> <span>Proyectos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-download'></i> Descargar Proyectos</a></li>
                    <li><a href="#"><i class='fa fa-cloud-upload'></i> Subir Proyectos</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
