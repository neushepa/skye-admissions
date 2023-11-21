<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Skye Digipreneur</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../front/img/favicon.png" rel="icon">
    <link href="../front/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../front/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../front/vendor/aos/aos.css" rel="stylesheet">
    <link href="../front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../front/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../front/css/main.css" rel="stylesheet">

    {{-- Fontawesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous">

    {{-- Dselect Dropdown --}}
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css" crossorigin="anonymous">

    {{-- Styling --}}
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number]{
            -moz-appearance: textfield;
        }
    </style>

    <!--
        =======================================================
        * Template Name: Nova
        * Updated: Sep 18 2023 with Bootstrap v5.3.2
        * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ========================================================
    -->
</head>

<body class="page-index">

    @yield('content')

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../front/vendor/aos/aos.js"></script>
    <script src="../front/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../front/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../front/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../front/js/main.js"></script>

    {{-- Dselect Js --}}
    <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>

    {{-- Jquery CDN --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    {{-- JQUERY specific --}}
    @yield('script')

</body>

</html>
