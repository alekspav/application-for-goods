<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Корпоративный портал</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/lib/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="/css/@yield('css', 'app').css">

    <!-- Scripts -->
    <link rel="preload" href="{{ url('/js/app.js') }}" as="script">
    <script>
        window.Laravel ='<?= json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>'
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Главная <span class="sr-only">(current)</span></a></li>
                        <li class="{{ Request::is('phones') ? 'active' : '' }}"><a href="{{ url('phones') }}"><i class="fa fa-address-book" aria-hidden="true"></i> Погода</a></li>
                        <li class="{{ Request::is('fileshare') ? 'active' : '' }}"><a href="{{ url('fileshare') }}"><i class="fa fa-cloud" aria-hidden="true"></i> Заказы</a></li>
                        <li class="{{ Request::is('phones') ? 'active' : '' }}"><a href="{{ url('phones') }}"><i class="fa fa-address-book" aria-hidden="true"></i> Продукты</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('register') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Регистрация</a></li>
                            <li><a href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</a></li>
                        @else

                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('logout') }}" class="white-text"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> Выход
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
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
