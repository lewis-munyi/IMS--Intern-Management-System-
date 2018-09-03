@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        {{--Custon--}}
                        {{--<div class="form-group{{ $errors->has('national_id') ? ' has-error' : '' }}">
                            <label for="national_id" class="col-md-4 control-label">ID/Passport number</label>

                            <div class="col-md-6">
                                <input id="national_id" type="number" class="form-control" name="national_id" value="{{ old('national_id') }}" required autofocus>

                                @if ($errors->has('national_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('national_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                <label for="role"  class="col-md-4 control-label">Role</label>
                            <div class="col-md-6">
                                <select class="custom-select custom-select-lg mb-3" name="role" id="role" required autofocus>
                                    <option selected>Choose access level</option>
                                    <option value="Intern">Intern</option>
                                    <option value="Attache">Attache</option>
                                </select>
                            </div>
                               @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department"class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <select class="custom-select custom-select-lg mb-3" name="department" id="department" required autofocus>
                                    <option selected>Choose department</option>
                                    <option value="ICT">ICT</option>
                                    <option value="Human-resource">Human Resource</option>
                                    <option value="Finance">Finance</option>
                                </select>
                            </div>
                            @if ($errors->has('department'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status"class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <select class="custom-select custom-select-lg mb-3" name="status" id="status" required autofocus>
                                    <option value="ongoing" selected>Ongoing</option>
                                </select>
                            </div>
                            @if ($errors->has('status'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>--}}
                        {{--end custom--}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
