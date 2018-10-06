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
    <div class="container-fluid">
        {{--Snackbar--}}
            <div id="snackbar"></div>
        {{--end snackbar--}}
        {{--Modal--}}
        <div class="modal fade" id="editProgress" tabindex="-1" role="dialog" aria-labelledby="Edit Modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form method="POST" onsubmit="return false;" v-on:submit="sendData()">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Progress</h5>
                            <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="spinner" style="display: none">
                                <div class="spinner">
                                    <div class="rect1"></div>
                                    <div class="rect2"></div>
                                    <div class="rect3"></div>
                                    <div class="rect4"></div>
                                    <div class="rect5"></div>
                                </div>
                            </div>
                            <div id="outside">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="weeks">Week No.</label>
                                            <select class="custom-select mr-sm-2" id="week" v:model="week">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="6">Six</option>
                                                <option value="7">Seven</option>
                                                <option value="8">Eight</option>
                                                <option value="9">Nine</option>
                                                <option value="10">Ten</option>
                                                <option value="11">Eleven</option>
                                                <option value="12">Twelve</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="form-group form-check">
                                            <label class="form-check-label" for="log">Enter content</label>
                                            <textarea class="form-control" rows="5" id="log" v:model="log"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button  v-on:click="sendData();" class="btn btn-primary rounded" id ="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{--End Modal--}}

        <div class="card">
            <div class="card-header d-flex justify-content-center" id="headingTwo">
                <h5 class="mb-0">
                    <a class="display-4  collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Progress
                    </a>
                </h5>
            </div>
                <div class="card-body">
                    <table class="table table-bordered d-flex justify-content-center" id="logTable">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-center mb-3">
                                <a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#editProgress">Edit</a>
                            </div>
                        </div>
                        <div id="progress">

                        <tr>
                            <th>Week</th>
                            <th>Work put in</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi dicta error
                                    facere rem. Accusantium autem commodi dolorem dolores, earum eius eum harum, impedit
                                    ipsa minus, quidem sed similique tempore!
                                </div>
                                <div>Ad, assumenda, consequatur debitis dignissimos distinctio doloremque ducimus enim
                                    et, eum fugiat impedit in itaque iure laborum minima minus modi nam nesciunt nihil
                                    praesentium quae quasi quo sequi sint voluptatibus.
                                </div>
                                <div>Aperiam deleniti earum sed. Accusamus cumque debitis deleniti deserunt dignissimos
                                    eos est in ipsum, minus nisi officiis quam quos reprehenderit sapiente ut.
                                    Exercitationem expedita, nesciunt nihil perferendis quasi recusandae vero.
                                </div>
                                <div>Cumque dignissimos error iure, iusto laboriosam, minima necessitatibus, odio
                                    perferendis possimus quae quas soluta sunt vitae. Atque doloribus dolorum, error
                                    expedita laudantium magnam nisi, omnis placeat quas quidem voluptatem voluptates.
                                </div>
                                <div>Aliquam at deserunt dolor enim saepe sit temporibus! Ea laudantium nesciunt nisi
                                    voluptatibus. Aspernatur cumque deserunt fugit hic ipsum itaque natus nobis porro
                                    quas quos rem, voluptas voluptate voluptatem? Unde.
                                </div></td>
                            <td>Approved</td>
                            {{--<tr v-for="progress in progresses">--}}
                                {{--<td>@{{progress.week}}</td>--}}
                                {{--<td>@{{progress.work}}</td>--}}
                                {{--<td>@{{progress.status}}</td>--}}
                            {{--</tr>--}}
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-scripts')
    <script type="text/javascript">
        // Vue
        var showProgress = new Vue({
            el: '#editProgress',
            data: {
                url: "",
                params: {
                    'week' : null,
                    'log': null
                }
            },
            mounted(){
                this.test();
                            },
            methods: {
                test: function(){
                    console.log('Mounted');
                },
                axiosPost:  function(url, params){
                    var snackbar = document.getElementById('snackbar');
                    document.getElementById('outside').style.display="none";
                    document.getElementById('spinner').style.display="block";
                    document.getElementById('submit').setAttribute("disabled", true);
                    axios.post(url, params)
                        .then(function (response) {
                            // console.log(response);
                            document.getElementById("week").value = "";
                            document.getElementById("log").value = "";
                            document.getElementById('spinner').style.display="none";
                            document.getElementById('outside').style.display="block";
                            document.getElementById('submit').disabled = false;
                            snackbar.innerHTML = "Successfully logged activity";
                            snackbar.classList.add('show');
                            setTimeout(()=>{
                                snackbar.classList.remove('show');
                            }, 3000)
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                },
                axoisGet: function(url, params){
                    axios.get(url, {
                        params: {
                            ID: 12345
                            }
                        })
                        .then(function (response) {
                            console.log(response);
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                        .then(function () {
                            // always executed
                        });
                },
                sendData: function(){
                    this.params.week = document.getElementById('week').value;
                    this.params.log = document.getElementById('log').value;
                    url = "{{route('submitProgress')}}";
                    this.axiosPost(url, this.params);
                }
            }
        });

        // Tables vue
        var updateTables = new Vue({
            el: '#logTable',
            data: {
                // function(){
                //     return {
                //         url: "",
                //         receivedLogs: []
                //     }
                // }
                receivedLogs: [
                    {"id":1,"user_id":1,"week":3,"log":"23456","created_at":"2018-10-06 13:48:28","updated_at":"2018-10-06 13:48:28"},
                    {"id":2,"user_id":1,"week":3,"log":"23456","created_at":"2018-10-06 13:48:29","updated_at":"2018-10-06 13:48:29"}
                ]
            },
            mounted(){
                this.fetchData();
            },
            methods: {
                axiosGet: function(url){
                    var data = null;
                    axios.get(url)
                        .then(function (response) {
                        // console.log(response.data);

                        // this.receivedLogs = response.data;
                        console.log(response.data);
                        setTimeout(()=>{
                            this.receivedLogs =  toString(response.data);
                        }, 3000);
                        // for(var i = 0; i < response.data.length; i++){
                        //     console.warn(response.data[i]);
                        //     this.receivedLogs.i = response.data[i];
                        // }
                            // setTimeout(()=>{
                            //     $('#table').bootstrapTable({
                            //         url: url,
                            //         columns: [{
                            //             field: 'week',
                            //             title: 'Week'
                            //         }, {
                            //             field: 'log',
                            //             title: 'Activity Log'
                            //         }, {
                            //             field: 'created_at',
                            //             title: 'Created at'
                            //         }, ]
                            //     });
                            // }, 5000);

                            // var table = document.getElementById('logTable');
                            // console.warn("Logging");
                            // var tr = document.createElement("tr");
                            // var week = document.createElement("th");
                            // var work = document.createElement("th");
                            // var status = document.createElement("th");
                            // var weekTxt = document.createTextNode('Week');
                            // var workTxt = document.createTextNode('Log');
                            // var statusTxt = document.createTextNode('Status');
                            // week.appendChild(weekTxt);
                            // work.appendChild(workTxt);
                            // status.appendChild(statusTxt);
                            // tr.appendChild(week);
                            // tr.appendChild(work);
                            // tr.appendChild(status);
                            // table.appendChild(tr);
                            // for(var i = 0; i < response.data.length; i++){
                            //     // console.log(response.data[i].week);
                            //     var tr = document.createElement("tr");
                            //     var week = document.createElement("td");
                            //     var work = document.createElement("td");
                            //     var status = document.createElement("td");
                            //     var weekTxt = document.createTextNode(logs[i].week);
                            //     var workTxt = document.createTextNode(logs[i].log);
                            //     var statusTxt = document.createTextNode('Pending');
                            //     //
                            //     week.appendChild(weekTxt);
                            //     work.appendChild(workTxt);
                            //     status.appendChild(statusTxt);
                            //     tr.appendChild(week);
                            //     tr.appendChild(work);
                            //     tr.appendChild(status);
                            //     table.appendChild(tr);
                                // table.innerHTML = "<tr><th>'week'</th><th>'Log'</th><th>'Status'</th></tr>";
                                // table.innerHTML = "<tr><td>'week 1'</td><td>'Lewis Munyi'</td><td>'Approved'</td></tr>";
                            // }
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                        .then(function () {
                            // always executed
                        });
                },
                fetchData: function(){
                    url = "{{route('getLogs')}}";
                    this.axiosGet(url);
                }
            }
        });
    </script>
@endsection