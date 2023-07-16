<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Movies Directory 1.0 | Homepage</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../resources/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <!-- Theme style -->
  <link rel="stylesheet" href="../resources/dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="#"><b>Movies</b> DIRECTORY</a>
  </div>
  <!-- User name -->
 

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    
    <!-- /.lockscreen-image -->

   
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  
  <div class="text-center">
  @if (Route::has('login'))
                
                @auth
                <div class="lockscreen-name"> {{ Auth::user()->name }}</div>
                <div class="help-block text-center mb-1">
   You are already signed in. Proceed on CMS
  </div>
                    <a class="btn btn-outline-info" href="{{ url('/home') }}" >Go to CMS</a>
                @else

                <div class="help-block text-center mb-1">
   Please sign in or register!
  </div>
                    <a class="btn btn-info" href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a class="btn btn-outline-info" href="{{ route('register') }}" >Register</a>
                    @endif
                @endauth
            
        @endif
   
  </div>
  <div class="lockscreen-footer text-center mt-5">
    Copyright &copy; 2023 <b><a style="color:#17a2b8" href="https://basawe.com/cv" class="text-black">Nedim Kulašin</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="../resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
    
</html>
