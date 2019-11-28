<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: black">
            <div class="container-fluid">

                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}"
                                                                                             class="img-fluid" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="color: white!important;">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white" href="" title="ALL TIRES">All tires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white" href="" title="bestsellers">Bestsellers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white" href="" title="DELIVERY & INSTALLERS">Delivery & Installers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase text-white    " href="" title="Contacts">Contacts</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <form class="form-inline md-form form-sm mt-0">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                                           aria-label="Search">
                                </form>
                            </li>
                            <li class="nav-item text-center" style="width: 40%;background: linear-gradient(180deg, #FD595A 0%, #8C1314 100%);">
                                <a href="" class="" style="position:absolute;padding-top: 38px;padding-left: 4px;"><img src="img/0.png" alt="" class="img-fluid"></a>
                                <a href="" class=""><img src="img/basket.png" alt="" class="img-fluid"></a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
</body>
</html>
