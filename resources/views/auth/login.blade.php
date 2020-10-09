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



    <!-- BEGIN: Vendor CSS-->
    <link href="{{ asset('app-assets/vendors/css/vendors.min.css')}}" rel="stylesheet">

@yield('data_table')






<!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link href="{{ asset('app-assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/colors.css')}}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.css')}}" rel="stylesheet">

    <link href="{{ asset('app-assets/css/pages/authentication.css')}}" rel="stylesheet">



    <!-- BEGIN: Page CSS-->
    <link href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}" rel="stylesheet">

    <!-- BEGIN:



        Page CSS-->





    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-8 col-11 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                <img src="../../../app-assets/images/pages/login.png" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">S'identifier</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">
                                        Bienvenue veuillez vous connecter à votre compte.</p>
                                    <div class="card-content">

                                        <div class="card-body pt-1">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                           name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required autocomplete="email"
                                                           autofocus>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>

                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                    <label for="email">
                                                        Adresse e-mail</label>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                          </span>
                                                    @enderror
                                                </fieldset>

                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                           name="password" placeholder="Password" required autocomplete="current-password">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                    <label for="password">
                                                        Mot de passe</label>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </fieldset>


                                                <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="login-footer">
                                        <div class="divider">
                                            <div class="divider-text"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ asset('app-assets/js/core/app.js')}}"></script>


<!-- END: Theme JS-->


@yield('ajax-script')


<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
