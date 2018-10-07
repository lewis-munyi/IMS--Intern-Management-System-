@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Application details</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form method="POST" action="{{route('apply')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <fieldset class="scheduler-border" >
                                    <legend class="scheduler-border">Personal details</legend>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" >
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-4 ">
                                            <div class="form-group">
                                                <label for="id_no">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="name@site.domain" >
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-2">
                                            <div class="form-group">
                                                <label for="id_no">ID. Number</label>
                                                <input type="number" class="form-control" id="id_no" name="id_no" placeholder="123456" >
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-2">
                                            <div class="form-group">
                                                <label for="id_no">Copy of ID/Passport</label>
                                                <input type="file" class="form-control" id="id_file" name="national_id" placeholder="Upload Scan" >
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">School documents</legend>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col col-sm-12 col-lg-3 ">
                                            <div class="form-group">
                                                <label for="principle">KCSE Certificate</label>
                                                <input type="file" class="form-control" id="kcse" name="KCSE_certificate" placeholder="Upload scan" >
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-3 ">
                                            <div class="form-group">
                                                <label for="serial_no">Transcripts</label>
                                                <input type="file" class="form-control" id="transcripts" name="transcript" placeholder="Upload scan" >
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-3">
                                            <div class="form-group">
                                                <label for="insurance">Letter from Institution</label>
                                                <input type="file" class="form-control" id="introduction" name="introduction_letter" placeholder="Upload scan" >
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-3 ">
                                            <div class="form-group">
                                                <label for="principle">Supervisor's Email</label>
                                                <input type="email" class="form-control" id="supervisor" name="supervisor" placeholder="supervisor@site.domain" >
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">Documents</legend>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="application">Application Letter</label>
                                                <input type="file" class="form-control" id="application" name="application_letter" placeholder="Upload scan" >
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-4 ">
                                            <div class="form-group">
                                                <label for="serial_no">Certificate of conduct</label>
                                                <input type="file" class="form-control" id="conduct" name="certificate_of_conduct" placeholder="Upload scan" >
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="insurance">Insurance</label>
                                                <input type="file" class="form-control" id="insurance" name="insurance" placeholder="Upload scan" >
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row d-flex justify-content-center mt-3">
                                    <button class="btn btn-dark btn-success" value="submit" type="submit">Submit</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection