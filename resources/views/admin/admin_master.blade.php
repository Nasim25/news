<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="Nasim News Portal">
    <meta name="twitter:title" content="Nasim News Portal">
    <meta name="twitter:description" content="Nasim News Portal">
    {{-- <meta name="twitter:image" content="{{asset('backend/')}}/bracket/img/bracket-social.html"> --}}

    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="{{ asset('backend/') }}/bracket/img/bracket-social.html">
    <meta property="og:image:secure_url" content="{{ asset('backend/') }}/bracket/img/bracket-social.html">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="Nasim">

    <title>@yield('admin_title')</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('backend/') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('backend/') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('backend/') }}/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="{{ asset('backend/') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="{{ asset('backend/') }}/lib/chartist/chartist.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend/') }}/css/bracket.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('admin.include.leftsidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.include.header')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('admin.include.right_side_bar')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        @yield('admin_main_section')

        @include('admin.include.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('backend/') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('backend/') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('backend/') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('backend/') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('backend/') }}/lib/moment/moment.js"></script>
    <script src="{{ asset('backend/') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('backend/') }}/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="{{ asset('backend/') }}/lib/peity/jquery.peity.js"></script>
    <script src="{{ asset('backend/') }}/lib/chartist/chartist.js"></script>
    <script src="{{ asset('backend/') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{ asset('backend/') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('backend/') }}/lib/rickshaw/rickshaw.min.js"></script>


    <script src="{{ asset('backend/') }}/js/bracket.js"></script>
    <script src="{{ asset('backend/') }}/js/ResizeSensor.js"></script>
    <script src="{{ asset('backend/') }}/js/dashboard.js"></script>
    <script>
        $(function() {
            'use strict'

            // FOR DEMO ONLY
            // menu collapsed by default during first page load or refresh with screen
            // having a size between 992px and 1299px. This is intended on this page only
            // for better viewing of widgets demo.
            $(window).resize(function() {
                minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
                if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)')
                    .matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideUp();
                } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass(
                        'collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideDown();
                }
            }
        });

    </script>
</body>

</html>
