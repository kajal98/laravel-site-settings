<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta name="_token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Pagehits">
  <meta name="author" content="">
  <title>Your Project Name | @yield('title')</title>
  <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="{!! asset('images/logo.png') !!}">
  <link rel="stylesheet" href="{!! asset('/css/admin.css') !!}">
  <link rel="stylesheet" href="{!! asset('/css/datatable.css') !!}">
  <link rel="stylesheet" href="{!! asset('fonts/font-awesome/font-awesome.css') !!}">
  <link rel="stylesheet" href="{!! asset('fonts/web-icons/web-icons.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('fonts/brand-icons/brand-icons.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('/css/nc.css') !!}">
  <script src="{!! asset('/js/admin/breakpoints.js') !!}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition site-navbar-small mm-wrapper site-menubar-fold" style="animation-duration: 800ms; opacity: 1;">
 <div class="pre-loader">
  <div class="pre-loader-box">
   {{-- <img src="{!! asset('/images/loader1.gif') !!}"> --}}
   Loading...
   <div class="bar-loader">
     <span class="first-line"></span>
     <span class="second-line"></span>
   </div>
 </div>
</div>
@include('shared.navbar')
@include('shared.sidebar')
@yield('styles')
@yield('content')
<script src="{!! asset('/js/admin.js') !!}"></script>
<script src="{!! asset('/js/datatable.js') !!}"></script>
<script>Config.set('assets', '../../assets');</script>
@yield('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    jQuery(".site-menu li").each(function(){
      if(jQuery(this).find('a').attr('href') == window.location.href || jQuery(this).find('a').attr('href')+"/" == window.location.href)
      {
        jQuery(this).addClass("active");
      }
    });
  });
</script>
</body>
</html>