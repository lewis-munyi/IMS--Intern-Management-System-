<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo asset('assets/css/normalize.css');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/themify-icons.css');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/flag-icon.min.css');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/cs-skin-elastic.css');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/css/bootstrap-select.less');?>">
    <link rel="stylesheet" href="<?php echo asset('assets/scss/style.css');?>">
    <link href="<?php echo asset('assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet');?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- put own logos here -->
                <a class="navbar-brand" href="./"><img src="images/addown.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Intern Dashboard </a>
                    </li>
                    <h3 class="menu-title">Reports</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa ti-agenda"></i>Weekly Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa ti-calendar"></i><a href="#">Week 1</a></li>
                            <li><i class="fa ti-calendar"></i><a href="#">Week 2</a></li>
                            <li><i class="fa ti-calendar"></i><a href="#">Week 3</a></li>
                            <li><i class="fa ti-calendar"></i><a href="#">Week 4</a></li>
                            <li><i class="fa ti-calendar"></i><a href="#">Week 5</a></li>
                            <li><i class="fa ti-calendar"></i><a href="#">Week 6</a></li>
                            <li><i class="fa ti-calendar"></i><a href="#">Week 7</a></li>
                            <li><i class="fa ti-calendar"></i><a href="#">Week 8</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa ti-agenda"></i>Supervisor Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa ti-calendar"></i><a href="#">Week 1</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 2</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 3</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 4</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 5</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 6</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 7</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 8</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa ti-agenda"></i>Institution Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa ti-calendar"></i><a href="#">Week 1</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 2</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 3</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 4</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 5</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 6</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 7</a></li>
                                <li><i class="fa ti-calendar"></i><a href="#">Week 8</a></li>
                        </ul>
                    </li>
                    
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Supervisor reviewed week 1 report.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-info"></i>
                                <p>Supervisor reviewed week 2 report.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Supervisor reviewed week 3 report.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
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
                        <ol class="breadcrumb text-right">
                            <li class="active">Overview</li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully entered week 2 progress.
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
                                        <a class="dropdown-item" href="#">View Reports</a>
                                        <a class="dropdown-item" href="#">Add New Report</a>
                                        <a class="dropdown-item" href="#">Edit Report</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">6</span>
                            </h4>
                            <p class="text-light">Reports Done</p>
    
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
                                        <a class="dropdown-item" href="#">View Reports</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">2</span>
                            </h4>
                            <p class="text-light">Reports Reviewed</p>
    
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
                                        <a class="dropdown-item" href="#">View Reviews</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">2</span>
                            </h4>
                            <p class="text-light">Institution Reviews</p>
    
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
                                            <a class="dropdown-item" href="#">View Supervisors</a>
                                            <a class="dropdown-item" href="#">Request Supervisors</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="count">3</span>
                            </h4>
                            <p class="text-light">Supervisors</p>
    
                            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                                <canvas id="widgetChart4"></canvas>
                            </div>
    
                        </div>
                    </div>
                </div>
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Week</th>
                        <th>Progress</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Week 1</td>
                        <td><?php echo $progress->week_1;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>Week 2</td>
                        <td><?php echo $progress->week_2;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 3</td>
                        <td><?php echo $progress->week_3;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 4</td>
                        <td><?php echo $progress->week_4;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 5</td>
                        <td><?php echo $progress->week_5;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>Week 6</td>
                        <td><?php echo $progress->week_6;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 7</td>
                        <td><?php echo $progress->week_7;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 8</td>
                        <td><?php echo $progress->week_8;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 9</td>
                        <td><?php echo $progress->week_9;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 10</td>
                        <td><?php echo $progress->week_10;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 11</td>
                        <td><?php echo $progress->week_11;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Week 12</td>
                        <td><?php echo $progress->week_12;?></td>
                        <td><?php echo $progress->status;?></td>
                        <td></td>
                      </tr>
                      
                    </tbody>
                  </table>

                  <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                    Small
                </button>
                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Small Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- input form for entering new report  -->
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">New Report</strong>
                                </div>
                                <div class="card-body">
                                  <!-- Credit Card -->
                                  <div id="pay-invoice">
                                      <div class="card-body">
                                          <div class="card-title">
                                              <h3 class="text-center">Create New Report</h3>
                                          </div>
                                          <hr>
                                          <form action="<?php echo route('intern.edit', $progress->id);?>" method="GET" novalidate="novalidate">
                                              
                                            <?php echo csrf_field(); echo  "\n";?>
                                            <?php echo method_field('PATCH'); echo  "\n";?>
                                              <div class="form-group">
                                                  <label for="cc-payment" class="control-label mb-1">Week</label>
                                                      <select name="week" id="week" class="form-control" onchange="myFunction()">
                                                          <option value="0">Please select</option>
                                                          <option value="1">Week 1</option>
                                                          <option value="2">Week 2</option>
                                                          <option value="3">Week 3</option>
                                                          <option value="4">Week 4</option>
                                                          <option value="5">Week 5</option>
                                                          <option value="6">Week 6</option>
                                                          <option value="7">Week 7</option>
                                                          <option value="8">Week 8</option>
                                                          <option value="9">Week 9</option>
                                                          <option value="10">Week 10</option>
                                                          <option value="11">Week 11</option>
                                                          <option value="12">Week 12</option>
                                                      </select>
                                               </div>
                                              
                                              <div class="form-group ">
                                                  <label for="cc-name" class="control-label mb-1">Report</label>
                                                  <textarea name="value" id="value" rows="9" placeholder="Content..." class="form-control"></textarea>
                                              </div>
                                              
                                              <div>
                                                  <!-- <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                      <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                      <span id="payment-button-amount">Submit Report</span>
                                                      <span id="payment-button-sending" style="display:none;">Submitting…</span>
                                                  </button> -->
                                                  <input type="submit" class= "btn btn-primary" value = "Edit"/>

                                              </div>
                                          </form>
                                      </div>
                                  </div>
        
                                </div>
                            </div> <!-- .card -->
        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>



                

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo asset('assets/js/vendor/jquery-2.1.4.min.js');?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo asset('assets/js/plugins.js');?>"></script>
    <script src="<?php echo asset('assets/js/main.js');?>"></script>


    <script src="<?php echo asset('assets/js/lib/chart-js/Chart.bundle.js');?>"></script>
    <script src="<?php echo asset('assets/js/dashboard.js');?>"></script>
    <script src="<?php echo asset('assets/js/widgets.js');?>"></script>
    <script src="<?php echo asset('assets/js/lib/vector-map/jquery.vmap.js');?>"></script>
    <script src="<?php echo asset('assets/js/lib/vector-map/jquery.vmap.min.js');?>"></script>
    <script src="<?php echo asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js');?>"></script>
    <script src="<?php echo asset('assets/js/lib/vector-map/country/jquery.vmap.world.js');?>"></script>
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
    <script>
    function myFunction() {
        var x = document.getElementById("week").value;
        var progress = <?php echo json_encode($progress); ?>;
        switch (x) {
            case '1':
            document.getElementById("value")
            .value = progress.week_1;
            break;
    
            case '2':
            document.getElementById("value")
            .value = progress.week_2;
            break;
    
            case '3':
            document.getElementById("value")
            .value = progress.week_3;
            break;
    
            case '4':
            document.getElementById("value")
            .value = progress.week_4;
            break;
    
            case '5':
            document.getElementById("value")
            .value = progress.week_5;
            break;
    
            case '6':
            document.getElementById("value")
            .value = progress.week_6;
            break;
    
            case '71':
            document.getElementById("value")
            .value = progress.week_7;
            break;
    
            case '8':
            document.getElementById("value")
            .value = progress.week_8;
            break;
    
            case '9':
            document.getElementById("value")
            .value = progress.week_9;
            break;
    
            case '10':
            document.getElementById("value")
            .value = progress.week_10;
            break;
    
            case '11':
            document.getElementById("value")
            .value = progress.week_11;
            break;
    
            case '12':
            document.getElementById("value")
            .value = progress.week_12;
            break;
        
            default:
                break;
        }
        // alert(progress.week_1);
        // document.getElementById("textarea-input").value = "You selected: " + x;
    }
    </script>

</body>
</html>
