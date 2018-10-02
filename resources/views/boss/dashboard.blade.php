@extends('layouts.dashboard')
@section('page-styles')
@endsection
@section('nav-title')
    <h1>Boss!</h1>
@endsection
@section('nav-content')
    {{--<h1>Heloo world!!</h1>--}}
@endsection
@section('side-content')
    <li>
        <a href="{{route('admin')}}"> <i class="menu-icon fa fa-home"></i>Dashboard</a>
    </li>
    <h3 class="menu-title">Subordinates</h3><!-- /.menu-title -->
    <li>
        <a href="widgets.html"> <i class="menu-icon fa fa-users"></i>Interns</a>
    </li>
    <li>
        <a href="widgets.html"> <i class="menu-icon fa fa-users"></i>Attaches</a>
    </li>
    <h3 class="menu-title">Reports</h3><!-- /.menu-title -->
    <li>
        <a href="#"><i class="menu-icon fa fa-book"></i>Coming soon ...</a>
    </li>

    {{--<li class="menu-item-has-children dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>--}}
        {{--<ul class="sub-menu children dropdown-menu">--}}
            {{--<li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>--}}
            {{--<li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="display-1">Boss content</h1>
        </div>
    </div>
@endsection
@section('page-scripts')
@endsection