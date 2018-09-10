<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard: {{ env('APP_NAME') }} </title>
    <meta name="description" content="env('APP_NAME')">
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

<div class="modal-content">
            <form action="{{ action('UsersController@store') }}" method="post">
                    {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalTitle">Apply here</h5>
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
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Full Name">
                            <small id="nameHelp" class="form-text text-muted">Enter your full name. </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="national_id">ID Number</label>
                            <input type="number" class="form-control" id="national_id" name="national_id" aria-describedby="IdHelp" placeholder="12345667889">
                            <small id="idHelp" class="form-text text-muted">Enter your national ID or passport number</small>
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select class="custom-select custom-select-lg mb-3" id="department" name="department">
                                <option selected>Choose department</option>
                                <option value="ICT">ICT</option>
                                <option value="Human-resource">Human Resource</option>
                                <option value="Finance">Finance</option>
                                <option value="Finance">Procurement</option>
                            </select>
                        </div>

                       

                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary rounded">Save changes</button>
                </div>
                </form>
            </div>


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