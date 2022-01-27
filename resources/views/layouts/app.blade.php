<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IseeFree') }}</title>

    <link rel=icon href=/favicon.png>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('assets/venders/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/venders/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/venders/css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="header header-fixed">
            <div class="container-fluid d-flex align-items-stretch justify-content-between">
                <div class="header-menu-wrapper header-menu-wrapper-left">
                    <div class="header-menu header-menu-mobile header-menu-layout-default">
                        <ul class="menu-nav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="/" class="menu-link">
                                    <img src="{{ asset('assets/img/logo.png') }}" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @guest
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    <div class="header-menu header-menu-mobile header-menu-layout-default">
                        <ul class="menu-nav">
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @else
                <div class="topbar">
                    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                        <div class="header-menu header-menu-mobile header-menu-layout-default">
                            <ul class="menu-nav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Panel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                            {{ Auth::user()->first_name }}
                        <span></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('freebie.post') }}">Post</a></li>
                            <li class="divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                        </ul>
                    </div>
                </div>
                @endguest
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <script src="{{ asset('assets/venders/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/venders/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
