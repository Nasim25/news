<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('admin_title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--base css styles-->
    <link rel="stylesheet" href="{{ asset('backend/') }}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend/') }}/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="{{ asset('backend/') }}/css/flaty.css">

    <link rel="stylesheet" href="{{ asset('backend/') }}/css/flaty-responsive.css">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
    <script src="{{ asset('js/iziToast.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('backend/') }}/img/favicon.html">
</head>

<body>

    <!-- BEGIN Theme Setting -->
    <div id="theme-setting">
        <a href="#"><i class="fa fa-gears fa fa-2x"></i></a>
        <ul>
            <li>
                <span>Skin</span>
                <ul class="colors" data-target="body" data-prefix="skin-">
                    <li class="active"><a class="blue" href="#"></a></li>
                    <li><a class="red" href="#"></a></li>
                    <li><a class="green" href="#"></a></li>
                    <li><a class="orange" href="#"></a></li>
                    <li><a class="yellow" href="#"></a></li>
                    <li><a class="pink" href="#"></a></li>
                    <li><a class="magenta" href="#"></a></li>
                    <li><a class="gray" href="#"></a></li>
                    <li><a class="black" href="#"></a></li>
                </ul>
            </li>
            <li>
                <span>Navbar</span>
                <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                    <li class="active"><a class="blue" href="#"></a></li>
                    <li><a class="red" href="#"></a></li>
                    <li><a class="green" href="#"></a></li>
                    <li><a class="orange" href="#"></a></li>
                    <li><a class="yellow" href="#"></a></li>
                    <li><a class="pink" href="#"></a></li>
                    <li><a class="magenta" href="#"></a></li>
                    <li><a class="gray" href="#"></a></li>
                    <li><a class="black" href="#"></a></li>
                </ul>
            </li>
            <li>
                <span>Sidebar</span>
                <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                    <li class="active"><a class="blue" href="#"></a></li>
                    <li><a class="red" href="#"></a></li>
                    <li><a class="green" href="#"></a></li>
                    <li><a class="orange" href="#"></a></li>
                    <li><a class="yellow" href="#"></a></li>
                    <li><a class="pink" href="#"></a></li>
                    <li><a class="magenta" href="#"></a></li>
                    <li><a class="gray" href="#"></a></li>
                    <li><a class="black" href="#"></a></li>
                </ul>
            </li>
            <li>
                <span></span>
                <a data-target="navbar" href="#"><i class="fa fa-square-o"></i> Fixed Navbar</a>
                <a class="hidden-inline-xs" data-target="sidebar" href="#"><i class="fa fa-square-o"></i> Fixed
                    Sidebar</a>
            </li>
        </ul>
    </div>
    <!-- END Theme Setting -->

    <!-- BEGIN Navbar -->
    @include('admin.include.header')
    <!-- END Navbar -->

    <!-- BEGIN Container -->
    <div class="container" id="main-container">
        <!-- BEGIN Sidebar -->
        @include('admin.include.leftsidebar')
        <!-- END Sidebar -->

        <!-- BEGIN Content -->
        <div id="main-content">
            <!-- BEGIN Page Title -->
            @yield('admin_main_section')
            <!-- END Main Content -->

            <footer>
                <p>2013 © FLATY Admin Template.</p>
            </footer>

            <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- END Content -->
    </div>
    <!-- END Container -->

    @include('vendor.lara-izitoast.toast')

    <!--basic scripts-->
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write(
            '<script src="{{ asset('backend/') }}/assets/jquery/jquery-2.1.1.min.js"><\/script>')

    </script>
    <script src="{{ asset('backend/') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend/') }}/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('backend/') }}/assets/jquery-cookie/jquery.cookie.js"></script>

    <!--page specific plugin scripts-->
    <script src="{{ asset('backend/') }}/assets/flot/jquery.flot.js"></script>
    <script src="{{ asset('backend/') }}/assets/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('backend/') }}/assets/flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('backend/') }}/assets/flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('backend/') }}/assets/flot/jquery.flot.crosshair.js"></script>
    <script src="{{ asset('backend/') }}/assets/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('backend/') }}/assets/sparkline/jquery.sparkline.min.js"></script>

    <!--flaty scripts-->
    <script src="{{ asset('backend/') }}/js/flaty.js"></script>
    <script src="{{ asset('backend/') }}/js/flaty-demo-codes.js"></script>

</body>

</html>
