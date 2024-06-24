@extends('layouts.user')
 @section('title', 'Kunnec Job Post')
 @section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')

@include('user.k_me.jobFilters')
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

<div class="card-header1 mt-3">
    Opportunity 
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="avatar avatar-5xl mr-3 justify-content-center">
                    <img class="img-thumbnail img-fluid rounded-circle" src="{{ $job->user->image }}" alt="" />
                </div>
                <div class="d-flex justify-content-center">
                    <h5 class="card-title t-t-c">{{$job->user->username }}</h5>
                </div>
                <div class="d-flex justify-content-center">
                    <h6 class="card-text text-muted"> Posted : {{ $job->created_at->format('m-d-Y') }}</h6>
                </div>
            </div>
            <div class="col-sm-9">
                <h5 class="card-title t-t-c">{{$job->title}}</h5>
                <hr class="style12">
                <div class="card-text">{!! $job->descriptions !!}</div>
                <button type="button" class="btn1 btn-primary">Kunnec Spot Interview Available</button>
            </div>

            <div class="col-sm-1">
                @if(!$job->is_expired)
                    @if($job->user_id!=Auth::user()->id)
                        @if($job->is_applied)
                        <button class="btn1 btn-kunnec float-right">Applied</a>
                        @else
                            <a href="{{ route('k2me.applyJob',['job_id'=>$job->id]) }}" class="btn1 btn-kunnec float-right">Apply</a>
                        @endif
                    @endif
                @else
                    <button class="btn1 btn-danger float-right">Expired</a>
                @endif
            </div>
        </div>
        <hr class="style12">
        <div class="row mt-4">
            <div class="col-sm-4">
                <ul class="list-unstyled components text-muted">
                    <li>
                        <i class="fas fa-map-marker-alt"></i> {{$job->loc_country->name}} / {{$job->loc_city->name}}, {{$job->loc_state->name}}
                    </li>
                    <li>
                        <i class="far fa-clock"></i> {{$job->hr_week}} h / week 
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul class="list-unstyled components text-muted ">
                    <li>
                        <i class="fas fa-key"></i>  {{$job->experience}}+ years experience
                    </li>
                    <li>
                        <i class="fas fa-business-time"></i> {{$job->job_type}}
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul class="list-unstyled components text-muted">
                    <li>
                        <i class="far fa-money-bill-alt"></i> $ 25.00 / hr
                    </li>
                    <li>
                    <i class="fas fa-school"></i> {{$job->education}}
                    </li>
                </ul>
            </div>
        </div>
   </div>  
</div>

<!-- Only post if responsiblities is written by the user -->
<div class="card-header1 mt-3">
    Responsibilities
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                {!! $job->responsibilities !!}
            </div>
        </div>
   </div>  
</div>
<div class="card-header1 mt-3">
    Qualifications
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                {!! $job->qualifications !!}
            </div>
        </div>
   </div>  
</div>

@endsection
@section('additional-js')
@endsection