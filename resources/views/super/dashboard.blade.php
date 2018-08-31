<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard: {{ env('APP_NAME') }} </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">

    {{--<link rel="stylesheet" href="assets/scss/style.css">--}}
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    {{--<script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
</head>
<body>
<style>
    html {
        overflow-x: hidden;
    }
</style>

<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                {{--Navbar--}}
                <li class="active">
                    <a href="/super"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                {{--End navbar--}}

                {{--Admin section--}}
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
                {{--end admin--}}

                {{--interns & attaches--}}
                <h3 class="menu-title">Interns and attaches</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-th"></i>Manage interns</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li>
                            <i class="fa fa-users"></i>
                            <a data-toggle="collapse" href="#interns" role="button" aria-expanded="false" aria-controls="interns">Interns</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i>
                            <a data-toggle="collapse" href="#attaches" role="button" aria-expanded="false" aria-controls="attaches">Attaches</a>
                        </li>
                    </ul>
                </li>
                {{--end interns & attaches--}}

                {{--End Side-Nav--}}
                <h3 class="menu-title">Reports</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
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
                </li>
                <br>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header section-->
    <header id="header" class="header text-white" style="background-color: #272c33">

        <div class="header-menu text-white">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <div class="page-header float-left" style="background-color: #272c33">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{--<i class="user-avatar rounded-circle" alt="User Avatar">--}}
                            <i class="fa fa-user fa-2x text-white"></i>
                        {{--<span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</span>--}}

                    </a>
                    <div class="user-menu dropdown-menu">
                        <h6 class="dropdown-header">Acccount</h6>
                        <a class="nav-link">{{Auth::user()->name}}<i class="fa fa-user pull-right"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="nav-link" href="#">Logout<i class="fa fa-sign-out pull-right"></i></a>
                    </div>
                </div>

                {{--<div class="language-select dropdown" id="language-select">--}}
                    {{--<a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">--}}
                        {{--<i class="flag-icon flag-icon-us"></i>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu" aria-labelledby="language" >--}}
                        {{--<div class="dropdown-item">--}}
                            {{--<span class="flag-icon flag-icon-fr"></span>--}}
                        {{--</div>--}}
                        {{--<div class="dropdown-item">--}}
                            {{--<i class="flag-icon flag-icon-es"></i>--}}
                        {{--</div>--}}
                        {{--<div class="dropdown-item">--}}
                            {{--<i class="flag-icon flag-icon-us"></i>--}}
                        {{--</div>--}}
                        {{--<div class="dropdown-item">--}}
                            {{--<i class="flag-icon flag-icon-it"></i>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        </div>

    </header><!-- /header section -->
    <!-- Header-->

    {{--<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
--}}
    {{--<script>--}}
        {{--var message = {{$response}};--}}
        {{--console.log(message);--}}
    {{--</script>--}}

<!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                {{--<form>--}}
                    <form action="{{ action('UsersController@store') }}" method="post">
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
    {{--End add user modal--}}


    {{--page content--}}
    {{--Alert on success--}}
    {{--@if(!$user->isEmpty())
    // $result is not empty
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @else
    // $result is empty
    @endif--}}
    {{--Enr alert on success--}}
    <script>
        
    </script>
    <div class="content mt-3">

        @if($response == 'success')
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Ok</span> User has been added successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        {{--@else--}}
            {{--<p>Hello world</p>--}}
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
        @endif


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
                                                    {{--<script>--}}
                                                        {{--var mydata = {{$response}};--}}
                                                        {{--if (mydata.type = null){--}}
                                                            {{--mydata.forEach(function(item){--}}
                                                                {{--document.write("<tr><td>item.id</td> <td>item.name</td> <td>item.email</td> <td>item.national_id</td> <td>item.role</td> <td>item.department</td> </tr>");--}}
                                                            {{--});--}}
                                                        {{--}--}}
                                                    {{--</script>--}}
                                                        @if(is_array($response)== false || is_string($response) == false)
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
                                                        @endif
                                                        {{--<tr>--}}
                                                            {{--<td>Gavin Joyce</td>--}}
                                                            {{--<td>Developer</td>--}}
                                                            {{--<td>Edinburgh</td>--}}
                                                            {{--<td>$92,575</td>--}}
                                                            {{--<td>Edinburgh</td>--}}
                                                            {{--<td>$92,575</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                            {{--<td>Gavin Joyce</td>--}}
                                                            {{--<td>Developer</td>--}}
                                                            {{--<td>Edinburgh</td>--}}
                                                            {{--<td>$92,575</td>--}}
                                                            {{--<td>Edinburgh</td>--}}
                                                            {{--<td>$92,575</td>--}}
                                                        {{--</tr>--}}
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
                                                    @if(is_array($response)== false || is_string($response) == false)
                                                        @foreach($response as $user)
                                                            <tr>
                                                                @if($user->department == "ICT" && $user->role != "Intern" && $user->role != "attache")
                                                                    <td>{{$user->id}}</td>
                                                                    <td>{{$user->name}}</td>
                                                                    <td>{{$user->email}} </td>
                                                                    <td>{{$user->national_id}}</td>
                                                                    <td>{{$user->role}}</td>
                                                                    <td>{{$user->department}}</td>
                                                                @endif
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    {{--<tr>--}}
                                                        {{--<td>Prescott Bartlett</td>--}}
                                                        {{--<td>Technical Author</td>--}}
                                                        {{--<td>London</td>--}}
                                                        {{--<td>$145,000</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>Donna Snider</td>--}}
                                                        {{--<td>Customer Support</td>--}}
                                                        {{--<td>New York</td>--}}
                                                        {{--<td>$112,000</td>--}}
                                                    {{--</tr>--}}
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
                                                    @if(is_array($response)== false || is_string($response) == false)
                                                        @foreach($response as $user)
                                                            @if($user->department == "Finance" && $user->role != "Intern" && $user->role != "attache")
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
                                                    @endif
                                                    {{--<tr>--}}
                                                        {{--<td>Dai Rios</td>--}}
                                                        {{--<td>Personnel Lead</td>--}}
                                                        {{--<td>Edinburgh</td>--}}
                                                        {{--<td>$217,500</td>--}}
                                                    {{--</tr>--}}
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
                                                        @if(is_array($response)== false || is_string($response) == false)
                                                            @foreach($response as $user)
                                                                <tr>
                                                                    @if($user->department == "Human-resource" && $user->role != "Intern" && $user->role != "attache")
                                                                        <td>{{$user->id}}</td>
                                                                        <td>{{$user->name}}</td>
                                                                        <td>{{$user->email}} </td>
                                                                        <td>{{$user->national_id}}</td>
                                                                        <td>{{$user->role}}</td>
                                                                        <td>{{$user->department}}</td>
                                                                    @endif
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        {{--<tr>--}}
                                                        {{--<td>Prescott Bartlett</td>--}}
                                                        {{--<td>Technical Author</td>--}}
                                                        {{--<td>London</td>--}}
                                                        {{--<td>$145,000</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>Donna Snider</td>--}}
                                                        {{--<td>Customer Support</td>--}}
                                                        {{--<td>New York</td>--}}
                                                        {{--<td>$112,000</td>--}}
                                                        {{--</tr>--}}
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
                                                        @if(is_array($response)== false || is_string($response) == false)
                                                            @foreach($response as $user)
                                                                <tr>
                                                                    @if($user->role == "Intern")
                                                                        <td>{{$user->id}}</td>
                                                                        <td>{{$user->name}}</td>
                                                                        <td>{{$user->email}} </td>
                                                                        <td>{{$user->national_id}}</td>
                                                                        <td>{{$user->role}}</td>
                                                                        <td>{{$user->department}}</td>
                                                                    @endif
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        {{--<tr>--}}
                                                        {{--<td>Prescott Bartlett</td>--}}
                                                        {{--<td>Technical Author</td>--}}
                                                        {{--<td>London</td>--}}
                                                        {{--<td>$145,000</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>Donna Snider</td>--}}
                                                        {{--<td>Customer Support</td>--}}
                                                        {{--<td>New York</td>--}}
                                                        {{--<td>$112,000</td>--}}
                                                        {{--</tr>--}}
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
                                                        @if(is_array($response)== false || is_string($response) == false)
                                                            @foreach($response as $user)
                                                                <tr>
                                                                    @if($user->role == "Attaches")
                                                                        <td>{{$user->id}}</td>
                                                                        <td>{{$user->name}}</td>
                                                                        <td>{{$user->email}} </td>
                                                                        <td>{{$user->national_id}}</td>
                                                                        <td>{{$user->role}}</td>
                                                                        <td>{{$user->department}}</td>
                                                                    @endif
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        {{--<tr>--}}
                                                        {{--<td>Prescott Bartlett</td>--}}
                                                        {{--<td>Technical Author</td>--}}
                                                        {{--<td>London</td>--}}
                                                        {{--<td>$145,000</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                        {{--<td>Donna Snider</td>--}}
                                                        {{--<td>Customer Support</td>--}}
                                                        {{--<td>New York</td>--}}
                                                        {{--<td>$112,000</td>--}}
                                                        {{--</tr>--}}
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

        {{--Dummy content--}}
        {{--<div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">10468</span>
                    </h4>
                    <p class="text-light">Members online</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart1"></canvas>
                    </div>

                </div>

            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">10468</span>
                    </h4>
                    <p class="text-light">Members online</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart2"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-3">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">10468</span>
                    </h4>
                    <p class="text-light">Members online</p>

                </div>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">10468</span>
                    </h4>
                    <p class="text-light">Members online</p>

                    <div class="chart-wrapper px-3" style="height:70px;" height="70">
                        <canvas id="widgetChart4"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-6">
            <div class="social-box facebook">
                <i class="fa fa-facebook"></i>
                <ul>
                    <li>
                        <strong><span class="count">40</span> k</strong>
                        <span>friends</span>
                    </li>
                    <li>
                        <strong><span class="count">450</span></strong>
                        <span>feeds</span>
                    </li>
                </ul>
            </div>
            <!--/social-box-->
        </div><!--/.col-->


        <div class="col-lg-3 col-md-6">
            <div class="social-box twitter">
                <i class="fa fa-twitter"></i>
                <ul>
                    <li>
                        <strong><span class="count">30</span> k</strong>
                        <span>friends</span>
                    </li>
                    <li>
                        <strong><span class="count">450</span></strong>
                        <span>tweets</span>
                    </li>
                </ul>
            </div>
            <!--/social-box-->
        </div><!--/.col-->


        <div class="col-lg-3 col-md-6">
            <div class="social-box linkedin">
                <i class="fa fa-linkedin"></i>
                <ul>
                    <li>
                        <strong><span class="count">40</span> +</strong>
                        <span>contacts</span>
                    </li>
                    <li>
                        <strong><span class="count">250</span></strong>
                        <span>feeds</span>
                    </li>
                </ul>
            </div>
            <!--/social-box-->
        </div><!--/.col-->


        <div class="col-lg-3 col-md-6">
            <div class="social-box google-plus">
                <i class="fa fa-google-plus"></i>
                <ul>
                    <li>
                        <strong><span class="count">94</span> k</strong>
                        <span>followers</span>
                    </li>
                    <li>
                        <strong><span class="count">92</span></strong>
                        <span>circles</span>
                    </li>
                </ul>
            </div>
            <!--/social-box-->
        </div><!--/.col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h4 class="card-title mb-0">Traffic</h4>
                            <div class="small text-muted">October 2017</div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-8 hidden-sm-down">
                            <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                            <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="options" id="option1"> Day
                                    </label>
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio" name="options" id="option2" checked=""> Month
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="options" id="option3"> Year
                                    </label>
                                </div>
                            </div>
                        </div><!--/.col-->


                    </div><!--/.row-->
                    <div class="chart-wrapper mt-4" >
                        <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                    </div>

                </div>
                <div class="card-footer">
                    <ul>
                        <li>
                            <div class="text-muted">Visits</div>
                            <strong>29.703 Users (40%)</strong>
                            <div class="progress progress-xs mt-2" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="hidden-sm-down">
                            <div class="text-muted">Unique</div>
                            <strong>24.093 Users (20%)</strong>
                            <div class="progress progress-xs mt-2" style="height: 5px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li>
                            <div class="text-muted">Pageviews</div>
                            <strong>78.706 Views (60%)</strong>
                            <div class="progress progress-xs mt-2" style="height: 5px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="hidden-sm-down">
                            <div class="text-muted">New Users</div>
                            <strong>22.123 Users (80%)</strong>
                            <div class="progress progress-xs mt-2" style="height: 5px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        <li class="hidden-sm-down">
                            <div class="text-muted">Bounce Rate</div>
                            <strong>40.15%</strong>
                            <div class="progress progress-xs mt-2" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <section class="card">
                <div class="twt-feed blue-bg">
                    <div class="corner-ribon black-ribon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="fa fa-twitter wtt-mark"></div>

                    <div class="media">
                        <a href="#">
                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                        </a>
                        <div class="media-body">
                            <h2 class="text-white display-6">Jim Doe</h2>
                            <p class="text-light">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="weather-category twt-category">
                    <ul>
                        <li class="active">
                            <h5>750</h5>
                            Tweets
                        </li>
                        <li>
                            <h5>865</h5>
                            Following
                        </li>
                        <li>
                            <h5>3645</h5>
                            Followers
                        </li>
                    </ul>
                </div>
                <div class="twt-write col-sm-12">
                    <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                </div>
                <footer class="twt-footer">
                    <a href="#"><i class="fa fa-camera"></i></a>
                    <a href="#"><i class="fa fa-map-marker"></i></a>
                    New Castle, UK
                    <span class="pull-right">
                            32
                        </span>
                </footer>
            </section>
        </div>


        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Total Profit</div>
                            <div class="stat-digit">1,012</div>
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
                            <div class="stat-text">New Customer</div>
                            <div class="stat-digit">961</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Active Projects</div>
                            <div class="stat-digit">770</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card" >
                <div class="card-header">
                    <h4>World</h4>
                </div>
                <div class="Vector-map-js">
                    <div id="vmap" class="vmap" style="height: 265px;"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>--}}
    {{--End dummy content--}}

    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<script src="{{mix('js/app.js')}}" ></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>

<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>

</body>
</html>
