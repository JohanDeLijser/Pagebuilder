<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pagebuilder') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', 'Pagebuilder') }}
            </a>

            <div class="" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @else
                            @if (Route::current()->getName() === 'backend')
                                <a class="nav-link" href="{{ route('home') }}">{{ __('View page') }}</a>
                            @else
                                <a class="nav-link" href="{{ route('backend') }}">{{ __('Edit page') }}</a>
                            @endif
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Pagebuilder by</h5>
                    <p>This pagebuilder was build by Johan de Lijser for the Avans Assessment voor instroom jaar 2</p>
                </div>
                <div class="col-12 copyright-footer">
                    <p>&copy; <?php echo date('Y'); ?> all rights served</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
