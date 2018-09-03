@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
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
                                    <input type="password" class="form-control" id="password1" name="password" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="password2">Confirm Password</label>
                                    <Span id="passwordSpan"></Span>
                                    <input type="password2" class="form-control" id="password2" name="password2" onblur="check();" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="custom-select custom-select-lg mb-3" name="role" id="role">
                                        <option selected>Choose access level</option>
                                        <option value="Intern">Intern</option>
                                        <option value="Attache">Attache</option>
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
                                <button type="submit" class="btn btn-primary rounded" id="btnRegister">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection