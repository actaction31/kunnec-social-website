@extends('layouts.user')
 @section('title', 'Account Notifications')
@section('css/notification')
<link href="{{ asset('public/user-dash/css/notification.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
<!-- Page header start -->
@include('user.notifications.notificationsHead',['title'=>'Account Notification'])

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Notifications</h6>

    <!-- Account Ending Notification Alert -->
    <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="alert alert-danger" alert-dismissible fade show role="alert">
            <strong>{{Auth::user()->username}}</strong>, your account will expire in 9 days!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- Monthly Account Paid Notification Alert -->
    <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <h6 class="border-bottom border-gray pb-2 mb-0">Payments</h6>
        <!-- Payment area  begins -->
        <div class="alert alert-success" alert-dismissible fade show role="alert">
            <strong>Date: {{ date('m-d-Y H:i:s') }}</strong> - {{Auth::user()->username}}, your monthly payment of $7.99 on  has been accepted!
        </div>
    </div>
    <!-- Annual Account Paid Notification Alert -->
    <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="alert alert-success" alert-dismissible fade show role="alert">
            <strong>Date: {{ date('m-d-Y H:i:s') }}</strong> - {{Auth::user()->username}}, your annual payment of $74.99 on  has been accepted!
        </div>
    </div>
     <!-- Credit Purchase Notification Alert -->
     <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <h6 class="border-bottom border-gray pb-2 mb-0">Payouts</h6>
        <!-- Payouts Area begins -->
        <div class="alert alert-warning" alert-dismissible fade show role="alert">
             <strong>Date: {{ date('m-d-Y H:i:s') }}</strong> - {{Auth::user()->username}}, you just purchased 25 credits!
        </div>
    </div>
    <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="alert alert-warning" alert-dismissible fade show role="alert">
             <strong>Date: {{ date('m-d-Y H:i:s') }}</strong> - {{Auth::user()->username}}, you just purchased 65 credits!
        </div>
    </div>
    <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="alert alert-warning" alert-dismissible fade show role="alert">
             <strong>Date: {{ date('m-d-Y H:i:s') }}</strong> - {{Auth::user()->username}}, you credit balance is zero!
        </div>
    </div>
    <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="alert alert-warning" alert-dismissible fade show role="alert">
            <strong>{{Auth::user()->username}}</strong>, your Kunnec to Me Post ( <strong>Make everything all good</strong> ) will expire in 2 days! 
            <div class="float-right">
                <button type="button" class="btn1 btn-danger" style="margin-top: -9px;" href="#!" data-toggle="modal" data-target="#K2mePostModal">
                    <a href="#!" style="color: #ffffff; font-size: 12px;">Re-Post</a>
                </button>
            </div>
        </div>
    </div>
    <!-- K-Ads Notification Alert 
    <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <h6 class="border-bottom border-gray pb-2 mb-0">K-Ads</h6>
        <!-- K-Ads Area begins 
        <div class="alert alert-primary" alert-dismissible fade show role="alert">
             <strong>Date: {{ date('m-d-Y H:i:s') }}</strong> - {{Auth::user()->username}}, you just added $25 dollars to your K-ads account!
        </div>
    </div>
    <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="alert alert-primary" alert-dismissible fade show role="alert">
             <strong>Date: {{ date('m-d-Y H:i:s') }}</strong> - {{Auth::user()->username}}, your K-Ads account is empty!
        </div>
    </div>
    -->
</div>
@endsection
@section('additional-js')
@endsection