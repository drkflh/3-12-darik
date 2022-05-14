<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-starter.css') }}">
    <title>Darik | {{$title}}</title>
    </head>
    <body>
        @include('partials.navbar')
<div class="container mt-4">
    @yield('container')

    </div>

    <script type="text/javascript"> href="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript"> href="{{ asset('js/owl.carousel.js') }}"></script>    
    <script type="text/javascript"> href="{{ asset('js/bootstrap.min.js') }}"></script>

    </body>
</html>