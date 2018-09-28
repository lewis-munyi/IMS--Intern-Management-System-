@extends('layouts.dashboard')
@section('page-styles')
@endsection
@section('nav-title')
    <h1>Intern!</h1>
@endsection
@section('nav-content')
    {{--<h1>Heloo world!!</h1>--}}
@endsection
@section('side-content')
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
@endsection
@section('content')
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
    </div>
@endsection
@section('page-scripts')
@endsection