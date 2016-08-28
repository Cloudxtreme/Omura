<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ Theme::url('semantic.min.css') }}">
        <script src="{{ Theme::url('jquery.min.js') }}"></script>
        <script src="{{ Theme::url('semantic.min.js') }}"></script>
        <title>Omura - @yield('title')</title>
    </head>
    <body>
        <div class="ui blue borderless large stackable fixed inverted menu" style="position: static; margin-bottom: 1vh;">
            <div class="header item">
                OMURA
            </div>
            <div class="right menu">
                <div class="item">
                    <div class="ui positive button"><i class="sign in icon"></i> Login</div>
                </div>
            </div>
        </div>
        <div class="ui fluid container">
            <div class="ui stackable twelve column grid">
                <div class="three wide column"></div>
                <div class="nine wide column">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>


<!--
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link href="/css/app.css" rel="stylesheet">

    <script>
        window.Laravel = <?php /* echo json_encode([
            'csrfToken' => csrf_token(),
        ]); */?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
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

    @yield('content')

    <script src="/js/app.js"></script>
</body>
-->
</html>
