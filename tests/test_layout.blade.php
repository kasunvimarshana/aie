<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{!! str_replace('_', '-', app()->getLocale()) !!}">
<head>
    <!-- main meta data -->
    @section('section_main_meta')
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{!! csrf_token() !!}"/>
        <title>{{ config('app.name', 'Title') }}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
        <!-- {!! csrf_field() !!} || {!! Session::token() !!} || {!! csrf_token() !!} || @csrf -->
        <!-- {!! Route::current()->getName() !!} -->
        <!-- {!! Route::currentRouteName() !!} -->
        <!-- {!! Route::getFacadeRoot()->current()->uri() !!} -->
        <!-- {!! Route::getCurrentRoute()->getActionName() !!} -->
        <!-- {!! Request::url() !!} -->
        <!-- {!! Request::path() !!} -->
        <!-- {!! url('/') !!} -->
        <!-- {!! url()->current() !!} -->
        <!-- {!! url()->full() !!} -->
        <!-- {!! url()->previous() !!} -->
        <!-- {!! request()->route()->getName() !!} -->
        <!-- {!! request()->is('home/*') !!} -->
        <!-- {!! $router = app()->make('router')->getCurrentRoute()->uri !!} -->
        <!-- {!! request()->route()->getName() !!} -->
    
        <!-- {!! 'https://laravel.com/docs/5.8/helpers' !!} -->
        <!-- {!! $path = app_path() !!} -->
        <!-- {!! $path = base_path() !!} -->
        <!-- {!! $path = config_path() !!} -->
        <!-- {!! $path = config_path() !!} -->
        <!-- {!! config_path('app.php') !!} -->
        <!-- {!! $path = database_path() !!} -->
        <!-- {!! $path = public_path() !!} -->
        <!-- {!! $path = storage_path() !!} -->
        <!-- {!! $url = secure_url('user/profile') !!} -->
        <!-- {!! $url = secure_url('user/profile', [1]) !!} -->
        <!-- {!! $url = secure_url('user/profile', [1]) !!} -->
    @show
    <!-- ./main meta data -->
    <!-- meta data stack -->
    @stack('stack_meta')
    <!-- ./meta data stack -->
    <!-- main stylesheed -->
    @section('section_main_stylesheet')
        @includeIf('layout_components.admin.main_stylesheet', array())
    @show
    <!-- ./main stylesheet -->
    <!-- optional stylesheet -->
    @section('section_optional_stylesheet')
    @show
    <!-- ./optional stylesheet -->
    <!-- optional stylesheet stack -->
    @stack('stack_optional_stylesheet')
    <!-- ./optional stylesheet stack -->
    <!-- main script -->
    @section('section_main_script')
        @includeIf('layout_components.admin.main_script', array())
    @show
    <!-- ./main script -->
</head>
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
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
    @section('main_header')
        @includeIf('layout_components.admin.main_header', array())
    @show
  <!-- ./main-header -->
    
  <!-- Left side column. contains the logo and sidebar -->
    @section('left_side_column')
        @includeIf('layout_components.admin.left_side_column', array())
    @show
  <!-- ./left-side-column. contains the logo and sidebar -->

  @section('content_wrapper')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @section('content_header')
    @show
    <!-- ./Content Header (Page header) -->
    <!-- Main content -->
    <section class="content container-fluid" id="container_fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @yield('content')
        <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @show

  <!-- Main Footer -->
  @section('main_footer')
    @includeIf('layout_components.admin.main_footer', array())
  @show
  <!-- ./main-footer -->

  <!-- Control Sidebar -->
  @section('control_sidebar')
  <!-- aside class="control-sidebar control-sidebar-dark">
  </aside -->
  @show
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- optional script -->
@section('section_optional_script')
    @includeIf('layout_components.admin.sweetalert_with_notify', array())
@show
<!-- ./optional script -->
<!-- optional script stack -->
@stack('stack_optional_script')
<!-- ./optional script stack -->
<!-- REQUIRED JS SCRIPTS -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>