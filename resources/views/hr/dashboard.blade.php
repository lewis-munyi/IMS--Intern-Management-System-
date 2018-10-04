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
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card text-white bg-white mb-3 rounded" style="max-width: 18rem;">
                    <div class="card-header text-black-50"><h5 class="card-title">Primary card title</h5></div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">FILE UPLOAD</div>
                                <div class="stat-text"></i><a href="file">PDF DOCS</a></li></div>
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
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    All Applications
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Number</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>National_ID</th>
                                        <th>ROLE</th>
                                        <th>DEPARTMENT</th>
                                        <th>Approval</th>
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
                                            <a href="/hr/applications/{{$application->id}}">View</a>
                                            &nbsp;|&nbsp;
                                            @if($application->status == 'accepted')
                                            <h5><span class="badge badge-pill badge-success em-3">{{$application->status}}</span></h5>
                                            @elseif($application->status == 'rejected')
                                            <h5><span class="badge badge-pill badge-danger em-3">{{$application->status}}</span></h5>
                                            @else
                                            <h5><span class="badge badge-pill badge-warning em-3">{{$application->status}}</span></h5>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    All Attaches list
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Number</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>National_ID</th>
                                        <th>ROLE</th>
                                        <th>DEPARTMENT</th>
                                        <th>Options</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Casey Neitstatew</td>
                                        <td>lewismunyi9447@gmail.com</td>
                                        <td>129824837359</td>
                                        <td>Intern</td>
                                        <td>ICT</td>
                                        <td>
                                            <a href="http://localhost:8000/student/95/edit">Edit</a>
                                            &nbsp;|&nbsp;
                                            <form action="http://localhost:8000/student/95" method="post" style="display: inline-block;" >
                                                <input type="hidden" name="_token" value="uEsZM8NHLLpcg7kw56eVmDmRhlsOQgrGrXqkjd4I">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="javascript:;" onclick="confirm_delete(this.parentNode)">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>
@endsection
@section('page-scripts')
@endsection