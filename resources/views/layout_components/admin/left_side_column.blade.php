<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                @if( (isset($authUser)) && ($authUser->image_uri) )
                    <img src="{!! $authUser->image_uri !!}" class="img-circle lazy" alt="User Image"/>
                @else
                    <img src="{!! URL::asset('node_modules/admin-lte/dist/img/avatar5.png') !!}" class="img-circle lazy" alt="User Image"/>
                @endif
            </div>
            <div class="pull-left info">
                @isset($authUser)
                    <p> {!! $authUser->email !!} </p>
                @endisset
                <!-- p>user</p -->
                <!-- Status -->
                <a href="{!! url()->current() !!}"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            
            <!-- li class="header">ACTIVITIES</li -->
            <!-- Optionally, you can add icons to the links -->
            <!-- li class="{!! set_active(['home/']) !!}"><a href="{!! url()->current() !!}"><i class="fa fa-edit"></i> <span>Home</span></a></li -->
            <li class="header">ACTIVITIES</li>
            <!-- li class="header">VIEW FRONTEND</li -->
            <li class="{!! set_active(['home/*']) !!}"><a href="{!! url()->current() !!}"><i class="fa fa-edit"></i> <span>VIEW FRONTEND</span></a></li>
            <li class="treeview {!! set_active(['users', 'users/*']) !!}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>USER</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{!! set_active(['users/create', 'users/create/*']) !!}"><a href="{!! route('home.showDashboard') !!}"> <i class="fa fa-arrow-circle-o-right"></i> CREATE NEW</a></li>
                    <li class="{!! set_active(['users/show', 'users/show/*']) !!}"><a href="{!! route('home.showDashboard') !!}"> <i class="fa fa-arrow-circle-o-right"></i> SHOW ALL</a></li>
                </ul>
            </li>
            <li class="treeview {!! set_active(['categories', 'categories/*']) !!}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>CATEGORY</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{!! set_active(['categories/create', 'categories/create/*']) !!}"><a href="{!! route('home.showDashboard') !!}"> <i class="fa fa-arrow-circle-o-right"></i> CREATE NEW</a></li>
                    <li class="{!! set_active(['categories/show', 'categories/show/*']) !!}"><a href="{!! route('home.showDashboard') !!}"> <i class="fa fa-arrow-circle-o-right"></i> SHOW ALL</a></li>
                </ul>
            </li>
            <li class="treeview {!! set_active(['courses', 'courses/*']) !!}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>COURSE</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{!! set_active(['courses/create', 'courses/create/*']) !!}"><a href="{!! route('home.showDashboard') !!}"> <i class="fa fa-arrow-circle-o-right"></i> CREATE NEW</a></li>
                    <li class="{!! set_active(['courses/show', 'courses/show/*']) !!}"><a href="{!! route('home.showDashboard') !!}"> <i class="fa fa-arrow-circle-o-right"></i> SHOW ALL</a></li>
                </ul>
            </li>
            
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    
</aside>