<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ url('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet">

    @stack('css')

    <!-- =======================================================
  * Template Name: Anyar - v4.7.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('sweetalert::alert')

    @include('frontend.layouts2.topbar')

    @include('frontend.layouts2.navbar')

    @yield('content')

    @include('frontend.layouts2.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('frontend/js/main.js') }}"></script>

    @stack('js')

</body>

</html>
