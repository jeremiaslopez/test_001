<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TEST</title>
  {{!!Html::style('css/bootstrap.min.css')!!}}
  {!!Html::style('css/font-awesome.css')!!}
  {{!!Html::style('css/AdminLTE.min.css')!!}}
  {{!!Html::style('css/_all-skins.min.css')!!}
  {!!Html::style('img/apple-touch-icon.png')!!}
  {!!Html::style('img/favicon.ico')!!}}   
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/usuario" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>TES</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>TEST</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="/usuario" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Jeremias Lopez Deara</span>
                </a>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Menú</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!!URL::to('/persona')!!}"><i class="fa fa-circle-o"></i>Persona</a></li>
                <li><a href="{!!URL::to('/persona/create')!!}"><i class="fa fa-plus fa-fw"></i>Nuevo</a></li>              
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!!URL::to('/usuario')!!}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                <li><a href="{!!URL::to('/usuario/create')!!}"><i class="fa fa-plus fa-fw"></i>Nuevo</a></li>
              </ul>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

@yield('content')


      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>

      {!!Html::script('js/jQuery-2.1.4.min.js')!!}
       {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('js/app.min.js')!!}
    
  </body>
</html>
