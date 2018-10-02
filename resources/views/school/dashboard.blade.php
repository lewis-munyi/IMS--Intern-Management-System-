@extends('layouts.auth')

@section('form')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <span>
            <p>
                Enter your email address. All the details of the student you supervise will be sent to this email.
            </p>
        </span>
        <div class="form-group">
            <label>Email address</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">{{ __('Submit') }}</button>
    </form>
@endsection
