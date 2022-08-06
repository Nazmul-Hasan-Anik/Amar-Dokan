<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/css/owl.theme.default.css') }}" rel="stylesheet">
    <style>
        a{
            text-decoration: none !important;
        }
    </style>
</head>
<body>
    @include('layouts.include.front-nav')
  
        <div class="content">
        
          @yield('content')
          </div>
            


   
    <script src="{{ asset('Frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/owl.carousel.min.js') }}"></script>
    @yield('script')
</body>
</html>
