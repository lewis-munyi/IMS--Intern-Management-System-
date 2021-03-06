<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="{{asset('app.name', 'Laravel')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        {{--<!-- Styles -->--}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('page-styles')
    </head>

    <body>
    <!-- Side navigation -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{asset('images/logo.png')}}" alt="AMS Admin"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('images/logo2.png')}}" alt="AMS Admin"></a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @yield('side-content')
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <!-- Side navigation -->

    <!-- Right Body -->
    <div id="right-panel" class="right-panel">
        <!-- Nav-bar-->
        <header id="header" class="header">
            <div class="header-menu mr-1">
                <div class="col-sm-3">
                    <div class="page-header float-left">
                        <div class="page-title">
                            @yield('nav-title')
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    @yield('nav-content')
                </div>
                <div class="col-sm-2">
                    <div class="user-area dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('images/admin.jpg')}}" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu pull-right">
                            <a class="nav-link"><i class="fa fa- user"></i>{{ Auth::user()->name }}</a>
                            {{--<a class="nav-link"><i class="fa fa- user"></i>Santana Macharia</a>--}}
                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Nav bar-->
        <!-- content -->
        @yield('content')
        <!-- .content -->
        </div><!-- /#right-body -->
        <!-- Right Panel -->

    {{--Scripts--}}
    <script src="{{asset('js/app.js')}}"></script>
        @yield('page-scripts')
    </body>
</html>

