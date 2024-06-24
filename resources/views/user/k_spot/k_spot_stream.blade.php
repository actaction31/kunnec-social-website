@extends('layouts.k_speak')
@section('title', 'Kunnec Spot')
@section('additional-css')

@endsection
@section('content')
<div class="card" style="height:100vh;">
    <div class="card body">
        <div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
            <div class="row">
                <div   div class="col-sm mt-2">
                    <p style="color: #FFFFFF">
                        <a href="{{ url('k_spot/k_spot') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Spot</a>
                    <!-- Save for Later
                        <a href="{{ url('https://colorlib.com/wp/template/calendar-04/') }}" style="font-size:20px; color: #ffffff;">
                            <i class="fas fa-calendar" data-toggle="tooltip" data-placement="bottom" title="Calendar" style="color: #FFFFFF;">
                            </i> 
                        </a>
                    -->
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card-body" >
       <div class="modal left fade" id="leftModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog" role="document">
		        <div class="modal-content">
			        <div class="modal-body">
				        <div class="nav flex-column">
                            <p>Kunnecs</p>


                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inviteModal" style="border-radius: 25px; background-color: #009900;"><i class =" fa solid fa-user-plus"></i> Invite Kunnecs</button>
                            <div class="alert alert-success" alert-dismissible fade show role="alert">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/17.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                </img> {{Auth::user()->username}}: Spot Host
                            </div>
                            <hr style="width:100%; text-align:left;margin-left:0;">
					        
                            <p>Joined {{Auth::user()->username}} Spot: 3</p>
                            <div class="alert alert-success" alert-dismissible fade show role="alert">
                                 <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/17.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                </img> {{Auth::user()->username}}:
                                <div class="d-inline float-right">
                                    <button type="button" class="btn btn-danger" style="margin-top: -2px;">
                                        <a href="" style="color: #ffffff; font-size: 12px;">DIsKunnec</a>
                                    </button>
                                </div>
                            </div>
                            <div class="alert alert-success" alert-dismissible fade show role="alert">
                                 <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/17.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                </img> {{Auth::user()->username}}:
                                <div class="d-inline float-right">
                                    <button type="button" class="btn btn-danger" style="margin-top: -2px;">
                                        <a href="" style="color: #ffffff; font-size: 12px;">DIsKunnec</a>
                                    </button>
                                </div>
                            </div>
                            <div class="alert alert-success" alert-dismissible fade show role="alert">
                                 <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/17.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                </img> {{Auth::user()->username}}:
                                <div class="d-inline float-right">
                                    <button type="button" class="btn btn-danger" style="margin-top: -2px;">
                                        <a href="" style="color: #ffffff; font-size: 12px;">DIsKunnec</a>
                                    </button>
                                </div>
                            </div>
				        </div>
			        </div>
			        <div class="modal-footer">
				        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			        </div>
		        </div>
	        </div>
        </div>

        <div class="modal right fade" id="rightModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="nav flex-column">
                            <a class="nav-item nav-link active" href="#">Settings</a>
                            <div class="row">
                                <div class="col-3">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Video</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Audio</a>          `   `
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> 
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Camera</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Face Time Camera ( Built IN )</option>
                                                    <option>Different Camera Hook Up</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="form-group">
                                                <label for="exampleFormControlSelect1">Microphone</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Face Time Camera ( Built IN )</option>
                                                    <option>Different Camera Hook Up</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Speakers</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Face Time Camera ( Built IN )</option>
                                                    <option>Different Camera Hook Up</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal top fade" id="topModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="nav flex-column">
                            <a class="nav-item nav-link active" href="#">Home</a>
                            <a href="#" class="nav-item nav-link">Link</a>
                            <a href="#" class="nav-item nav-link">Link</a>
                            <a href="#" class="nav-item nav-link">Link</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
       
                    <div id="vid_holder">
                        <video id="localVideo" playsinline autoplay></video>
                    </div>     
    </div>

    <div class="card-footer " style="background-color: #009900; color: #ffffff;">
        <div class="row">
            <div class="col-sm-8">
                <a href="#" class="btn btn-success" style="border-radius: 25px; background-color: #009900;" >
                    <i class="fas fa-video" title="Create a Spot" style="color: #FFFFFF; "></i> 
                        Spot Code: maa-ccc-ohm
                </a>
            </div>
            <div class="col-sm-4" >
                <div class="btn-group" style="padding-right: 75px;" role="group" aria-label="Basic example" >
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#leftModal" style="border-radius: 25px; background-color: #009900;"><i class="fas fa-users"></i></button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#rightModal" style="border-radius: 25px; background-color: #009900;"><i class="fas fa-cog"></i></button>
                    <button type="button" class="btn btn-success" style="border-radius: 25px; background-color: #009900;"><i class="fas fa-microphone-slash"></i></button>
                    <button type="button" class="btn btn-success" style="border-radius: 25px; background-color: #009900; "><i class="fas fa-video-slash"></i></button>
                    <button type="button" class="btn btn-success" style="border-radius: 25px; background-color: #FF0000;"><i class="fas fa-phone"></i></button>
                    <button id="startButton" type="button" class="btn btn-success" style="border-radius: 25px; background-color: #009900;"><i class="fas fa-video"></i>
                    </button>
                    <button id="callButton" class="btn-c">
                        <i class="fas fa-phone"></i>
                    </button>
                    <button id="hangupButton" class="btn-x">
                        <i class="fas fa-phone-slash"></i>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@section('additional-js')

@endsection