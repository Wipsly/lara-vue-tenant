<!-- Page header -->
<div class="page-header page-header-inverse">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse navbar-transparent">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img src="/images/logo_light.png" alt=""></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li>
                    <a class="sidebar-control sidebar-main-toggle hidden-xs">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
                <li><router-link :to="{ name: 'dashboard' }">Dashboard</router-link></li>
                <li><router-link :to="{ name: 'users-index' }">Users</router-link></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-user">
                    @if (Auth::check())
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span>{{ Auth::user()->name }}</span>
                        <i class="caret"></i>
                    </a>
                    @endif

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->

</div>
<!-- /page header -->
