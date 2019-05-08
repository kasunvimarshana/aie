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
    <!-- a href="{{ url('/') }}"><b>Follow </b>Me</a -->
    <a class="logo-link" href="{!! url('/') !!}">
        <img class="img img-responsive logo-img" src="{!! asset('img/logo_1.png') !!}"/>
        <!-- p style="color: white;"> Event Tracker </p -->
        <p class="logo-text"> Event Tracker </p>
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!-- p class="login-box-msg">Sign in to start your session</p -->

    <form action="{{ url('/') }}" method="POST" autocomplete="off">
      <!-- {{ csrf_field() }} || {{ Session::token() }} -->
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

    <!-- a href="{{ url('/') }}">I forgot my password</a><br -->
    <!-- a href="{{ url('/') }}" class="text-center">Register a new membership</a -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- REQUIRED JS SCRIPTS -->
<!-- REQUIRED JS SCRIPTS -->
<!-- iCheck -->
<!-- script src="{{ asset('node_modules/admin-lte/plugins/iCheck/icheck.min.js') }}"></script -->
<!-- script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script -->
<!-- Particle-js -->
<script src="{{ asset('node_modules/particles.js/particles.js') }}"></script>
<script>
// ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 700
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}); 
</script>
</body>
</html>