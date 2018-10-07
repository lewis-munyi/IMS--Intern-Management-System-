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

                            <form method="POST" class="needs-validation" action="{{route('apply')}}" enctype="multipart/form-data" novalidate>
                                {{csrf_field()}}
                                <fieldset class="scheduler-border" >
                                    <legend class="scheduler-border">Personal details</legend>
                                    <div class="row d-flex justify-content-lg-between justify-content-sm-center">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please enter your name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 ">
                                            <div class="form-group">
                                                <label for="id_no">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="name@site.domain" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please a valid email address
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="id_no">ID. Number</label>
                                                <input type="number" class="form-control" id="id_no" name="id_no" placeholder="123456" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please enter a ID or Passport number.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="principle">Supervisor's Email</label>
                                                <input type="email" class="form-control" id="supervisor" name="supervisor" placeholder="supervisor@site.domain" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Enter your supervisor's email
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">School documents</legend>
                                    <div class="row d-flex justify-content-lg-around justify-content-sm-center">
                                        <div class="col-sm-12 col-lg-5">
                                            <div class="form-group">
                                                <label for="principle" class="custom-file-label">KCSE Certificate</label>
                                                <input type="file" class="form-control custom-file-input" id="kcse" name="KCSE_certificate" placeholder="Upload  scan"  accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Upload a Scanned copy of your KCSE Certificate
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-5">
                                            <div class="form-group">
                                                <label for="serial_no" class="custom-file-label">Transcripts</label>
                                                <input type="file" class="form-control custom-file-input" id="transcripts" name="transcript" placeholder="Upload scan"  accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Upload a Scanned copy of your most recent transcript
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-5">
                                            <div class="form-group">
                                                <label for="insurance" class="custom-file-label">Letter from Institution</label>
                                                <input type="file" class="form-control custom-file-input" id="introduction" name="introduction_letter" placeholder="Upload scan"  accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Upload a Scanned copy of a letter from  the institution
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-5">
                                            <div class="form-group">
                                                <label for="id_no" class="custom-file-label">Copy of ID/Passport</label>
                                                <input type="file" class="form-control custom-file-input" id="id_file" name="national_id" placeholder="Upload scan"  accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Upload a Scanned copy of your ID/Passport
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">Documents</legend>
                                    <div class="row d-flex justify-content-lg-around justify-content-sm-center">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="application" class="custom-file-label">Application Letter</label>
                                                <input type="file" class="form-control custom-file-input" id="application" name="application_letter" placeholder="Upload scan"  accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Upload a Scanned copy of your Application Letter
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="serial_no" class="custom-file-label">Certificate of conduct</label>
                                                <input type="file" class="form-control custom-file-input" id="conduct" name="certificate_of_conduct" placeholder="Upload scan"  accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Upload a Scanned copy of your most receent certificate of conduct
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-3">
                                            <div class="form-group">
                                                <label for="insurance" class="custom-file-label">Insurance</label>
                                                <input type="file" class="form-control custom-file-input" id="insurance" name="insurance" placeholder="Upload scan"  accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Upload a Scanned copy of your insurance document.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row d-flex justify-content-center mt-3">
                                    <button class="btn btn-dark rounded" value="submit" type="submit">Submit</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection