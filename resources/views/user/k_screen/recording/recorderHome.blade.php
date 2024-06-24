@extends('layouts.user')
@section('title', 'Kunnec Screen')
@section('content')
<style>
    .tutorLike{
        font-size: 20px;
    }
</style>
@include('user.k_screen.recording.recordFilters')

<div class="card">
    <div class="card-body">
        <div>
            <p class=" text-center" style="color: #009900">
                <strong>New Tutors</strong>
            </p>
        </div>
        {{-- New Tutors --}}
        <div class="card-deck">
            @if($new_tutors)
                @include("user.k_screen.recording.tutorRecordCard",['recorders'=>$new_tutors])
            @endif
        </div>
        </br>
        <div>
            <p class=" text-center" style="color: #009900">
                <strong>New Recorders</strong>
            </p>
        </div>
        <div class="card-deck">
            @if($new_recorders)
                @include("user.k_screen.recording.tutorRecordCard",['recorders'=>$new_recorders])
            @endif
        </div>
        </br>
        <div>
            <p class=" text-center" style="color: #009900">
                <strong>Top Rated Tutors</strong>
            </p>
        </div>
        <div class="card-deck">
            @if($top_tutors)
                @include("user.k_screen.recording.tutorRecordCard",['recorders'=>$top_tutors])
            @endif
        </div>
        </br>
        <div>
            <p class=" text-center" style="color: #009900">
                <strong>Top Rated Recorders</strong>
            </p>
        </div>
        <div class="card-deck">
            @if($top_recorders)
                @include("user.k_screen.recording.tutorRecordCard",['recorders'=>$top_recorders])
            @endif
        </div>
        </br>
        {{-- <div>
            <p class=" text-center" style="color: #009900"><strong>Trending Tutors</p>
        </div>
        <div class="card-deck">
            <div class="card">
                <div class="card-img-top"><span
                        class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span>
                </div><img class="img-fluid" src="{{ asset('public/user-dash/k_screen/recordings/7.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h6 class="fs-9"><strong><a href="{{ url('k_screen/recording/record_details') }}"
                                style="font-size: 1.0rem; color: #009900;">Learning photoshop the easy way. CSS/
                                Mamp</a></strong></h6>
                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/21.jpg')}}"
                                alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">Lea</h5>
                        </div>
                    </div>
                    <p class="fs--1 mb-1">Credits FLAT-FEE: <strong class="text-danger">96</strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(18)</span>
                    </div>
                    <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip"
                            data-placement="top" title="Save Recorder"><span class="far fa-heart"></span></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-img-top"><span
                        class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span>
                </div><img class="img-fluid" src="{{ asset('public/user-dash/k_screen/recordings/8.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h6 class="fs-9"><strong><a href="{{ url('k_screen/recording/record_details') }}"
                                style="font-size: 1.0rem; color: #009900;">Apple MacBook Pro (15&quot; Retina, Touch
                                Bar, 2.2GHz </a></strong></h6>
                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}"
                                alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">Sabrina</h5>
                        </div>
                    </div>
                    <p class="fs--1 mb-1">Credits per 15 mins.: <strong class="text-danger">125</strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(20)</span>
                    </div>
                    <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip"
                            data-placement="top" title="Save Recorder"><span class="far fa-heart"></span></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-img-top"><span
                        class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span>
                </div><img class="img-fluid" src="{{ asset('public/user-dash/k_screen/recordings/9.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h6 class="fs-9"><strong><a href="{{ url('k_screen/recording/record_details') }}"
                                style="font-size: 1.0rem; color: #009900;">Learning photoshop the easy way. CSS/
                                Mamp</a></strong></h6>
                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/19.jpg')}}"
                                alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">Mike</h5>
                        </div>
                    </div>
                    <p class="fs--1 mb-1">Credits per hr.: <strong class="text-danger">65</strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(18)</span>
                    </div>
                    <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip"
                            data-placement="top" title="Save Recorder"><span class="far fa-heart"></span></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-img-top"><span
                        class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span>
                </div><img class="img-fluid" src="{{ asset('public/user-dash/k_screen/recordings/3.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h6 class="fs-9"><strong><a href="{{ url('k_screen/recording/record_details') }}"
                                style="font-size: 1.0rem; color: #009900;">Photoshop CS4 training</a></strong></h6>
                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}"
                                alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">Shirl</h5>
                        </div>
                    </div>
                    <p class="fs--1 mb-1">Credits per min.: <strong class="text-danger">46</strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(29)</span>
                    </div>
                    <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip"
                            data-placement="top" title="Save Recorder"><span class="far fa-heart"></span></a>
                    </div>
                </div>
            </div>
        </div>
        </br>
        <div>
            <p class=" text-center" style="color: #009900"><strong>Trending Recorders</p>
        </div>
        <div class="card-deck">
            <div class="card">
                <div class="card-img-top"><span
                        class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span>
                </div><img class="img-fluid" src="{{ asset('public/user-dash/k_screen/recordings/7.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h6 class="fs-9"><strong><a href="{{ url('k_screen/recording/record_details') }}"
                                style="font-size: 1.0rem; color: #009900;">Learning photoshop the easy way. CSS/
                                Mamp</a></strong></h6>
                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/21.jpg')}}"
                                alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">Lea</h5>
                        </div>
                    </div>
                    <p class="fs--1 mb-1">Credits FLAT-FEE: <strong class="text-danger">96</strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(18)</span>
                    </div>
                    <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip"
                            data-placement="top" title="Save Recorder"><span class="far fa-heart"></span></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-img-top"><span
                        class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span>
                </div><img class="img-fluid" src="{{ asset('public/user-dash/k_screen/recordings/8.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h6 class="fs-9"><strong><a href="{{ url('k_screen/recording/record_details') }}"
                                style="font-size: 1.0rem; color: #009900;">Apple MacBook Pro (15&quot; Retina, Touch
                                Bar, 2.2GHz </a></strong></h6>
                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}"
                                alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">Sabrina</h5>
                        </div>
                    </div>
                    <p class="fs--1 mb-1">Credits per 15 mins.: <strong class="text-danger">125</strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(20)</span>
                    </div>
                    <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip"
                            data-placement="top" title="Save Recorder"><span class="far fa-heart"></span></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-img-top"><span
                        class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span>
                </div><img class="img-fluid" src="{{ asset('public/user-dash/k_screen/recordings/9.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h6 class="fs-9"><strong><a href="{{ url('k_screen/recording/record_details') }}"
                                style="font-size: 1.0rem; color: #009900;">Learning photoshop the easy way. CSS/
                                Mamp</a></strong></h6>
                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/19.jpg')}}"
                                alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">Mike</h5>
                        </div>
                    </div>
                    <p class="fs--1 mb-1">Credits per hr.: <strong class="text-danger">65</strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(18)</span>
                    </div>
                    <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip"
                            data-placement="top" title="Save Recorder"><span class="far fa-heart"></span></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-img-top"><span
                        class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">Trending</span>
                </div><img class="img-fluid" src="{{ asset('public/user-dash/k_screen/recordings/3.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h6 class="fs-9"><strong><a href="{{ url('k_screen/recording/record_details') }}"
                                style="font-size: 1.0rem; color: #009900;">Photoshop CS4 training</a></strong></h6>
                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Excel &amp; Access</a></p>
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}"
                                alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">Shirl</h5>
                        </div>
                    </div>
                    <p class="fs--1 mb-1">Credits per min.: <strong class="text-danger">46</strong></p>
                </div>
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(29)</span>
                    </div>
                    <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip"
                            data-placement="top" title="Save Recorder"><span class="far fa-heart"></span></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
@section('additional-js')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', '.tutorLike', function(e) {
            e.preventDefault();
            var currObj=$(this);
            currObj.prop('disabled', true);
            var recorder_id=$(this).attr('data-id');
            var url="{{ route('krecords.like') }}";
            if(url){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : url,
                    method: 'POST',
                    data: {'recorder_id':recorder_id},
                }).done(function (data){
                    if(currObj.children('svg').attr('data-prefix')=='fa'){
                        currObj.html('<i class="ace-icon far fa-heart"></i>');
                    }else{
                        currObj.html('<i class="ace-icon fa fa-heart"></i>');
                    }
                    currObj.prop('disabled', false);
                    console.log(data);
                }).fail(function () {
                    window.href="";
                }); 
            }
        });
    });
</script>
@endsection