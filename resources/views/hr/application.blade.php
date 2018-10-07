@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    <h4 class="card-header">Application by {{$application->name}}</h4>
    <div class="card-body">
        
        <a href='/hr/applications/{{$application->id}}/documents' class="btn btn-primary">View Documents</a>
        <p class="card-text"> <h3>Status: <span class="badge badge-pill badge-warning em-3">{{$application->status}}</span></h3></p>
        @if($application->status == 'pending')
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <form method="post" action="/hr/applications/{{$application->id}}/reject" class="mr-1">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <button class="btn btn-danger rounded">Reject</button>
                </form>
                <form method="post" action="/hr/applications/{{$application->id}}/accept" class="ml-1">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <button class="btn btn-success rounded">Accept</button>
                </form>
            </div>
        </div>
        @endif
    </div>
    </div>
</div>
@endsection
