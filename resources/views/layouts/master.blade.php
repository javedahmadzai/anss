<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ANSS | @yield('title')</title>
        <link rel="icon" href="/img/FaviconLogo.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="wrapper">
            <div id="top-line"></div>
            @include('partials.header')
            @include('partials.navbar')
            @yield('content')
            @include('partials.footer')
        <div>

        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
