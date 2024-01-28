<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('frontend/assets/img/favicon.jpg') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/favicon.jpg') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-3eG7s/EkYpBZF2wDjb2SJmbBpGVXL5sL4c5mcaz3PLU5zaj3A/M2zutZ3kPGrLDNRJ7PnZq4J2XkYM0aUrH34w==" crossorigin="anonymous" />


</head>

<body>
@include('frontend.body.header')
@yield('main')
@include('frontend.body.footer')


<!-- Vendor JS Files -->
<script async src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script async src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script async src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script async src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script async src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script async src="{{ asset('frontend/assets/js/main.js') }}"></script>
<!-- link for slider of checkoutpage -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Script for portfolio-details-slider -->

</body>

</html>
