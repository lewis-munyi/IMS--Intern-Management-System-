@extends('layouts.dashboard')
@section('page-styles')
@endsection
@section('nav-title')
    <h1 class="display-1">Human Resource!</h1>
@endsection
@section('nav-content')
    {{--<h1>Heloo world!!</h1>--}}
@endsection
@section('side-content')
    <li>
        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Boss! </a>
    </li>
    <h3 class="menu-title">Staff</h3><!-- /.menu-title -->
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Permanent staff</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Coming soon..</a></li>

        </ul>
    </li>
    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Temporary staff</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-table"></i><a href="#">Interns</a></li>
            <li><i class="fa fa-table"></i><a href="{{route('logout')}}">Attaches</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
        </ul>
    </li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total INTERNS</div>
                                <div class="stat-digit">8</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total attaches</div>
                                <div class="stat-digit">7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total attaches</div>
                                <div class="stat-digit">7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total attaches</div>
                                <div class="stat-digit">7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion" id="Applications">
                    <div class="card rounded">
                        <div class="card-header bg-secondary rounded d-flex justify-content-center" id="allHeading">
                            <h5 class="mb-0">
                                <button class="btn btn-primary rounded " type="button" data-toggle="collapse" data-target="#allCollapsed" aria-expanded="true" aria-controls="allCollapsed">
                                    All Applications
                                </button>
                            </h5>
                        </div>

                        <div id="allCollapsed" class="collapse" aria-labelledby="allHeading" data-parent="#Applications">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>National ID</th>
                                            <th>ROLE</th>
                                            <th>DEPARTMENT</th>
                                            <th>Approval</th>
                                            <th></th>
                                        </tr>
                                        @foreach($applications as $application)
                                        <tr class='clickable-row' data-href='http://127.0.0.1:8000/#'>
                                            <td>{{$application->id}}</td>
                                            <td>{{$application->name}}</td>
                                            <td>{{$application->email}}</td>
                                            <td>129824837359</td>
                                            <td>Attachment</td>
                                            <td>ICT</td>
                                            <td>
                                                @if($application->status == 'accepted')
                                                <h5><span class="badge badge-pill badge-success em-4">{{$application->status}}</span></h5>
                                                @elseif($application->status == 'rejected')
                                                <h5><span class="badge badge-pill badge-danger em-3">{{$application->status}}</span></h5>
                                                @else
                                                <h5><span class="badge badge-pill badge-secondary em-3">{{$application->status}}</span></h5>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-primary rounded" linkUrl = "/hr/applications/{{$application->id}}" href="/hr/applications/{{$application->id}}">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="pending">
                    <div class="card rounded">
                        <div class="card-header bg-secondary rounded d-flex justify-content-center" id="pendingHeading">
                            <h5 class="mb-0">
                                <button class="btn btn-warning rounded collapsed" type="button" data-toggle="collapse" data-target="#pendingApplications" aria-expanded="false" aria-controls="pendingApplications">
                                    Pending applications
                                </button>
                            </h5>
                        </div>
                        <div id="pendingApplications" class="collapse show" aria-labelledby="pendingHeading" data-parent="#pending">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>National ID</th>
                                            <th>ROLE</th>
                                            <th>DEPARTMENT</th>
                                            <th>Approval</th>
                                            <th></th>
                                        </tr>
                                        @foreach($applications as $application)
                                            @if($application->status == 'pending')
                                                <tr class='clickable-row' data-href='http://127.0.0.1:8000/#'>
                                                    <td>{{$application->id}}</td>
                                                    <td>{{$application->name}}</td>
                                                    <td>{{$application->email}}</td>
                                                    <td>129824837359</td>
                                                    <td>Attachment</td>
                                                    <td>ICT</td>
                                                    <td>
                                                        <h5><span class="badge badge-pill badge-secondary em-4">{{$application->status}}</span></h5>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-outline-primary rounded" linkUrl = "/hr/applications/{{$application->id}}" href="/hr/applications/{{$application->id}}">View</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="approved">
                    <div class="card rounded">
                        <div class="card-header bg-secondary rounded d-flex justify-content-center" id="pendingHeading">
                            <h5 class="mb-0">
                                <button class="btn btn-success rounded collapsed" type="button" data-toggle="collapse" data-target="#approvedApplications" aria-expanded="false" aria-controls="approvedApplications">
                                    Approved applications
                                </button>
                            </h5>
                        </div>
                        <div id="approvedApplications" class="collapse" aria-labelledby="pendingHeading" data-parent="#approved">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>National ID</th>
                                            <th>ROLE</th>
                                            <th>DEPARTMENT</th>
                                            <th>Approval</th>
                                            <th></th>
                                        </tr>
                                        @foreach($applications as $application)
                                            @if($application->status == 'accepted')
                                                <tr class='clickable-row' data-href='http://127.0.0.1:8000/#'>
                                                    <td>{{$application->id}}</td>
                                                    <td>{{$application->name}}</td>
                                                    <td>{{$application->email}}</td>
                                                    <td>129824837359</td>
                                                    <td>Attachment</td>
                                                    <td>ICT</td>
                                                    <td>
                                                        <h5><span class="badge badge-pill badge-success em-4">{{$application->status}}</span></h5>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-outline-primary rounded" linkUrl = "/hr/applications/{{$application->id}}" href="/hr/applications/{{$application->id}}">View</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="rejected">
                    <div class="card rounded">
                        <div class="card-header bg-secondary rounded d-flex justify-content-center" id="pendingHeading">
                            <h5 class="mb-0">
                                <button class="btn btn-danger rounded collapsed" type="button" data-toggle="collapse" data-target="#rejectedApplications" aria-expanded="false" aria-controls="rejectedApplications">
                                    Rejected applications
                                </button>
                            </h5>
                        </div>
                        <div id="rejectedApplications" class="collapse" aria-labelledby="rejectingHeading" data-parent="#rejected">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>National ID</th>
                                            <th>ROLE</th>
                                            <th>DEPARTMENT</th>
                                            <th>Approval</th>
                                            <th></th>
                                        </tr>
                                        @foreach($applications as $application)
                                            @if($application->status == 'rejected')
                                                <tr class='clickable-row' data-href='http://127.0.0.1:8000/#'>
                                                    <td>{{$application->id}}</td>
                                                    <td>{{$application->name}}</td>
                                                    <td>{{$application->email}}</td>
                                                    <td>129824837359</td>
                                                    <td>Attachment</td>
                                                    <td>ICT</td>
                                                    <td>
                                                        <h5><span class="badge badge-pill badge-success em-4">{{$application->status}}</span></h5>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-outline-primary rounded" linkUrl = "/hr/applications/{{$application->id}}" href="/hr/applications/{{$application->id}}">View</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('page-scripts')
    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>
@endsection