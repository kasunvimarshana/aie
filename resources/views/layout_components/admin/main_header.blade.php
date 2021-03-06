<header class="main-header">

    <!-- Logo -->
    <!-- {!! url()->current() !!} -->
    <a href="{!! route('home.showDashboard') !!}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>AIE</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>AIE</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <!-- /.notifications-menu -->

                <!-- Tasks Menu -->
                <!-- /.tasks-menu -->

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        @if( (isset($authUser)) && ($authUser->image_uri) )
                            <img src="{!! $authUser->image_uri !!}" class="user-image lazy" alt="User Image"/>
                        @else
                            <img src="{!! URL::asset('node_modules/admin-lte/dist/img/avatar5.png') !!}" class="user-image lazy" alt="User Image"/>
                        @endif
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                            @isset($authUser)
                                {!! $authUser->email !!}
                            @endisset
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            @if( (isset($authUser)) && ($authUser->image_uri) )
                                <img src="{!! $authUser->image_uri !!}" class="img-circle lazy" alt="User Image"/>
                            @else
                                <img src="{!! URL::asset('node_modules/admin-lte/dist/img/avatar5.png') !!}" class="img-circle lazy" alt="User Image"/>
                            @endif

                            <p>
                            @isset($authUser)
                                {{ $authUser->display_name }}
                            @endisset
                            </p>
                        </li>
                        @section('menu_body')
                        <!-- Menu Body -->
                        <!-- li class="user-body">
                        </li -->
                        <!-- ./menu-body -->
                        @show
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <!-- a href="{!! url()->current() !!}" class="btn btn-info btn-flat">Profile</a -->
                            </div>
                            <div class="pull-right">
                                <a href="{!! route('login.doLogout') !!}" class="btn btn-info btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li -->
                <!-- ./control-sidebar-toggle-button -->
            </ul>
        </div>
    </nav>
    
</header>