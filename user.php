<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clinica San Jose</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>SJ</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Clinica </b>San Jose</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/imglog.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrador  </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/imglog.jpg" class="img-circle" alt="User Image">

                <p>
                  Administrador
                  <small>Bienvenido Admin</small>
                </p>
              </li>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  
                  <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
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
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/imglog.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrador</p>
          
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">              
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Inicio</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-user-md"></i> <span>Agregar Usuario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="user.html"><i class="fa fa-circle-o"></i> Usuario Administrador</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i>Usuario Gestor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Citas</span>
            <span class="pull-right-container">
        
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="agregar_cita.html"><i class="fa fa-circle-o"></i> Agregar Cita</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="index.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
            
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuario Administrador
      </h1>
    <!-- Main content -->
    <section class="content">


      <form role="form">
        <div class="form-group">
        <label class="col-sm-2" for="primern">Primer Nombre</label>
         </div>
      <form role="form">
        <div class="form-group">   
       <input class="col-sm-4"  type="text" class="form-control" id="primern" required ="required"
           placeholder="Introduce tu Nombre" >
           <i class="fa fa-user-md" aria-hidden="true"></i>
        </div>

        <form role="form">
        <div class="form-group">
        <label class="col-sm-2" for="segundon">Segundo Nombre</label>
         </div>
      <form role="form">
        <div class="form-group">   
       <input class="col-sm-4"  type="text" class="form-control" id="segundon" required ="required"
           placeholder="Introduce tu Nombre" >
           <i class="fa fa-user-md" aria-hidden="true"></i>
        </div>

        <form role="form">
        <div class="form-group">
        <label class="col-sm-2" for="primera">Primer Apellido</label>
         </div>

        <form role="form">
          <div class="form-group">   
        <input class="col-sm-4"  type="text" class="form-control" id="primera" required ="required"
            placeholder="Introduce tu Apellido" >
            <i class="fa fa-user-md" aria-hidden="true"></i>
          </div>

          <form role="form">
        <div class="form-group">
        <label class="col-sm-2" for="segundoa">Segundo Apellido</label>
         </div>

        <form role="form">
          <div class="form-group">   
        <input class="col-sm-4"  type="text" class="form-control" id="segundoa" required ="required"
            placeholder="Introduce tu Apellido" >
            <i class="fa fa-user-md" aria-hidden="true"></i>
          </div>

          <form role="form">
        <div class="form-group">
        <label class="col-sm-2" for="user">Usuario</label>
         </div>

        <form role="form">
          <div class="form-group">   
        <input class="col-sm-4"  type="text" class="form-control" id="user" required ="required"
            placeholder="Introduce tu Usuario" >
            <i class="fa fa-user-md" aria-hidden="true"></i>
          </div>

        <form role="form">
        <div class="form-group">
        <label class="col-sm-2" for="primera">Contraseña</label>
         </div>

        <form role="form">
          <div class="form-group">   
        <input class="col-sm-4"  type="text" class="form-control" id="pass" required ="required"
            placeholder="Introduce tu Contraseña" >
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
          </div>

          <form role="form">
        <div class="form-group">
        <label class="col-sm-2" for="primera">Contraseña</label>
         </div>

        <form role="form">
          <div class="form-group">   
        <input class="col-sm-4"  type="text" class="form-control" id="pass" required ="required"
            placeholder="Vuelve a introducir tu Contraseña" >
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>

          </div>

        
          
           <td>
           <button type="button" class="btn btn-default btn-primary">Agregar</button>
          </td>
            <button type="button" class="btn btn-default btn-danger">Cancelar</button>  

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
