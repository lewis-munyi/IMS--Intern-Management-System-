@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <h4 class="card-header">Application by {{$application->name}}</h4>
    <div class="card-body">
        <button class="btn btn-primary">View Documents</button>
        <p class="card-text"> <h3>Status: <span class="badge badge-pill badge-warning em-3">{{$application->status}}</span></h3></p>
        @if($application->status == 'pending')
        <div class="row">
            <div class="col-md-1">
                <form method="post" action="/hr/applications/{{$application->id}}/accept">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <button class="btn btn-success">Accept</button>
                </form>
            </div>
            <div class="col-md-1">
                <form method="post" action="/hr/applications/{{$application->id}}/reject">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <button class="btn btn-danger">Reject</button>
                </form>
            </div>
        </div>
        @endif
    </div>
    </div>
</div>
@endsection
