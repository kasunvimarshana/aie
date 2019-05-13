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
        <!-- {!! url()->current() !!} -->
        <!-- {!! url()->full() !!} -->
        <!-- {!! url()->previous() !!} -->
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
        <!-- iCheck -->
        <link rel="stylesheet" href="{!! asset('node_modules/admin-lte/plugins/iCheck/square/blue.css') !!}"/>
        <link rel="stylesheet" href="{!! asset('css/custom_style_login.css') !!}"/>
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
<body class="hold-transition login-page">
<div id="particles-js"></div>
<div class="login-box">
  <div class="login-logo">
    <!-- a href="{!! url('/') !!}"><b>Title</b></a -->
    <!-- a href="{!! url()->current() !!}"><b>Title</b></a -->
    <!-- a href="{!! Route::current()->getName() !!}"><b>Title</b></a -->
    <!-- a href="{!! Request::url() !!}"><b>Title</b></a -->
    <a href="{!! url()->current() !!}"><b>AIE</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{!! route('login.doLogin') !!}" method="POST" autocomplete="off">
      <!-- {!! csrf_field() !!} || {!! Session::token() !!} -->
      @csrf
      <div class="form-group has-feedback">
        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autocomplete="off"/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required autocomplete="off"/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div -->
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- social-auth-links -->
    <!-- div class="social-auth-links text-center">
    </div -->
    <!-- /.social-auth-links -->

    <!-- a href="{!! url()->current() !!}">I forgot my password</a><br -->
    <!-- a href="{!! url()->current() !!}" class="text-center">Register a new membership</a -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- REQUIRED JS SCRIPTS -->
@section('section_optional_script')
    @includeIf('partials.admin.login_script', array())
@show
<!-- REQUIRED JS SCRIPTS -->
</body>
</html>