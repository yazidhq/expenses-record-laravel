<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('/welcome/img/favicon.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <title>Expenco</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('/welcome/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/welcome/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('/welcome/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/welcome/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/welcome/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/welcome/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/welcome/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/welcome/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/welcome/css/style.css') }}" rel="stylesheet">

</head>

<body>

    @yield('content')

    <script src="{{ asset('/welcome/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/welcome/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/welcome/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/welcome/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/welcome/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/welcome/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/welcome/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/welcome/js/main.js') }}"></script>

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
    if ("serviceWorker" in navigator) {
        // Register a service worker hosted at the root of the
        // site using the default scope.
        navigator.serviceWorker.register("/sw.js").then(
        (registration) => {
            console.log("Service worker registration succeeded:", registration);
        },
        (error) => {
            console.error(`Service worker registration failed: ${error}`);
        },
        );
    } else {
        console.error("Service workers are not supported.");
    }
    </script>

</body>

</html>