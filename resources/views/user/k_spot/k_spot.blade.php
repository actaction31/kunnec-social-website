@extends('layouts.user')
@section('title', 'Kunnec Spot')
@section('additional-css')
@endsection
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
		<div class="col-sm mt-2">
            <p style="color: #FFFFFF">
            <a href="{{ url('k_spot/k_spot') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Spot
                </a> 
                <!--|&nbsp;
                <a href="{{ url('https://colorlib.com/wp/template/calendar-04/') }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-calendar" data-toggle="tooltip" data-placement="top" title="Calendar" style="color: #FFFFFF;">
                    </i> 
                </a>
                -->
            </p>
        </div>
    </div>
</div>



<div class="card" style="width: 100%; ">
    <div class="card-body">  
        <div class="alert alert-danger">
            <strong>Requirements:</strong> Camera & Microphone. Create a Spot to communicate. Limit of 3 Kunnec's per spot.
        </div>
        <div class="form-row">
                <div class="col-md-5 col-sm-12">
                    <a href="#" class="btn btn-success" href="#!" data-toggle="modal" data-target="#spotModal" style="border-radius: 25px; background-color: #009900;" >
                    <i class="fas fa-video" title="Create a Spot" style="color: #FFFFFF; "></i> Create a Spot</a>
                </div>
                <div class="col-md-7 col-sm-12">
                    .<div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button id="join-spot" class="btn btn-success" style=" background-color: #009900;" type="button">JOIN</button>
                    </div>
                    <input id="spot-code" type="text" class="form-control" placeholder="Enter Spot Code Here. Select Join" aria-label="" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- k Spot Modal -->
<div class="modal fade" id="spotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #009900;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #FFFFFF;">Create Your New Spot</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span class="font-weight-light" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="fs--1 mb-2 md-3">
                    <img src="{{Auth::user()->image}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> {{Auth::user()->username}}</p>
                <h5>This is Your Spot Code</h5> 
                <p class="fs--1">Share this code with your Kunnec's. Up to 3 in your spot</p>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputSpot" aria-describedby="spotHelp" placeholder="spot.kunnec.com/maa-cc-ohm" value = {{$spot_id}} disabled>
                    <small id="spotHelp" class="form-text text-muted">Save this Code. Send code to Kunnec's to enter your spot.</small>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <a href="/public/k_spot/k_spot_stream#{{$spot_id}}" class="btn btn-success" style="border-radius: 25px; background-color: #009900;">
                    <i class="fas fa-video" title="Open Your Spot" style=" color: #FFFFFF;"></i> Open Your Spot
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header" style="background-color:#009900; color: #FFFFFF; font-size:20px;">
        <img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Instructions
                
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <h4 class="modal-title" id="exampleModalLongTitle"> Navigate to Kunnec Spot</h4>
                <video width="100%" controls><source src="{{ asset('public/promo_vids/Navigate_KS.mp4')}}" type="video/mp4"></video>
            </div>
            <div class="col-sm">
                <h4 class="modal-title" id="exampleModalLongTitle"> Send an Invite</h4>
                <video width="100%" controls><source src="{{ asset('public/promo_vids/Send Invite.mp4')}}" type="video/mp4"></video>
            </div>
            <div class="col-sm">
                <h4 class="modal-title" id="exampleModalLongTitle"> Join a Kunnec Spot</h4>
                <video width="100%" controls><source src="{{ asset('public/promo_vids/Joining Room.mp4')}}" type="video/mp4"></video>
            </div>
            <div class="col-sm">
                <h4 class="modal-title" id="exampleModalLongTitle"> Kunnec Spot Settings</h4>
                <video width="100%" controls><source src="{{ asset('public/promo_vids/Kunnec Spot Settings.mp4')}}" type="video/mp4"></video>
            </div>
        </div>
    </div>
</div>

    <script>
        document.getElementById("join-spot").addEventListener("click", (e)=> {
            console.log('join spot');
            let spotCode = document.getElementById("spot-code").value;
            if(spotCode !== ''){
                window.location.href = '/public/k_spot/k_spot_stream/#' + spotCode;
            }
        })
    </script>
@endsection
@section('additional-js')
@endsection