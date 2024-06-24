@extends('layouts.interview')
 @section('title', 'Kunnec Interview')
 @section('css/course')
<link href="{{ asset('public/user-dash/css/course.css') }}" rel="stylesheet"></link>

@endsection
@section('content')


<div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-custom rounded" style="background-color: #009900;">
        <div class="container-fluid">
            <img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/>
            <h3 class="card-title mt-2 ml-3"><img src="{{asset('user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image"><font color="#FFFFFF" style="font-size:18px"> {{Auth::user()->username}} Show</font></h3>
            &nbsp; &nbsp;<h5 style="color:#FFFFFF;"><time>00:00:00</time></h5>
            &nbsp; &nbsp;<p class="mt-2"><button class="btn-ps" id="stop_cl"><i class="fas fa-pause"></i></button>&nbsp;<button class="btn-p" id="start_cl"><i class="fas fa-play"></i></button></p>		
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FFFFFF; color: #009900; border-color: #009900;">
                <i class="fas fa-align-justify"></i>
            </button>
                        
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-danger btn-sm mt-2" type="button" href="{{ url('k_me/k2me_f2f') }}" data-toggle="modal" data-target="#show_roomModal" id="">
                                        Exit Show
                                    </button>
                                    <br class="d-none d-sm-block">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card ml-2 mr-2 mb-3 pl-3 pt-3 pb-3 pr-3">
        <div class="row">
            <div class="col-8">
                <div id="mydivheader">
                        <img src="{{asset('user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">  {{Auth::user()->username}} | 
                        <span class="text-warning mr-2">400 Credits</span><span style="color: #FFFFFF;"> per 15 mins. </span>
                </div>
                <video autoplay="true" id="videoElement">
            </div>
            <div class="col-sm-4">
                <div id="mydivheader">
                        <img src="{{asset('user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">  {{Auth::user()->username}} | Vistor Chat
                </div>
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 550px; padding-top: 10px;">
                    <div class="chat-list-wrapper" style="overflow-y: auto; width: auto; height: 550px;">
                        <ul class="chat-list" style="list-style: none;">
                            <li>
                                <span>
                                <img src="{{asset('user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                </span>
                                <div class="body">
                                    <div class="header">
                                        <span class="username">Gavin Free</span>
                                        <small class="timestamp text-muted">
                                            <i class="far fa-clock"></i> 1 secs ago
                                        </small>
                                    </div>
                                    <p>
                                       Hey, have you finished up with the Ladybug project?
                                    </p>
                                </div>
                            </li>  
                            <li class="active">
                                <span>
                                <img src="{{asset('user-dash/images/users/profiles/24.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                </span>
                                <div class="body">
                                    <div class="header">
                                        <span class="username">Yanique Robinson</span>
                                        <small class="timestamp text-muted">
                                            <i class="far fa-clock"></i> 3 secs ago
                                        </small>
                                    </div>
                                    <p>
                                        Cool. I'll see you guys then.
                                    </p>
                                </div>
                            </li>  
                            <li>
                                <span>
                                <img src="{{asset('user-dash/images/users/profiles/18.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                </span>
                                <div class="body">
                                    <div class="header">
                                        <span class="username">Ryan Haywood</span>
                                        <small class="timestamp text-muted">
                                            <i class="far fa-clock"></i> 12 mins ago
                                        </small>
                                    </div>
                                    <p>
                                        Kevin, tomorrow is GoT night at my house. Bring your HDMI extension. Thanks.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span>
                                <img src="{{asset('user-dash/images/users/profiles/14.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                </span>
                                <div class="body">
                                    <div class="header">
                                        <span class="username">Geoff Ramsey</span>
                                        <small class="timestamp text-muted">
                                            <i class="far fa-clock"></i> 1 hour ago
                                        </small>
                                    </div>
                                    <p>
                                        Sales want to see you. Something about the new product.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span>
                                <img src="{{asset('user-dash/images/users/profiles/22.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                </span>
                                <div class="body">
                                    <div class="header">
                                        <span class="username">Kara Mendly</span>
                                        <small class="timestamp text-muted">
                                            <i class="far fa-clock"></i> 5 hours ago
                                        </small>
                                    </div>
                                    <p>
                                        Meeting next week Tuesday. Nothing serious, just bring teams work progress with you.
                                    </p>
                                </div>
                            </li> 
                            <li>
                                <span>
                                <img src="{{asset('user-dash/images/users/profiles/17.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                </span>
                                <div class="body">
                                    <div class="header">
                                        <span class="username">Jack Patillo</span>
                                        <small class="timestamp text-muted">
                                            <i class="far fa-clock"></i> 12 mins ago
                                        </small>
                                    </div>
                                    <p>
                                        hey, what does this error mean?
                                    </p>
                                </div>
                            </li>  
                        </ul>
                    </div>
                    <div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 478.639px; background: rgb(0, 0, 0);"></div>
                    <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
                </div>
                <div class="compose-box mt-3">
                        <div class="row">
                            <div class="col-sm-12 mg-btm-10">
                                <textarea id="btn-input" class="form-control input-sm" placeholder="Type your message here..."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 ml-1"> 
                                <button class="btn btn-green btn-sm pull-right">
                                    <i class="fa fa-location-arrow"></i> Send
                                </button>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('additional-js')

<script>
var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}

function stop(e) {
  var stream = video.srcObject;
  var tracks = stream.getTracks();

  for (var i = 0; i < tracks.length; i++) {
    var track = tracks[i];
    track.stop();
  }

  video.srcObject = null;
}

</script>


<script  type="text/javascript" src="{{ asset('public/user-dash/js/clktim.js') }}"></script>
@endsection