@extends('layouts.user')
@section('title', 'Screen Settings')
@section('additional-css')

@endsection
@section('content')
<style>
    .profile_img{
        width: 75px;
        height: 75px;
        object-fit: cover;
    }
</style>
@include('user.k_screen.recording.recordFilters')

<!-- Start of Tabs -->
<div class="card">
    <div class="card-body">
        <div class="tabbable hwstabs" tab-url="{{route('krecords.settings')}}">
            <!-- Start of Tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item @if(request()->url()==route('krecords.settings',['tab'=>'setup'])) {{ 'active' }} @endif">
                    <a class="nav-link @if(request()->url()==route('krecords.settings',['tab'=>'setup'])) {{ 'active show' }} @endif" id="tab-setup" data-toggle="tab" href="#setup" role="tab" aria-controls="tab-setup" aria-selected="true">Screen Setup</a>
                </li>
                <!-- <li class="nav-item @if(request()->url()==route('krecords.settings',['tab'=>'purchase-tutors'])) {{ 'active' }} @endif">
                    <a class="nav-link @if(request()->url()==route('krecords.settings',['tab'=>'purchase-tutors'])) {{ 'active show' }} @endif" id="tab-purchase-tutors" data-toggle="tab" href="#purchase-tutors" role="tab"
                        aria-controls="tab-purchase-recorders" aria-selected="true">Tutor History
                    </a>
                </li> -->
                <li class="nav-item @if(request()->url()==route('krecords.settings',['tab'=>'purchase-recorders'])) {{ 'active' }} @endif">
                    <a class="nav-link @if(request()->url()==route('krecords.settings',['tab'=>'purchase-recorders'])) {{ 'active show' }} @endif" id="tab-purchase-recorders" data-toggle="tab" href="#purchase-recorders" role="tab"
                        aria-controls="tab-purchase-recorders" aria-selected="true">Recorder History
                    </a>
                </li>
                <li class="nav-item @if(request()->url()==route('krecords.settings',['tab'=>'t_favorites'])) {{ 'active' }} @endif">
					<a class="nav-link @if(request()->url()==route('krecords.settings',['tab'=>'t_favorites'])) {{ 'active show' }} @endif" id="tab-t_favorites" data-toggle="tab" href="#t_favorites" role="tab" aria-controls="tab-favorites" aria-selected="true">Favorite Tutors</a>
				</li>
                <li class="nav-item @if(request()->url()==route('krecords.settings',['tab'=>'favorites'])) {{ 'active' }} @endif">
					<a class="nav-link @if(request()->url()==route('krecords.settings',['tab'=>'favorites'])) {{ 'active show' }} @endif" id="tab-favorites" data-toggle="tab" href="#favorites" role="tab" aria-controls="tab-favorites" aria-selected="true">Favorite Recorders</a>
				</li>
            </ul>
        </div>
        <div class="tab-content border-x border-bottom p-3" id="myTabContent">
            @if(session()->has('success'))
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="alert alert-success">
                            <strong>{{ session('success') }}</strong>
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
            
            <!-- Start of setup Tab -->
            <div class="tab-pane fade @if(request()->url()==route('krecords.settings',['tab'=>'setup'])) {{ 'active show' }} @endif" id="setup" role="tabpanel" aria-labelledby="setup-tab">
                <div class="card">
                    <div class="card-body p-0">
                        <hr class="style-12">
                        {!! Form::open(['route'=>['krecords.settings.setup'],'files' => true]) !!}
                        <div class="row no-gutters">
                            <div class="col-lg-8 pr-lg-2">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Screen Details</h5>
                                    </div>
                                    <div class="card-body bg-light">
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="heading">Brief Title Description</label>
                                                        {!! Form::text('title',$recorder->title,["class"=>"form-control"]) !!}
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        {!! Form::select('type',$tutor_types,$recorder->type,['class'=>'selectpicker form-control','placeholder'=>'Select Type']) !!}
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $errors->first('type') }}</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        {!! Form::select('record_cat_id',$recordCats,$recorder->record_cat_id,['class'=>'selectpicker form-control','placeholder'=>'Select Category']) !!}
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $errors->first('record_cat_id') }}</strong>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="descriptions">Full Screen Description</label>
                                                        <textarea class="form-control" id="descriptions" name="descriptions" cols="30" rows="13">{!! $recorder->descriptions !!}</textarea>
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $errors->first('descriptions') }}</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button class="btn btn-success" type="submit">Update </button>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                                

                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">Schedule Days</h5>
                                    </div>
                                    <div class="card-body bg-light">
                                        <form>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <strong> Select Days and Time that you are avaiable.
                                                        </strong>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    @if($schedules)
                                                        @foreach ($schedules as $schedule)
                                                            <div class="custom-control custom-checkbox">
                                                                {!! Form::checkbox('days[]',$schedule->day,$schedule->start_time!=NULL?true:false,['class'=>'custom-control-input','id'=>$schedule->day]) !!}
                                                                <label class="custom-control-label" for="{{$schedule->day}}">{{$schedule->name}}</label>
                                                                <label for="customMonday_t1">
                                                                    <input type="time" name="start_time[]" value="{{($schedule->start_time)?$schedule->start_time->format('H:i') : ""}}">
                                                                </label>
                                                                <label>through</label>
                                                                <label for="customMonday_t21">
                                                                    <input type="time"  name="end_time[]" value="{{($schedule->end_time)?$schedule->end_time->format('H:i'):""}}">
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    {{-- @if($available_days)
                                                        @foreach ($available_days as $key=>$available_day)
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="{{$key}}" name="days[]" type="checkbox" value="{{$key}}">
                                                                <label class="custom-control-label" for="{{$key}}">{{$available_day}}</label>
                                                                <label for="customMonday_t1">
                                                                    <input type="time" name="start_time[]" value="">
                                                                </label>
                                                                <label>through</label>
                                                                <label for="customMonday_t21">
                                                                    <input type="time"  name="end_time[]" value="">
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    @endif --}}
                                                    
                                                    {{-- <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customMonday"
                                                            type="checkbox">
                                                        <label class="custom-control-label" for="customMonday">Monday
                                                        </label>
                                                        <label for="customMonday_t1"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                        <label>through</label>
                                                        <label for="customMonday_t21"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customTuesday"
                                                            type="checkbox">
                                                        <label class="custom-control-label"
                                                            for="customTuesday">Tuesday</label>
                                                        <label for="customTuesday_t1"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                        <label>through</label>
                                                        <label for="customTuesday_t21"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customWednesday"
                                                            type="checkbox">
                                                        <label class="custom-control-label"
                                                            for="customWednesday">Wednesday</label>
                                                        <label for="customWednesday_t1"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                        <label>through</label>
                                                        <label for="customWednesday_t21"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customThursday"
                                                            type="checkbox">
                                                        <label class="custom-control-label"
                                                            for="customThursday">Thursday</label>
                                                        <label for="customThursday_t1"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                        <label>through</label>
                                                        <label for="customThursday_t21"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customFriday"
                                                            type="checkbox">
                                                        <label class="custom-control-label"
                                                            for="customFriday">Friday</label>
                                                        <label for="customFriday_t1"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                        <label>through</label>
                                                        <label for="customFriday_t21"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customSaturday"
                                                            type="checkbox">
                                                        <label class="custom-control-label"
                                                            for="customSaturday">Saturday</label>
                                                        <label for="customSaturday_t1"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                        <label>through</label>
                                                        <label for="customSaturday_t21"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="customSunday"
                                                            type="checkbox">
                                                        <label class="custom-control-label"
                                                            for="customSunrday">Sunday</label>
                                                        <label for="customSunday_t1"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                        <label>through</label>
                                                        <label for="customSunday_t21"><input type="time" id="appt"
                                                                name="appt" min="09:00" max="18:00"></label>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <h5 class="mb-0">Save Screen</h5>
                                </div>

                                <div class="card-body bg-light">
                                    @if($recorder->id)
                                    <a class="btn btn-primary d-block" href="{{ route('krecords.details',['recorder_id'=>$recorder->id]) }}" type="button">View Screen Details</a>
                                    @endif
                                </div>
                                <div class="card-body bg-light">
                                    <button class="btn btn-success d-block" type="submit" style="width:100%">Save Settings</button>
                                </div>

                            </div>
                            <div class="col-lg-4 pl-lg-2">
                                <div class="sticky-top sticky-sidebar" style="z-index:unset;">
                                    <div class="card mb-3 overflow-hidden">
                                        <div class="card-header">
                                            <h5 class="mb-0">Screen Cover Image</h5>
                                        </div>
                                        <div class="card-body bg-light">
                                            <div class="pl-2">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12" style="padding: 0px;">
                                                            <div class="custom-control custom-checkbox" style="padding: 0px;">
                                                                <div class="form-group">
                                                                    Upload Image<input id="cover_image" class="form-control" type="file" name="cover_image">
                                                                    <img id="cover_uploaded" style="width: 100%;margin-top:10px;" src="{{$recorder->cover_image}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-3 overflow-hidden">
                                        <div class="card-header">
                                            <h5 class="mb-0">Monitor</h5>
                                        </div>
                                        <div class="card-body bg-light">
                                            <div class="pl-2">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input"
                                                                    id="customCheckMonitor" type="checkbox">
                                                                <label class="custom-control-label"
                                                                    for="customCheckMonitor">Desktop with
                                                                    Monitor</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card mb-3 overflow-hidden">
                                        <div class="card-header">
                                            <h5 class="mb-0">Select Language You Know</h5>
                                        </div>
                                        <div class="card-body bg-light">
                                            <div class="pl-2">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            {!! Form::select('language',$languages,$recorder->language,['class'=>'custom-select text-capitalize','placeholder'=>'Select Language ...']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3 overflow-hidden">
                                        <div class="card-header">
                                            <h5 class="mb-0">Kunnec to You Button</h5>
                                        </div>
                                        <div class="card-body bg-light">
                                            <div class="pl-2">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <div class="custom-control custom-checkbox">
                                                                {!! Form::checkbox('k_to_you_show','1',$recorder->k_to_you_show=='1'?true:false,['class'=>'custom-control-input','id'=>'k_to_you_show']) !!}
                                                                <label class="custom-control-label" for="k_to_you_show">Show Button on Details Page</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-3 overflow-hidden">
                                        <div class="card-header">
                                            <h5 class="mb-0">Time and Price</h5>
                                        </div>
                                        <div class="card-body bg-light">
                                            <div class="pl-2">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" type="radio" name="fee_type" id="hour" value="1" @if($recorder->fee_type=="1") checked @endif>
                                                                <label class="custom-control-label" for="hour">Per Hour</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" type="radio" name="fee_type" id="flat" value="2" @if($recorder->fee_type=="2") checked @endif>
                                                                <label class="custom-control-label" for="flat"> flat fee</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                            <h6 class="mt-2 font-weight-bold"> Price
                                                                <span class="fs--2 ml-1 text-success"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="This will be the price for tutoring"><svg
                                                                        class="svg-inline--fa fa-question-circle fa-w-16"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="question-circle"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z">
                                                                        </path>
                                                                    </svg>
                                                                    <!-- <span class="fas fa-question-circle"></span> --></span>
                                                            </h6>
                                                            <div class="form-group">
                                                                {!! Form::selectRange('fee',1,10,$recorder->fee,['class'=>'custom-select','placeholder'=>'Select Price ...']) !!}
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $errors->first('fee') }}</strong>
                                                                </span>
                                                            </div>
                                                            <h6 class="mt-2 font-weight-bold">Screen Level
                                                                <span class="fs--2 ml-1 text-success"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="This will be the level you want the user to be when recording"><svg
                                                                        class="svg-inline--fa fa-question-circle fa-w-16"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="question-circle"
                                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z">
                                                                        </path>
                                                                    </svg>
                                                                    <!-- <span class="fas fa-question-circle"></span> -->
                                                                </span>
                                                            </h6>
                                                            <div class="form-group">
                                                                {!! Form::select('level',$tutor_levels,$recorder->level,['class'=>'custom-select','placeholder'=>'Select Level ...']) !!}
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $errors->first('level') }}</strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3 overflow-hidden">
                                        <div class="card">
                                            <div class="card-header">
                                            </div>
                                            <div class="card-body bg-light">
                                                <h5 class="fs-0">Delete Your Screen Settings </h5>
                                                <p class="fs--1">Once you delete this account, there is no going back.
                                                    Please be certain.</p>
                                                <a class="btn btn-danger d-block" href="#!" type="button"
                                                    data-toggle="modal" data-target="#deleteModal">Delete Screen
                                                    Account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <!-- Start of tutors  Tab -->
            <div class="tab-pane fade @if(request()->url()==route('krecords.settings',['tab'=>'purchase-tutors'])) {{ 'active show' }} @endif" id="purchase-tutors" role="tabpanel" aria-labelledby="purchase-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-eye"></i> &nbsp;
                                    Tutor's Selected</h5>
                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th scope="col">Tutor</th>
                                        <th scope="col">Description <i class="fas fa-sort-alpha-up"></i></th>
                                        <th scope="col">Name <i class="fas fa-sort"></i></th>
                                        <th scope="col">Category <i class="fas fa-sort"></i></th>
                                        <th scope="col">Date <i class="fas fa-sort"></i></th>
                                        <th scope="col">Price <i class="fas fa-sort"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}"
                                                    width="75px"></a></td>
                                        <td><a href="{{ url('k_screen/recording/record_details') }}">The Direction is
                                                Always Up</a></td>
                                        <td><a href="{{ url('k_screen/recording/record_details') }}">Tupac Amoru
                                                Shakur</a></td>
                                        <td>Math</td>
                                        <td>02/21/1988</td>
                                        <td><span class="badge badge-pill badge-warning">75</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/24.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">The Sun Always
                                                shines</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                        </td>
                                        <td>Science</td>
                                        <td>10/09/2017</td>
                                        <td>
                                            <span class="badge badge-pill badge-warning">102</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/23.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Two Can Keep A
                                                Secret if One is Dead</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                        </td>
                                        <td>English</td>
                                        <td>11/16/2020</td>
                                        <td>
                                            <span class="badge badge-pill badge-warning">220</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Always win at all
                                                cost, never fall</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Carlo Gambino</a>
                                        </td>
                                        <td>Gym</td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">45</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/21.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">There is a I in
                                                win</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Timagin</a>
                                        </td>
                                        <td>Science</td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">25</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">The Direction is
                                                Always Up</a>
                                        </td>
                                        <td><a href="#!">Tupac Amoru Shakur</a></td>
                                        <td>Math</td>
                                        <td>02/21/1988</td>
                                        <td><span class="badge badge-pill badge-warning">75</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/19.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">The Sun Always
                                                shines</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                        </td>
                                        <td>Science</td>
                                        <td>10/09/2017</td>
                                        <td><span class="badge badge-pill badge-warning">102</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Two Can Keep A
                                                Secret if One is Dead</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                        </td>
                                        <td>English</td>
                                        <td>11/16/2020</td>
                                        <td><span class="badge badge-pill badge-warning">220</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/17.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Always win at all
                                                cost, never fall</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">Marvin Gaye</a>
                                        </td>
                                        <td>Science</td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">45</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>
                                            <a href="{{ url('profile') }}"><img class="rounded-circle"
                                                    src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}"
                                                    width="75px"></a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">There is a I in
                                                win</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('k_screen/recording/record_details') }}">James Brown</a>
                                        </td>
                                        <td>Science</td>
                                        <td>03/1/2020</td>
                                        <td><span class="badge badge-pill badge-warning">25</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start of purchased Tab -->
            <div class="tab-pane fade @if(request()->url()==route('krecords.settings',['tab'=>'purchase-recorders'])) {{ 'active show' }} @endif" id="purchase-recorders" role="tabpanel" aria-labelledby="purchase-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-eye"></i> &nbsp;
                                    Recorders Selected</h5>
                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th scope="col">Host</th>
                                        <th scope="col">Guest</th>
                                        <th scope="col">Title<i class="fas fa-sort"></i></th>
                                        <th scope="col">Fee Type <i class="fas fa-sort"></i></th>
                                        <th scope="col">Fee<i class="fas fa-sort"></i></th>
                                        <th scope="col">Paid<i class="fas fa-sort"></i></th>
                                        <th scope="col">Start Time</th>
                                        <th scope="col">End Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($recorder_history)>0)
	                                    @foreach($recorder_history as $key=>$recorder_his)
                                            <tr>
                                                <td style="vertical-align: middle;" scope="row">{{$key+1}}</td>
                                                <td>
                                                    <img class="rounded-circle profile_img" style="width: 50px; height: 50px" src="https://kunnec.com/public/user-dash/images/users/profiles/{{$recorder_his->host_image}}" width="25px">
                                                    <span>{{$recorder_his->host_username}}</span>
                                                </td>
                                                <td>
                                                    <img class="rounded-circle profile_img" style="width: 50px; height: 50px" src="https://kunnec.com/public/user-dash/images/users/profiles/{{$recorder_his->guest_image}}" width="25px">
                                                    <span>{{$recorder_his->guest_username}}</span>
                                                </td>
                                                <td style="vertical-align: middle;">{{$recorder_his->title}}</td>
                                                <td style="vertical-align: middle;">@if($recorder_his->fee_type == 1) {{'houly'}} @else {{'flat'}} @endif</td>
                                                <td style="vertical-align: middle;">{{$recorder_his->fee}}</td>
                                                <td style="vertical-align: middle;">${{$recorder_his->paid_amount}}</td>
                                                <td style="vertical-align: middle;">{{$recorder_his->start_at}}</td>
                                                <td style="vertical-align: middle;">{{$recorder_his->end_at}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr><td colspan="8" class="text-center">No Recorder History yet</td></tr>
                                    @endif 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start of favorites Tab -->
            <div class="tab-pane fade @if(request()->url()==route('krecords.settings',['tab'=>'t_favorites'])) {{ 'active show' }} @endif" id="t_favorites" role="tabpanel" aria-labelledby="wish-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-heart"></i> &nbsp;
                                    Tutors Saved</h5>
                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th scope="col">Tutor</th>
                                        <th scope="col">Description<i class="fas fa-sort-alpha-up"></i></th>
                                        <th scope="col">Name<i class="fas fa-sort"></i></th>
                                        <th scope="col">Category<i class="fas fa-sort"></i></th>
                                        <th scope="col">Date<i class="fas fa-sort"></i></th>
                                        <th scope="col">Price<i class="fas fa-sort"></i></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($favTutors->total()>0)
	                                    @foreach($favTutors as $key=>$favTutor)
                                            <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                <td><a href="{{ url('profile') }}">
                                                    <img class="rounded-circle profile_img" src="@if($favTutor->recorder->user){{$favTutor->recorder->user->image}} @endif" width="75px"></a>
                                                </td>
                                                <td><a href="{{ route('krecords.details', ['recorder_id'=>$favTutor->recorder->id]) }}">{{$favTutor->recorder->title}}</a></td>
                                                <td><a href="{{ route('krecords.details', ['recorder_id'=>$favTutor->recorder->id]) }}">{{$favTutor->recorder->user->first_name}}</a></td>
                                                <td>{{$favTutor->recorder->cat->name}}</td>
                                                <td>{{$favTutor->created_at}}</td>
                                                <td><span class="badge badge-pill badge-warning">${{$favTutor->recorder->fee}}</span></td>
                                                
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr><td colspan="8" class="text-center">No Favorites yet</td></tr>
                                    @endif 
                                    
                                </tbody>
                            </table>
                            @if($favTutors->total()>0)
                            <div class="pagi_row">  
                                <div class="page_counts"> 
                                    Results: {{ $favTutors->firstItem() }}
                                    - {{ $favTutors->lastItem() }}
                                    of 
                                    {{ $favTutors->total() }}
                                </div>
                                <div class="vehi_pagination"> 
                                    {{ $favTutors->links() }}
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="tab-pane fade @if(request()->url()==route('krecords.settings',['tab'=>'favorites'])) {{ 'active show' }} @endif" id="favorites" role="tabpanel" aria-labelledby="wish-tab">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-heart"></i> &nbsp;
                                    Recorders Saved</h5>
                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-hover">
                                <thead style="color:#FFFFFF; background-color:#009900;">
                                    <tr>
                                        <th class="th-sm">#</th>
                                        <th scope="col">Recorder</th>
                                        <th scope="col">Description<i class="fas fa-sort-alpha-up"></i></th>
                                        <th scope="col">Name<i class="fas fa-sort"></i></th>
                                        <th scope="col">Category<i class="fas fa-sort"></i></th>
                                        <th scope="col">Date<i class="fas fa-sort"></i></th>
                                        <th scope="col">Price<i class="fas fa-sort"></i></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($favRecorders->total()>0)
	                                    @foreach($favRecorders as $key=>$favRecorder)
                                            <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                <td><a href="{{ url('profile') }}">
                                                    <img class="rounded-circle profile_img" src="@if($favRecorder->recorder->user){{$favRecorder->recorder->user->image}} @endif" width="75px"></a>
                                                </td>
                                                <td><a href="{{ route('krecords.details', ['recorder_id'=>$favRecorder->recorder->id]) }}">{{$favRecorder->recorder->title}}</a></td>
                                                <td><a href="{{ route('krecords.details', ['recorder_id'=>$favRecorder->recorder->id]) }}}">{{$favRecorder->recorder->user->first_name}}</a></td>
                                                <td>{{$favRecorder->recorder->cat->name}}</td>
                                                <td>{{$favRecorder->created_at}}</td>
                                                <td><span class="badge badge-pill badge-warning">${{$favRecorder->recorder->fee}}</span></td>
                                                
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr><td colspan="8" class="text-center">No Favorites yet</td></tr>
                                    @endif 
                                    
                                </tbody>
                            </table>
                            @if($favRecorders->total()>0)
                            <div class="pagi_row">  
                                <div class="page_counts"> 
                                    Results: {{ $favRecorders->firstItem() }}
                                    - {{ $favRecorders->lastItem() }}
                                    of 
                                    {{ $favRecorders->total() }}
                                </div>
                                <div class="vehi_pagination"> 
                                    {{ $favRecorders->links() }}
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- End of Tabs -->
    </div>
</div>

@endsection
@section('additional-js')
@endsection