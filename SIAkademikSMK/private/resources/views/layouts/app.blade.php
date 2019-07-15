<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <title>Data Pengelola Penduduk</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <script src="{{ asset('public/js/bootstrap-datepicker.js') }}" defer></script>
    <link href="{{ asset('public/css/datepicker.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Data Pengelola Penduduk
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item @if(Request::is('penduduk') || Request::is('penduduk/home') )
                        @endif
                        ">
                            <a class="nav-link" href="{{url('home')}}">Home</a>
                        </li>

                        <li class="nav-item @if(Request::is('penduduk') || Request::is('penduduk/tambahpenduduk') || Request::is('penduduk/editpenduduk/*') )
                        active
                        @endif
                        ">
                            <a class="nav-link" href="{{url('penduduk')}}">Penduduk</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">User</a>
                        </li>
                        <li class="nav-item
                        @if(Request::is('blog') || Request::is('penduduk/tambah') || Request::is('penduduk/detail/*') || Request::is('penduduk/edit/*') )
                        @endif
                        ">
                            <a class="nav-link" href="{{url('penduduk')}}">Informasi Kependudukan</a>
                        </li>

                        <form class="form-inline my-2 my-lg-0" method="GET" action="/penduduk">
                          <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
