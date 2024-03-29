<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Портал</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/lib/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="/css/@yield('css', 'app').css">

    <!-- Scripts -->
    <link rel="preload" href="{{ url('/js/app.js') }}" as="script">
</head>
<body>
<div>
    <nav class="navbar">
        <div class="container">

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"
                                                                                      aria-hidden="true"></i> Главная
                            <span class="sr-only">(current)</span></a></li>

                    <li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i
                                    class="fa fa-first-order" aria-hidden="true"></i> Заказы
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                             <li ><a   href="{{ url('#/orders') }}"><i class="fa fa-list" aria-hidden="true"></i> Все заказы</a></li>

                            <li><a   href="{{ url('#/scoped_orders') }}"><i class="fa fa-bars" aria-hidden="true"></i> Заказы по категориям</a></li>

                        </ul>
                    </li>
                    </li>


                    <li class="{{ Request::is('product') ? 'active' : '' }}"><a href="{{ url('#/products') }}"><i
                                    class="fa fa-product-hunt" aria-hidden="true"></i> Продукты</a></li>

                    <li class="{{ Request::is('temperature') ? 'active' : '' }}"><a href="{{ url('#/temperature') }}"><i
                                    class="fa fa-cloud" aria-hidden="true"></i> Погода</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('register') }}"><i class="fa fa-registered" aria-hidden="true"></i>
                                Регистрация</a></li>
                        <li><a href="{{ url('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</a></li>
                    @else
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="fa fa-user-circle-o"
                                   aria-hidden="true"></i> {{ Auth::user()->name }}
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('logout') }}" class="white-text"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> Выход
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
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

    <main id="app">
        @yield('content')
    </main>
</div>
<script src="{{ url('/js/app.js') }}"></script>
@yield('footer')
</body>
</html>
