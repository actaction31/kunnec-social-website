@extends('layouts.user')
@section('title', 'Event Create')
@section('additional-css')
@endsection
@section('content')
<div class="card mb-3">
    <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
        <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40" width="60" />
            Add Events</h5>
        {{-- <div class="col-sm d-flex flex-row-reverse">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse"
                    data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span
                        class="fa fa-sliders-h text-success"></span>
                </button>
            </p>
        </div> --}}
    </div>
    {{-- <div class="collapse" id="collapseSort1" style="background-color:#009900;">
        @include('user.events.eventFilters')
    </div> --}}
</div>

{!! Form::open(['route'=>['events.createEvent',['event_id'=>$event->id]],'files' => true]) !!}
<!-- <form method="POST" action="{{route('events.createEvent')}}" enctype="multipart/form-data"> -->
@csrf
@if(session()->has('success'))
<div class="row justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-success">
            <strong>{{ session('success') }}</strong>
        </div>
    </div>
</div>
@endif
@if(session()->has('error'))
<div class="row justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-danger">
            <strong>{{ session('error') }}</strong>
        </div>
    </div>
</div>
@endif

@if($errors->any())
<div class="alert alert-dismissible alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@endif
<div class="row no-gutters">
    <div class="col-lg-8 pr-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Event Details</h5>
            </div>
            <div class="card-body bg-light">
                <div class="form-row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="event-name">Event Title</label>
                            <!-- <input class="form-control" id="event-name" name="title" type="text" placeholder="Event Title" value="{{ old('title') }}"> -->
                            {!! Form::text('title',$event->title,['class'=>'form-control','required'=>'required']) !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('title')
                                    }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="start-date">Start Date</label>
                            {!! Form::date('startDate',$event->startDate,['class'=>'form-control datetimepicker']) !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('startDate')
                                    }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="start-time">Start Time</label>
                            {{-- <input class="form-control datetimepicker" id="start-time" name="startTime" type="time"
                                data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'
                                value="{{ old('startTime') }}"> --}}
                            {!! Form::time('startTime',$event->startTime,['class'=>'form-control datetimepicker']) !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('startTime')
                                    }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end-date">End Date</label>
                            {!! Form::date('endDate',$event->endDate,['class'=>'form-control datetimepicker']) !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('endDate')
                                    }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end-time">End Time</label>
                            {!! Form::time('endTime',$event->endTime,['class'=>'form-control datetimepicker']) !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('endTime')
                                    }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-0">
                            <label for="registration-deadline">Registration Deadline</label>
                            {!! Form::date('deadLine',$event->deadLine,['class'=>'form-control datetimepicker']) !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('deadLine')
                                    }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mb-0">
                            <label for="time-zone">Timezone</label>
                            {!!
                            Form::select('timeZone',$timeZones,$event->timeZone,['class'=>'custom-select','id'=>'time-zone','required'=>'required'])
                            !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('timeZone')
                                    }}</strong></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="border-dashed border-bottom-0">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="event-venue">Venue</label>
                            {!! Form::text('venue',$event->venue,['class'=>'form-control','placeholder'=>'Venue']) !!}
                            <button class="btn btn-link btn-sm btn p-0" type="button">Online Event</button>
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('venue')
                                    }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="event-address">Address</label>
                            {!! Form::text('address',$event->address,['class'=>'form-control','placeholder'=>'Address'])
                            !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('address')
                                    }}</strong></span>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="event-country">Country</label>
                            {!! Form::select('country',$countries,$event->country,['class'=>'form-control
                            text-capitalize','id'=>'country','required'=>'required','placeholder'=>'Country']) !!}
                            <span class="invalid-feedback" id="country-empty" role="alert">
                                <strong>Please Choose Country</strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="event-state">State</label>
                            {!! Form::select('state',$states,$event->state,['class'=>'form-control
                            text-capitalize','id'=>'state','required'=>'required','placeholder'=>'state']) !!}
                            @error('state')
                            <span class="invalid-feedback d-block" id="state-empty" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="event-city">City</label>
                            {!! Form::select('city',$cities,$event->city,['class'=>'form-control
                            text-capitalize','id'=>'city','required'=>'required','placeholder'=>'city']) !!}
                            @error('city')
                            <span class="invalid-feedback d-block" id="city-empty" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="event-description">Description</label>
                            {!!
                            Form::textarea('descriptions',$event->descriptions,['class'=>'form-control','placeholder'=>'descriptions'])
                            !!}
                            <span class="invalid-feedback d-block" role="alert"><strong>{{
                                    $errors->first('descriptions') }}</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Tickets</h5>
            </div>
            <div class="card-body bg-light">
                <div class="mb-3">
                    <div class="form-row">
                        <div class="custom-control custom-radio mr-3">
                            {!! Form::radio('ticket_type','free',$event->ticket_type=='free'?true:false,['class'=>'custom-control-input','id'=>'free']) !!}
                            <label class="custom-control-label" for="free">Free<span class="d-none d-sm-inline"> Ticket</span></label>
                        </div>
                        <div class="custom-control custom-radio">
                            {!! Form::radio('ticket_type','paid',$event->ticket_type=='paid'?true:false,['class'=>'custom-control-input','id'=>'paid']) !!}
                            <label class="custom-control-label" for="paid">Paid<span class="d-none d-sm-inline"> Ticket</span></label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="" id="price_options" style="@if($event->ticket_type=='paid') display:block; @else display:none; @endif">
                    <h6>Pricing Options:</h6>
                    <div class="custom-control custom-checkbox">
                        
                        <input class="custom-control-input" id="customCheck1" type="checkbox" checked>
                        <label class="custom-control-label" for="customCheck1">Enable varible pricing</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-2">
                        <input class="custom-control-input" id="customCheck2" type="checkbox">
                        <label class="custom-control-label" for="customCheck2">Enable multi-option purchase
                            mode.</label>
                    </div>
                    <table class="table table-bordered mt-2 bg-white">
                        <thead>
                            <tr class="fs--1">
                                <th>Option Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {!! Form::text('ticket_label1',$event->ticket_label1,['class'=>'form-control','placeholder'=>'Option Name']) !!}
                                </td>
                                <td>
                                    {!! Form::number('ticket1',$event->ticket1,['class'=>'form-control form-control-sm',"step"=>"0.01",'placeholder'=>'Price']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {!! Form::text('ticket_label2',$event->ticket_label2,['class'=>'form-control form-control-sm','placeholder'=>'VIP']) !!}
                                </td>
                                <td>
                                    {!! Form::number('ticket2',$event->ticket2,['class'=>'form-control',"step"=>"0.01",'placeholder'=>'Price']) !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Schedule</h5>
            </div>
            <div class="card-body bg-light">
                <div class="border rounded position-relative bg-white p-3">
                    <div class="form-row">
                        <div class="position-absolute r-0 t-0 mt-2 mr-3 z-index-1">
                            <button class="btn btn-link btn-sm p-0" type="button">
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="schedule-title">Title</label>
                                <input class="form-control form-control-sm" id="schedule-title" type="text"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="schedule-start-date">Start Date</label>
                                <input class="form-control form-control-sm datetimepicker" id="schedule-start-date"
                                    type="text" data-options='{"dateFormat":"d/m/y","enableTime":false}'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="schedule-start-time">Start Time</label>
                                <input class="form-control form-control-sm datetimepicker" id="schedule-start-time"
                                    type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="schedule-end-date">End Date</label>
                                <input class="form-control form-control-sm datetimepicker" id="schedule-end-date"
                                    type="text" data-options='{"enableTime":true}'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="schedule-end-time">End Time</label>
                                <input class="form-control form-control-sm datetimepicker" id="schedule-end-time"
                                    type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-falcon-default btn-sm mt-2" type="button"><span class="fas fa-plus fs--2 mr-1"
                        data-fa-transform="up-1"></span>Add Item </button>
            </div>
        </div> --}}
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Upload Cover Photo</h5>
            </div>
            <div class="card-body bg-light">
                <div class="dropzone dropzone-multiple p-0" data-dropzone data-options='{"url":"valid/url"}'>
                    <div class="fallback">
                        <input type="file" name="banner" onchange="readImgURL(this,'#bannerImg');">
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('banner')
                                }}</strong></span>
                        @if($event->banner)
                            <img id="bannerImg" src="{{$event->banner}}" style="max-width: 100%;width: 100%;">
                        @endif
                    </div>
                    <!-- <div class="dz-message" data-dz-message> 
                            <img class="mr-2" src="../assets/img/icons/cloud-upload.svg" width="25" alt="">Drop your files here
                        </div> 
                        <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                            <div class="media align-items-center mb-3 pb-3 border-bottom btn-reveal-trigger"><img class="dz-image" src="..." alt="..." data-dz-thumbnail>
                                <div class="media-body d-flex flex-between-center">
                                    <div>
                                        <h6 data-dz-name></h6>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 fs--1 text-400 line-height-1" data-dz-size></p>
                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                        </div>
                                    </div>
                                    <div class="dropdown text-sans-serif">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="bg-white py-2"><a class="dropdown-item" href="#!" data-dz-remove>Remove File</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                </div>
            </div>
        </div>
        {{-- <div class="card mb-3 mb-lg-0">
            <div class="card-header">
                <h5 class="mb-0">Custom Fields</h5>
            </div>
            <div class="card-body bg-light">
                <div class="position-relative rounded border bg-white p-3">
                    <div class="position-absolute r-0 t-0 mt-2 mr-3 z-index-1">
                        <button class="btn btn-link btn-sm p-0" type="button"></button>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="field-name">Name</label>
                                <input class="form-control form-control-sm" id="field-name" type="text"
                                    placeholder="Name (e.g. T-shirt)">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="field-type">Type</label>
                                <select class="custom-select custom-select-sm" id="field-type">
                                    <option>Select a type</option>
                                    <option>Text</option>
                                    <option>Checkboxes</option>
                                    <option>Radio Buttons</option>
                                    <option>Textarea</option>
                                    <option>Date</option>
                                    <option>Dropdowns</option>
                                    <option>File</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="field-options">Field Options</label>
                                <textarea class="form-control form-control-sm" id="field-options"
                                    rows="3"></textarea><small class="form-text fs--1 text-warning">* Separate your
                                    options with comma</small>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-falcon-default btn-sm mt-2" type="submit"><span class="fas fa-plus fs--2 mr-1"
                        data-fa-transform="up-1"></span>Add Item</button>
            </div>
        </div> --}}
    </div>
    <div class="col-lg-4 pl-lg-2">
        <div class="sticky-top sticky-sidebar">
            <div class="card mb-3 mb-lg-0">
                <div class="card-header">
                    <h5 class="mb-0">Other Info</h5>
                </div>
                <div class="card-body bg-light">

                    {{-- <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="mb-0" for="organizer">Organizer</label>
                            <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                        </div>
                        <select class="form-control selectpicker" id="organizer" multiple size="1" name="organizer"
                            data-options='{"placeholder":"Select Organizer..."}'>
                            @foreach($eventOrganizers as $eventOrganizer)
                            <option value="{{$eventOrganizer}}">{{$eventOrganizer}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="mb-0" for="sponsors">Sponsors</label>
                            <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                        </div>
                        <select class="form-control selectpicker" id="sponsors" multiple size="1"
                            data-options='{"placeholder":"Select Sponsors..."}' name="sponsors">
                            @foreach($eventSponsors as $eventSponsor)
                            <option value="{{$eventSponsor}}">{{$eventSponsor}}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="form-group">
                        <label for="event-type">Event Type</label>
                        {!!
                        Form::select('eventType',$eventTypes,$event->eventType,['class'=>'custom-select','id'=>'event-type','required'=>'required','placeholder'=>'Select
                        event type...']) !!}
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('eventType')
                                }}</strong></span>
                    </div>
                    <div class="form-group">
                        <label for="event-topic">Event Topic</label>
                        {!!
                        Form::select('eventTopic',$eventTopics,$event->eventTopic,['class'=>'custom-select','id'=>'event-topic','required'=>'required','placeholder'=>'Select
                        a topic']) !!}
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('eventTopic')
                                }}</strong></span>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="mb-0" for="event-tags">Tags</label>
                            <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                        </div>
                        <select class="form-control selectpicker" id="event-tags" multiple size="1"
                            data-options='{"placeholder":"Select tags"}' name="tag">
                            @foreach($eventTags as $eventTag)
                            <option value="{{$eventTag}}">{{$eventTag}}</option>
                            @endforeach
                        </select>
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('tag')
                                }}</strong></span>
                    </div>
                    <hr class="border-dashed border-bottom-0">
                    <h6>Listing Privacy</h6>
                    <div class="form-group custom-control custom-radio">
                        {!! Form::radio('listingType','public',$event->listingType=='public'?true:false,['class'=>'custom-control-input','id'=>'customRadio4']) !!}
                        <label class="custom-control-label" for="customRadio4"><strong>Public page:</strong></label>
                        <small class="form-text mt-0">Discoverable by anyone on Falcon, our distribution partners, and search engines.</small>
                    </div>
                    <div class="form-group custom-control custom-radio">
                        {!! Form::radio('listingType','private',$event->listingType=='private'?true:false,['class'=>'custom-control-input','id'=>'customRadio5']) !!}
                        <label class="custom-control-label" for="customRadio5"> <strong>Private page:</strong></label>
                        <small class="form-text mt-0">Accessible only by people you specify. </small>
                    </div>
                    {{-- <hr class="border-dashed border-bottom-0">
                    <h6>Remaining Tickets</h6>
                    <div class="form-group custom-control custom-checkbox mb-0">
                        <input class="custom-control-input" id="customRadio6" type="checkbox">
                        <label class="custom-control-label" for="customRadio6">Show the number of remaining
                            tickets.</label>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-body">
        <div class="row  align-items-center">
            {{-- <div class="col-md">
                <h5 class="mb-2 mb-md-0">Save your Event / Also make your Event go live!!!</h5>
            </div> --}}
            <div class="col-auto">
                <button class="btn btn-success btn-sm mr-2" type="submit" name="draft">Save Your Event</button>
                {{-- <button class="btn btn-primary btn-sm" type="submit" name="live">Make your event live </button>
                --}}
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
@section('additional-js')
<script>
    var oldState = "{{old('state')}}";
    var oldCity = "{{old('city')}}";
    var oldCountry = "{{old('country')}}";
    var oldGender = "";
    var oldPlan = "";
    var oldDOB = ""

    $(document).ready(function(){
        $("#paid").click(function(){
            $("#price_options").show();
        });
        $("#free").click(function(){
            $("#price_options").hide();
        });
    });
</script>
@endsection