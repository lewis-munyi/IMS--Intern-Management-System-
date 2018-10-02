@extends('layouts.auth')

@section('form')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label>Email address</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <label>Password</label>
            {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <div class="form-group row mb-0 mt-0">
                <div class="col-md-4 offset-md-2">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">{{ __('Login') }}</button>
        <div class="register-link m-t-15 text-center">
        <p>Don't have account ? <a href="{{route('register')}}"> Sign Up Here</a></p>
        </div>
    </form>
@endsection
