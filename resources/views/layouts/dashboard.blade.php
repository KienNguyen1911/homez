<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Homez - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ace-responsive-menu.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/ud-custom-spacing.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashbord_navitaion.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Title -->
    <title>Homez - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

     {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        @include('layouts.partials.header-dashboard')
        <!-- Menu In Hiddn SideBar -->
        @include('layouts.partials.sidebar-dashboard')
        <!--End Menu In Hiddn SideBar -->
        <!-- Mobile Nav  -->
        @include('layouts.partials.mobile-nav-dashboard')

        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-xl">
                <div class="dashboard__sidebar d-none d-lg-block">
                    @include('layouts.partials.sidebar-list-dashboard')
                </div>

                {{-- main content --}}
                <div class="dashboard__main pl0-md">
                    <div class="dashboard__content bgc-f7">
                        <div class="row pb40">
                            <div class="col-lg-12">
                                <div class="dashboard_navigationbar d-block d-lg-none">
                                    @include('layouts.partials.responsive-nav-dashboard')
                                </div>
                            </div>
                            @yield('additionals')
                        </div>
                        @yield('content')
                    </div>
                    <footer class="dashboard_footer pt30 pb10">
                        <div class="container">
                            <div class="row items-center justify-content-center justify-content-md-between">
                                <div class="col-auto">
                                    <div class="copyright-widget">
                                        <p class="text">© Homez - All rights reserved</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="footer_bottom_right_widgets text-center text-lg-end">
                                        <p><a href="#">Privacy</a> · <a href="#">Terms</a> · <a
                                                href="#">Sitemap</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
    </div>
    @stack('script')
    <!-- Wrapper End -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.mmenu.all.js"></script>
    <script src="js/ace-responsive-menu.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-custome.js"></script>
    <script src="js/jquery-scrolltofixed-min.js"></script>
    <script src="js/dashboard-script.js"></script>
    <!-- Custom script for all pages -->
    <script src="js/script.js"></script>

    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error')');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success')');
            @endif
        });

    </script>
</body>

</html>
