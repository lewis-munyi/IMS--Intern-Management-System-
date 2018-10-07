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
        {{--Modal--}}
        <div class="modal fade" id="editProgress" tabindex="-1" role="dialog" aria-labelledby="Edit Modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
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
                <table class="table table-bordered d-flex justify-content-center">
                    <div id="progress">

                        <tr>
                            <th>Week</th>
                            <th>Work put in</th>
                            <th>Status</th>
                            <th>-</th>
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
                            <td>
                                <a href="#" class="btn btn-primary rounded" data-toggle="modal" v-on:click="axiosPost('Hello there', 'x')" data-target="#">Edit</a>
                            </td>
                        <tr v-for="progress in progresses">
                            <td>@{{progress.week}}</td>
                            <td>@{{progress.work}}</td>
                            <td>@{{progress.status}}</td>
                            <td>
                                <a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#editProgress">Edit</a>
                            </td>
                        </tr>
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
            el: '#progress',
            data: function() {
                return {
                    progresses: [

                        // {'serial': '1', 'name': 'x', 'id_no':' Too', 'admission': '2435', 'university': '88843935656', 'product': '20', 'academic_year': '3', 'principal':'3000', 'running_balance' : '50'}
                    ]
                }
            },
            mounted(){
                // this.loadDataFromAPI();
                // console.log("Hello mounted!");
                this.axiosPost();
            },
            methods: {
                axiosPost:  function(url, params){
                    console.log(this.progresses);
                    this.progresses = "{'week': 2,'work': 'Heloooooo World!!!!!!!!!','status': 'hapo tu'}"
                    console.log(this.progresses);
                },
                axoisGet: function(url, params){

                },
                // loadDataFromAPI: function(){
                //     var self = this;
                //     console.log(this.product);
                //     console.log(this.from);
                //     console.log(this.to);
                //     ///get the data from the server/api
                //     axios.get('url', {
                //         params: {
                //             'from': this.from,
                //             'to': this.to,
                //             'product': this.product
                //         }
                //     })
                //         .then(function (response) {
                //             // handle success
                //             self.loans = JSON.parse(response.data);
                //             console.error("Self loans ni" + JSON.parse(self.loans));
                //
                //         })
                //         .catch(function (error) {
                //             // handle error
                //             console.log("error" + error);
                //         })
                //         .then(function () {
                //             // always executed
                //             console.log("exiting...");
                //             console.error("Self loans 2 ni" + self.loans);
                //         });
                // }
            }
        });
    </script>
@endsection