@extends('layouts.dashboard')
@section('page-styles')
@endsection
@section('nav-title')
    <h1>Super administrator</h1>
@endsection
@section('nav-content')
    <div class="d-flex justify-content-center ">
        <span class="small text-danger"><i>With great power comes great responsibility!</i></span>
    </div>

@endsection
@section('side-content')
        <li class="active">
            <a href="/super"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
        </li>
        <h3 class="menu-title">Administrators</h3><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-th"></i>Manage admins</a>
            <ul class="sub-menu children dropdown-menu">
                <li>
                    <i class="fa fa-lock"></i>
                    <a data-toggle="collapse" href="#alluserscollapsible" role="button" aria-expanded="false" aria-controls="alluserscollapsible">All admins</a>
                </li>
                <li>
                    <i class="fa fa-lock"></i>
                    <a data-toggle="collapse" href="#allIctCollapsible" role="button" aria-expanded="false" aria-controls="allFinanceCollapsible">ICT Admins</a>
                <li>
                    <i class="fa fa-lock"></i>
                    <a data-toggle="collapse" href="#allFinanceCollapsible" role="button" aria-expanded="false" aria-controls="allFinanceCollapsible"> Admins</a>
                </li>
                <li>
                    <i class="fa fa-lock"></i>
                    <a data-toggle="collapse" href="#hr" role="button" aria-expanded="false" aria-controls="hr">Human resource admins</a>
                </li>
            </ul>
        </li>
        <h3 class="menu-title">Manage</h3><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-th"></i>Attaches</a>
            <ul class="sub-menu children dropdown-menu">
                <li>
                    <i class="fa fa-users"></i>
                    <a data-toggle="collapse" href="#interns" role="button" aria-expanded="false" aria-controls="interns">Interns</a>
                    <a href="{{route('interns')}}"> <i class="menu-icon fa fa-users"></i>Interns</a>
                </li>
                <li>
                    <i class="fa fa-users"></i>
                    <a data-toggle="collapse" href="#attaches" role="button" aria-expanded="false" aria-controls="attaches">Attaches</a>
                </li>
            </ul>
        </li>
        <h3 class="menu-title">Reports</h3><!-- /.menu-title -->
        {{--<li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Components</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Tables</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
            </ul>
        </li>--}}
        <li>
            <a href="#">Coming soon ...</a>
        </li>
        <br>

