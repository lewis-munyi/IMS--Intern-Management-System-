<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    {{--<link rel="stylesheet" href="assets/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    {{--<link rel="stylesheet" href="assets/scss/style.css">--}}
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

{{--<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>--}}
{{--<script src="assets/js/popper.min.js"></script>--}}
<script src="assets/js/plugins.js"></script>
{{--<script src="assets/js/main.js"></script>--}}
</body>
</html>
<script>
    console.log(location.pathname)
    if(location.pathname == "/signup"){
        $('button').prop('disabled', true);
        var check = function() {
            if (document.getElementById('password1').value ==
                document.getElementById('password2').value) {
                document.getElementById('passwordSpan').style.color = 'green';
                document.getElementById('passwordSpan').innerHTML = 'Passwords match';
                $('button').prop('disabled', false);

            } else {
                document.getElementById('passwordSpan').style.color = 'red';
                document.getElementById('passwordSpan').innerHTML = 'Passwords do not match';
                $('button').prop('disabled', true);
            }
        }
    }
</script>
</body>
</html>
