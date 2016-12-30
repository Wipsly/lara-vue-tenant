<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')
<body class="navbar-bottom">

<div id="app">
    @include('layouts.partials.header')

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->



                <!-- Content -->
                @yield('content')

                <transition
                        enter-active-class="animated fadeIn"
                        leave-active-class="animated fadeOut"
                        mode="out-in"
                        keep-alive
                >
                    <router-view></router-view>
                </transition>

            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

    @include('layouts.partials.footer')

</div>

<!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/core/app.js"></script>
    <script src="/js/plugins/ui/nicescroll.min.js"></script>
    <script src="/js/plugins/ui/drilldown.js"></script>
<!-- /Scripts -->

</body>
</html>
