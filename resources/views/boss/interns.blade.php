@extends('layouts.dashboard')
@section('page-styles')
@endsection
@section('nav-title')
    <h1 class="display-1">Attachees</h1>
@endsection
@section('nav-content')
    {{--<h1>Heloo world!!</h1>--}}
@endsection
@section('side-content')
    <li>
        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Boss!</a>
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
            <li><i class="fa fa-table"></i><a href="#">Attachees</a></li>
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
    <style>
        @media (min-width: 992px) {
            .modal-lg {
                max-width: 1000px;
            }
        }
    </style>
    <div class="container-fluid">
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
                                    All attachees list
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Number</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Department</th>
                                        <th>More ...</th>
                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Casey Neitstatew</td>
                                        <td>lewismunyi9447@gmail.com</td>
                                        <td>Intern</td>
                                        <td>ICT</td>
                                        
                                       
                                        </td>
                                        <!-- Button trigger modal -->
                                        <td><button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#exampleModalCenter">View Progress</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                 
                    
                </div>
            </div>
        </div>
    </div>
    {{--Applicant modal--}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Attachee's progress</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>

                         <table class="table table-bordered">
                                    <tr>
                                        <th>Week</th>
                                        <th>Activities performed</th>


                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Casey Neitstatew</td>

                                        
                                       
                                        </td>
                                        
                                    </tr>
                                </table>
                        
                <div class="modal-footer">
                    <button type="button" class="btn btn-success rounded">Approve</button>
                    <button type="button" class="btn btn-danger rounded" >Dismiss</button>
                </div>
            </div>
        </div>
    </div>
    {{--End Applicant modal--}}
@endsection
@section('page-scripts')
@endsection