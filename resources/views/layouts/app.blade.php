<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="t-dolphin, T Dolphin Home, tìm nhà, t-dolphin home, tim nha cung ban">
    <meta name="description" content="T Dolphin Home - Tìm nhà cùng bạn">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/ace-responsive-menu.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ud-custom-spacing.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Title -->
    <title>T Dolphin Home</title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />


</head>

<body>
    <div class="wrapper ovh">
        {{-- <div class="preloader"></div> --}}
        {{-- @include('layouts.header') --}}
        <!-- Signup Modal -->
        {{-- @include('components.modals.signup') --}}
        <!-- Menu In Hiddn SideBar -->
        {{-- @include('components.sidebar-menu') --}}
        <!--End Menu In Hiddn SideBar -->
        <!-- Advance Feature Modal Start -->
        {{-- @include('components.modals.advanced-search') --}}
        <!-- Advance Feature Modal End -->

        <div class="hiddenbar-body-ovelay"></div>

        <!-- Mobile Nav  -->
        {{-- @include('components.mobile-nav') --}}

        <div class="body_content">

            @yield('content', 'Default Content')

            <!-- Our Footer -->
            @include('layouts.footer')
            <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
    <script>
        (function(w, d, u) {
            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 60000 | 0);
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn.bitrix24.com/b28873001/crm/site_button/loader_1_wrjqzp.js');
    </script>
    <!-- Wrapper End -->
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.mmenu.all.js"></script>
    <script src="js/ace-responsive-menu.js"></script>
    <script src="js/jquery-scrolltofixed-min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/pricing-slider.js"></script>
    <!-- Custom script for all pages -->
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    @stack('scripts')
</body>

</html>