@endsection
@section('content')
    <div class="container">
        {{-- Modal  --}}
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    {{--<form>--}}
                    <form action="#" method="post">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUserModalTitle">Add an administrator</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                {{--div.col.col-sm-12--}}
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="John Doe">
                                <small id="nameHelp" class="form-text text-muted">Enter the employee's full name. </small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="national_id">ID Number</label>
                                <input type="number" class="form-control" id="national_id" name="national_id" aria-describedby="IdHelp" placeholder="12345667889">
                                <small id="idHelp" class="form-text text-muted">Enter national ID or passport number</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="custom-select custom-select-lg mb-3" name="role" id="role">
                                    <option selected>Choose access level</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Intern">Intern</option>
                                    <option value="Attache">Attache</option>
                                    <option value="Super-Administrator">Super Administrator</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="department">Department</label>
                                <select class="custom-select custom-select-lg mb-3" id="department" name="department">
                                    <option selected>Choose department</option>
                                    <option value="ICT">ICT</option>
                                    <option value="Human-resource">Human Resource</option>
                                    <option value="Finance">Finance</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="custom-select custom-select-lg mb-3" id="status" name="status">
                                    <option selected value="ongoing">Ongoing</option>
                                    <option value="Complete">Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary rounded">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End add user modal--}}
        <div class="content mt-3">
            {{--<div class="col-sm-12">--}}
                {{--<div class="alert  alert-danger alert-dismissible fade show" role="alert">--}}
                    {{--<span class="badge badge-pill badge-danger">ERROR!</span>--}}
                    {{--<script>document.write({{json_encode($response)}})</script>--}}
                    {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                    {{--<b>User has NOT been added.</b><br>--}}
                    {{--{{$response}}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@endif--}}
            <div class="col-sm-12" id="collapsible-all-users">
                <div class="accordion" id="accordionExample">
                    {{--All admins--}}
                    <div class="card">
                        <div class="card-header" id="userscollapsible">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#alluserscollapsible" aria-expanded="true" aria-controls="alluserscollapsible">
                                    All administrators
                                </button>
                                <i class="fa fa-chevron-circle-down fa-2x pull-right" style='color: #272c33;' data-toggle="collapse" data-target="#alluserscollapsible" aria-expanded="true" aria-controls="alluserscollapsible"></i>
                            </h5>
                        </div>
                        <div id="alluserscollapsible" class="collapse" aria-labelledby="alluserscollapsible" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="animated fadeIn">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">All users</strong>
                                                    <a class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#addUserModal" role="button">Add new user</a>
                                                </div>

                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>ID/Passport no.</th>
                                                                <th>Role</th>
                                                                <th>Department</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            {{--@if(is_array($response)== false || is_string($response) == false)
                                                            @foreach($response as $user)
                                                            @if($user->role != "Intern" && $user->role != "attache")
                                                            <tr>
                                                            <td>{{$user->id}}</td>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->email}} </td>
                                                            <td>{{$user->national_id}}</td>
                                                            <td>{{$user->role}}</td>
                                                            <td>{{$user->department}}</td>
                                                            </tr>
                                                            @endif
                                                            @endforeach
                                                            @endif--}}
                                                            <tr>
                                                                <td>Gavin Joyce</td>
                                                                <td>Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>$92,575</td>
                                                                <td>Edinburgh</td>
                                                                <td>$92,575</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gavin Joyce</td>
                                                                <td>Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>$92,575</td>
                                                                <td>Edinburgh</td>
                                                                <td>$92,575</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
                    {{--End all admins--}}
                    {{--ICT admins--}}
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#allIctCollapsible" aria-expanded="false" aria-controls="allIctCollapsible">
                                    All ICT administrators
                                </button>
                                <i class="fa fa-chevron-circle-down fa-2x pull-right" data-toggle="collapse" data-target="#allIctCollapsible" aria-expanded="true" aria-controls="allIctCollapsible"></i>
                            </h5>
                        </div>
                        <div id="allIctCollapsible" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">All ICT administrators</strong>
                                                    <a class="btn btn-primary rounded pull-right" href="#" role="button">Add new user</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>ID/Passport no.</th>
                                                                <th>Role</th>
                                                                <th>Department</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            {{--@if(is_array($response)== false || is_string($response) == false)--}}
                                                            {{--@foreach($response as $user)--}}
                                                            {{--<tr>--}}
                                                            {{--@if($user->department == "ICT" && $user->role != "Intern" && $user->role != "attache")--}}
                                                            {{--<td>{{$user->id}}</td>--}}
                                                            {{--<td>{{$user->name}}</td>--}}
                                                            {{--<td>{{$user->email}} </td>--}}
                                                            {{--<td>{{$user->national_id}}</td>--}}
                                                            {{--<td>{{$user->role}}</td>--}}
                                                            {{--<td>{{$user->department}}</td>--}}
                                                            {{--@endif--}}
                                                            {{--</tr>--}}
                                                            {{--@endforeach--}}
                                                            {{--@endif--}}
                                                            <tr>
                                                                <td>Prescott Bartlett</td>
                                                                <td>Technical Author</td>
                                                                <td>London</td>
                                                                <td>$145,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
                    {{--End ICT admins--}}

                    {{--Finance admins--}}
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#allFinanceCollapsible" aria-expanded="false" aria-controls="allFinanceCollapsible">
                                    All Finance administrators
                                </button>
                                <i class="fa fa-chevron-circle-down fa-2x pull-right" data-toggle="collapse" data-target="#allFinanceCollapsible" aria-expanded="true" aria-controls="allFinanceCollapsible"></i>
                            </h5>
                        </div>
                        <div id="allFinanceCollapsible" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">All Finance Admins</strong>
                                                    <a class="btn btn-primary rounded pull-right" href="#" role="button">Add new user</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>ID/Passport no.</th>
                                                                <th>Role</th>
                                                                <th>Department</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            {{--@if(is_array($response)== false || is_string($response) == false)--}}
                                                            {{--@foreach($response as $user)--}}
                                                            {{--@if($user->department == "Finance" && $user->role != "Intern" && $user->role != "attache")--}}
                                                            {{--<tr>--}}
                                                            {{--<td>{{$user->id}}</td>--}}
                                                            {{--<td>{{$user->name}}</td>--}}
                                                            {{--<td>{{$user->email}} </td>--}}
                                                            {{--<td>{{$user->national_id}}</td>--}}
                                                            {{--<td>{{$user->role}}</td>--}}
                                                            {{--<td>{{$user->department}}</td>--}}
                                                            {{--</tr>--}}
                                                            {{--@endif--}}
                                                            {{--@endforeach--}}
                                                            {{--@endif--}}
                                                            <tr>
                                                                <td>Dai Rios</td>
                                                                <td>Personnel Lead</td>
                                                                <td>Edinburgh</td>
                                                                <td>$217,500</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
                    {{--end finance accounts--}}

                    {{--Human resource--}}
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#hr" aria-expanded="false" aria-controls="allIctCollapsible">
                                    All Human Resource administrators
                                </button>
                                <i class="fa fa-chevron-circle-down fa-2x pull-right" data-toggle="collapse" data-target="#hr" aria-expanded="true" aria-controls="hr"></i>
                            </h5>
                        </div>
                        <div id="hr" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">All Human Resource administrators</strong>
                                                    <a class="btn btn-primary rounded pull-right" href="#" role="button">Add new user</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>ID/Passport no.</th>
                                                                <th>Role</th>
                                                                <th>Department</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            {{--@if(is_array($response)== false || is_string($response) == false)--}}
                                                            {{--@foreach($response as $user)--}}
                                                            {{--<tr>--}}
                                                            {{--@if($user->department == "Human-resource" && $user->role != "Intern" && $user->role != "attache")--}}
                                                            {{--<td>{{$user->id}}</td>--}}
                                                            {{--<td>{{$user->name}}</td>--}}
                                                            {{--<td>{{$user->email}} </td>--}}
                                                            {{--<td>{{$user->national_id}}</td>--}}
                                                            {{--<td>{{$user->role}}</td>--}}
                                                            {{--<td>{{$user->department}}</td>--}}
                                                            {{--@endif--}}
                                                            {{--</tr>--}}
                                                            {{--@endforeach--}}
                                                            {{--@endif--}}
                                                            <tr>
                                                                <td>Prescott Bartlett</td>
                                                                <td>Technical Author</td>
                                                                <td>London</td>
                                                                <td>$145,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
                    {{--End human resource--}}

                    {{--All interns--}}
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#interns" aria-expanded="false" aria-controls="allIctCollapsible">
                                    All Interns
                                </button>
                                <i class="fa fa-chevron-circle-down fa-2x pull-right" data-toggle="collapse" data-target="#interns" aria-expanded="true" aria-controls="interns"></i>
                            </h5>
                        </div>
                        <div id="interns" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">All interns</strong>
                                                    <a class="btn btn-primary rounded pull-right" href="#" role="button">Add new user</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>ID/Passport no.</th>
                                                                <th>Role</th>
                                                                <th>Department</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            {{--@if(is_array($response)== false || is_string($response) == false)--}}
                                                            {{--@foreach($response as $user)--}}
                                                            {{--<tr>--}}
                                                            {{--@if($user->role == "Intern")--}}
                                                            {{--<td>{{$user->id}}</td>--}}
                                                            {{--<td>{{$user->name}}</td>--}}
                                                            {{--<td>{{$user->email}} </td>--}}
                                                            {{--<td>{{$user->national_id}}</td>--}}
                                                            {{--<td>{{$user->role}}</td>--}}
                                                            {{--<td>{{$user->department}}</td>--}}
                                                            {{--@endif--}}
                                                            {{--</tr>--}}
                                                            {{--@endforeach--}}
                                                            {{--@endif--}}
                                                            <tr>
                                                                <td>Prescott Bartlett</td>
                                                                <td>Technical Author</td>
                                                                <td>London</td>
                                                                <td>$145,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
                    {{--End all interns--}}

                    {{--All attaches--}}
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#attaches" aria-expanded="false" aria-controls="allIctCollapsible">
                                    All attaches
                                </button>
                                <i class="fa fa-chevron-circle-down fa-2x pull-right" data-toggle="collapse" data-target="#attaches" aria-expanded="true" aria-controls="attaches"></i>
                            </h5>
                        </div>
                        <div id="attaches" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">All attaches</strong>
                                                    <a class="btn btn-primary rounded pull-right" href="#" role="button">Add new user</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>ID/Passport no.</th>
                                                                <th>Role</th>
                                                                <th>Department</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            {{--@if(is_array($response)== false || is_string($response) == false)--}}
                                                            {{--@foreach($response as $user)--}}
                                                            {{--<tr>--}}
                                                            {{--@if($user->role == "Attaches")--}}
                                                            {{--<td>{{$user->id}}</td>--}}
                                                            {{--<td>{{$user->name}}</td>--}}
                                                            {{--<td>{{$user->email}} </td>--}}
                                                            {{--<td>{{$user->national_id}}</td>--}}
                                                            {{--<td>{{$user->role}}</td>--}}
                                                            {{--<td>{{$user->department}}</td>--}}
                                                            {{--@endif--}}
                                                            {{--</tr>--}}
                                                            {{--@endforeach--}}
                                                            {{--@endif--}}
                                                            <tr>
                                                                <td>Prescott Bartlett</td>
                                                                <td>Technical Author</td>
                                                                <td>London</td>
                                                                <td>$145,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>
                    </div>
                    {{--End all attaches--}}
                </div>
            </div>
        </div> <!-- .content -->
    </div>
@endsection
@section('page-scripts')
@endsection