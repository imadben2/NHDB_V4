<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>NHDB 2</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">


    <script src="{{ asset('app-assets/js/core/libraries/jquery.min.js')}}"></script>
    <link href="{{ asset('app-assets/vendors/css/vendors.min.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/colors.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">







    @yield('ajax_data_table_css')
    @yield('editors')

</head>

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    @include('admin.includes.navbar')
    @include('admin.includes.sidebar')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('admin.includes.footer')
    <script src="{{ asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('app-assets/js/core/app.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}"></script>


    @yield('ajax_data_table_js')


</body>
<!-- END: Body-->

</html>
