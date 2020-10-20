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
    <title>NHDB V2</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link href="{{ asset('app-assets/vendors/css/vendors.min.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/extensions/nouislider.min.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/ui/prism.min.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css')}}" rel="stylesheet">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link href="{{ asset('app-assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/colors.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/dark-layout.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/semi-dark-layout.css')}}" rel="stylesheet">

    <!-- BEGIN: Page CSS-->

    <link href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/core/colors/palette-gradient.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/plugins/extensions/noui-slider.min.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/pages/app-ecommerce-shop.css')}}" rel="stylesheet">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- END: Custom CSS-->

</head>

<body class="horizontal-layout horizontal-menu content-detached-left-sidebar ecommerce-application navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-detached-left-sidebar">

@include('client.includes.navbar')
@include('client.includes.sidebar')


        <div class="content-body">
            @yield('content')
        </div>


@yield('js_card')
@yield('css_card')

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>



@include('client.includes.footer')




<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/ui/prism.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/wNumb.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/nouislider.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>


<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ asset('app-assets/js/core/app.js')}}"></script>
<script src="{{ asset('app-assets/js/scripts/components.js')}}"></script>

<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce-shop.js')}}"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
