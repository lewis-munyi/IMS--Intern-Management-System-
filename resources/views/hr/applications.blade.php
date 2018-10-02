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
                                    All interns List
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
                                        <th>National_ID</th>
                                        <th>ROLE</th>
                                        <th>DEPARTMENT</th>
                                        <th>View</th>
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
                                        <!-- Button trigger modal -->
                                        <td><button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#exampleModalCenter">Launch demo modal</button></td>
                                    </tr>
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
    {{--Applicant modal--}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Documents</h5>
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
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://picsum.photos/595/842" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Hello Caption</h5>
                                    <p>Hello caption</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://picsum.photos//595/842" alt="Second slide">
                                <div cls="carousel-caption d-none d-md-block">
                                    <h5>Hello Caption</h5>
                                    <p>Hello caption</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://picsum.photos/595/842" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Hello Caption</h5>
                                    <p>Hello caption</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success rounded">Accept</button>
                    <button type="button" class="btn btn-danger rounded" >Reject</button>
                </div>
            </div>
        </div>
    </div>
    {{--End Applicant modal--}}
@endsection
@section('page-scripts')
@endsection