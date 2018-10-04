@extends('layouts.app')

@section('content')
    <style>
        /*Fieldset Legend*/
        fieldset.scheduler-border {
            border: 1px groove #ddd !important;
            padding: 0 1.4em 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: center !important;
            width:auto;
            padding:0 10px;
            border-bottom:none;
        }
        /*End fieldset*/
    </style>
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

                            <form method="POST" action="{{route('make-application')}}" enctype="multipart/form-data>
                                @csrf
                                <fieldset class = 'scheduler-boarder'>
                                    <legend class="scheduler-border">Personal details</legend>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col col-sm-5 col-lg-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                                            </div>
                                        </div>
                                        <div class="col col-sm-5 col-lg-4 ">
                                            <div class="form-group">
                                                <label for="id_no">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="name@site.domain" required>
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-2">
                                            <div class="form-group">
                                                <label for="id_no">ID. Number</label>
                                                <input type="number" class="form-control" id="id_no" name="id_no" placeholder="123456" required>
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-2">
                                            <div class="form-group">
                                                <label for="id_no">Copy of ID/Passport</label>
                                                <input type="file" class="form-control" id="id_file" name="id_file" placeholder="Upload Scan" required>
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
                                                <input type="file" class="form-control" id="kcse" name="kcse" placeholder="Upload scan" required>
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-3 ">
                                            <div class="form-group">
                                                <label for="serial_no">Transcripts</label>
                                                <input type="file" class="form-control" id="transcripts" name="transcripts" placeholder="Upload scan" required>
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-3">
                                            <div class="form-group">
                                                <label for="insurance">Letter from Institution</label>
                                                <input type="file" class="form-control" id="introduction" name="introduction" placeholder="Upload scan" required>
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-3 ">
                                            <div class="form-group">
                                                <label for="principle">Supervisor's Email</label>
                                                <input type="email" class="form-control" id="supervisor" name="supervisor" placeholder="supervisor@site.domain" required>
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
                                                <input type="file" class="form-control" id="application" name="application" placeholder="Upload scan" required>
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-4 ">
                                            <div class="form-group">
                                                <label for="serial_no">Certificate of conduct</label>
                                                <input type="file" class="form-control" id="conduct" name="conduct" placeholder="Upload scan" required>
                                            </div>
                                        </div>
                                        <div class="col col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="insurance">Insurance</label>
                                                <input type="file" class="form-control" id="insurance" name="insurance" placeholder="Upload scan" required>
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