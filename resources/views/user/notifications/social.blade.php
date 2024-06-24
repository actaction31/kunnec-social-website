@extends('layouts.user')
@section('title', 'Social Notifications')
@section('css/notification')
<link href="{{ asset('public/user-dash/css/notification.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
<!-- Page header start -->
@include('user.notifications.notificationsHead',['title'=>'Social Notification'])
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
    <h6 class="border-bottom border-gray pb-2 mb-0">Kunnec Requests</h6>
    @include('user.notifications.socialTable')
</div>
@endsection
@section('additional-js')
@endsection