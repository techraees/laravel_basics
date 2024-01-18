<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rasalina - Personal Portfolio HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fronend/assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('fronend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/magnific-popup.css ') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fronend/assets/css/responsive.css') }}">
</head>

<body>

    <!-- preloader-start -->
    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('frontend.body.header')
    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        @yield('frontend')

    </main>
    <!-- main-area-end -->



    <!-- Footer-area -->
    @include('frontend.body.footer')
    <!-- Footer-area-end -->






    <!-- JS here -->
    <script src="{{ asset('fronend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/element-in-view.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('fronend/assets/js/main.js') }}"></script>

</body>

</html>
