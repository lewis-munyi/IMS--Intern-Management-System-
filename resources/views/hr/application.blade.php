@extends('layouts.app')
@section('content')
<div class="container">
    <style>
        .btn:focus, .btn:active, button:focus, button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer{
            display: block;
        }

        .thumb{
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
    <div class="card">
    <h4 class="card-header">Application by {{$application->name}}</h4>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="card pull-left">
                    <div class="card-header bg-dark text-white">
                        Details
                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item "><b>Name: </b> {{$application->name}}</li>
                        <li class="list-group-item "><b>Email: </b> {{$application->email}}</li>
                        <li class="list-group-item "><b>ID / Passport Number: </b> {{$application->id_number}}</li>
                        <li class="list-group-item "><b>Supervisor: </b> {{$application->supervisor_email}}</li>
                        <li class="list-group-item "><b>Name: </b> {{$application->name}}</li>
                        <li class="list-group-item"> <b>Date of submission: </b>{{$application->created_at}}</li>
                        @if($application->status == 'accepted')
                            <li class="list-group-item"> <b>Status: </b><span class="badge badge-pill badge-success em-4">Accepted.</span></li>
                        @elseif($application->status == 'rejected')
                            <li class="list-group-item"> <b>Status: </b><span class="badge badge-pill badge-danger em-4">Rejected</span></li>
                        @else
                            <li class="list-group-item"> <b>Status: </b><span class="badge badge-pill badge-secondary em-4">Pending</span></li>
                        @endif
                    </ul>
                </div>
            </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="card pull-right bg-secondary">
                        <div class="card-header bg-dark text-white text-center">
                            Documents
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <div class="row mr-1 ml-1">
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="ID/Passport"
                                       data-image="{{asset('files/application_documents/'.$application->national_id)}}"
                                       data-target="#image-gallery">
                                        <img class="img-thumbnail"
                                             src="{{asset('files/application_documents/'.$application->national_id)}}"
                                             alt="ID picture">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="KCSE Certificate"
                                       data-image="{{asset('files/application_documents/'.$application->KCSE_certificate)}}"
                                       data-target="#image-gallery">
                                        <img class="img-thumbnail"
                                             src="{{asset('files/application_documents/'.$application->KCSE_certificate)}}"
                                             alt="KCSE Certificate">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Transcript"
                                       data-image="{{asset('files/application_documents/'.$application->transcript)}}"
                                       data-target="#image-gallery">
                                        <img class="img-thumbnail"
                                             src="{{asset('files/application_documents/'.$application->transcript)}}"
                                             alt="Transcript">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Letter from the school"
                                       data-image="{{asset('files/application_documents/'.$application->introduction_letter)}}"
                                       data-target="#image-gallery">
                                        <img class="img-thumbnail"
                                             src="{{asset('files/application_documents/'.$application->introduction_letter)}}"
                                             alt="School Letter">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Application Letter"
                                       data-image="{{asset('files/application_documents/'.$application->application_letter)}}"
                                       data-target="#image-gallery">
                                        <img class="img-thumbnail"
                                             src="{{asset('files/application_documents/'.$application->application_letter)}}"
                                             alt="Application Letter">
                                    </a>
                                </div>



                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Certificate of conduct"
                                       data-image="{{asset('files/application_documents/'.$application->certificate_of_conduct)}}"
                                       data-target="#image-gallery">
                                        <img class="img-thumbnail"
                                             src="{{asset('files/application_documents/'.$application->certificate_of_conduct)}}"
                                             alt="Certificate Of conduct">
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Insurance"
                                       data-image="{{asset('files/application_documents/'.$application->insurance)}}"
                                       data-target="#image-gallery">
                                        <img class="img-thumbnail"
                                             src="{{asset('files/application_documents/'.$application->insurance)}}"
                                             alt="Insurance">
                                    </a>
                                </div>
                            </div>
                            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="image-gallery-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark float-left rounded" id="show-previous-image"><i class="fa fa-arrow-left text-white"></i>
                                            </button>
                                            <button type="button" id="show-next-image" class="btn btn-dark rounded float-right"><i class="fa fa-arrow-right text-white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        let modalId = $('#image-gallery');

        $(document)
            .ready(function () {

                loadGallery(true, 'a.thumbnail');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image')
                        .show();
                    if (counter_max === counter_current) {
                        $('#show-next-image')
                            .hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image')
                            .hide();
                    }
                }

                /**
                 *
                 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
                 * @param setClickAttr  Sets the attribute for the click handler.
                 */

                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image')
                        .click(function () {
                            if ($(this)
                                .attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }

                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                    function updateGallery(selector) {
                        let $sel = selector;
                        current_image = $sel.data('image-id');
                        $('#image-gallery-title')
                            .text($sel.data('title'));
                        $('#image-gallery-image')
                            .attr('src', $sel.data('image'));
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]')
                            .each(function () {
                                counter++;
                                $(this)
                                    .attr('data-image-id', counter);
                            });
                    }
                    $(setClickAttr)
                        .on('click', function () {
                            updateGallery($(this));
                        });
                }
            });

        // build key actions
        $(document)
            .keydown(function (e) {
                switch (e.which) {
                    case 37: // left
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image')
                                .click();
                        }
                        break;

                    case 39: // right
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                            $('#show-next-image')
                                .click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });
    </script>

</div>
@endsection
