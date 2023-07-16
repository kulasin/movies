<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Movies Directory</title>

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../resources/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../resources/dist/css/adminlte.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../resources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../resources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../resources/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="../resources/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="../resources/plugins/bootstrap-slider/css/bootstrap-slider.min.css">
  <link rel="icon" type="image/x-icon" href="../resources/dist/img/fav.png">
 
<style>

.fade-in-out {
  opacity: 0;
  animation: fade-in-out 5s infinite;
  width:20px!important;
  height:20px!important;
  margin-bottom:-8px;
  margin-left:6px;
}

.hidden {
display: none!important;
}

@keyframes fade-in-out {
  0%, 100% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}


</style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">

      <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button style="border:none; background:none;" class="nav-link" type="submit">Logout</button>
</form>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

    
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      Movies
      <span class="brand-text font-weight-light">DIRECTORY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 d-flex">
        <div class="image">
          <img class="fade-in-out" src="../resources/dist/img/online.svg">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Movies
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All movies</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('create') }}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add movie</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ route('followed') }}" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>My following list</p>
                </a>
              </li>
              
              
              
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
 
