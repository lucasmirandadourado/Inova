  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inova | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  
    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>I</b>nova</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>INOVA</b>Arquitetura</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
  
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
            
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
             
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/img/avatar/Lucas-125.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Lucas Miranda</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="/img/avatar/Lucas-125.png" class="img-circle" alt="User Image">
  
                  <p>
                    Lucas Miranda Dourado
                    <small>Member since Nov. 2019</small>
                  </p>
                </li>
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
            <img src="/img/avatar/Lucas-125.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Lucas Miranda</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
      
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Navegação Principal</li>
          <li class=""><a href="{{url('/')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
          <li><a href="{{url('/arquiteta')}}"><i class="fa fa-user"></i><span>Arquiteta</span></a></li>
          <li><a href="{{url('/cliente')}}"><i class="fa fa-user"></i><span>Cliente</span></a></li>
          <li><a href="{{url('/projeto')}}"><i class="fa fa-file-text-o"></i><span>Projetos</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
  