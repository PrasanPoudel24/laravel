<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Level HTML Template</title>

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

    <!-- CSS -->

    <link rel="stylesheet"
        href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('slick/slick.css') }}">

    <link rel="stylesheet"
        href="{{ asset('slick/slick-theme.css') }}">

    <link rel="stylesheet"
        href="{{ asset('css/datepicker.css') }}">

    <link rel="stylesheet"
        href="{{ asset('css/tooplate-style.css') }}">

</head>

<body>

    @include('mainlayout.navbar')

    @yield('content')

    @include('mainlayout.footer')

    <!-- JS -->

    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>

    <script src="{{ asset('js/popper.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/datepicker.min.js') }}"></script>

    <script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>

    <script src="{{ asset('slick/slick.min.js') }}"></script>

    @yield('scripts')

</body>

</html>