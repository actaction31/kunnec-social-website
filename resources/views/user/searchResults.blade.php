@extends('layouts.user')
@section('title', 'Social Search')
@section('additional-css')
@endsection
@section('content')
<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
        <div class="col-9 mt-2" style="padding: 0px;">
            <p>
                <a href="{{route('social.home')}}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Social
                </a> |&nbsp;
                <a href="{{ route('edit_profile') }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;">
                    </i> 
                </a>
            </p>
        </div>
  
        <div class="col-3 d-flex flex-row-reverse">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
                </button>
            </p>
        </div>
    </div>
    <div class="collapse" id="collapseSort1">
        @include('user.profileFilters')
    </div>	
</div>
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
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Search Results</h6>
    @include('user.searchTable')
</div>
@endsection
@section('additional-js')
@endsection