<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>She Code Africa Merch Store | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ secure_asset('assets/img/core-img/favicon.ico') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    @include('includes.search')
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="{{ secure_asset('assets/img/core-img/logo_sca.jpg') }}" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        @include('includes.header')
        <!-- Header Area End -->

        <!-- Main content Start -->
        @yield('content')
        <!-- Main content End -->

    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    @include('includes.newsletter')
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('includes.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="{{ secure_asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ secure_asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ secure_asset('assets/js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ secure_asset('assets/js/active.js') }}"></script>

</body>

</html>