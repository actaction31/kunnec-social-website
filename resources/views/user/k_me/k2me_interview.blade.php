@extends('layouts.show_room')
 @section('title', 'Kunnec Job Interview')
 @section('css/course')
<link href="{{ asset('public/user-dash/css/course.css') }}" rel="stylesheet"></link>

@endsection
@section('content')


<div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-custom rounded" style="background-color: #009900;">
        <div class="container-fluid">
            <img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/>
            <h3 class="card-title mt-2 ml-3"><img src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image"><font color="#FFFFFF" style="font-size:18px"> {{Auth::user()->username}} Interview</font></h3>
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
                                    <button class="btn btn-danger btn-sm mt-2" type="button">
                                        <a href="{{ url('k_me/k2me_f2f') }}" style="color: #ffffff; font-size: 12px;">Exit Interview</a>
                                    </button>
                                    
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
            <div class="col-sm-6">
                <div id="mydivheader">
                    <img src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">  {{Auth::user()->username}} | 
                </div>
                <video autoplay="true" id="videoElement">
            </div>
            <div class="col-sm-6">
                <div id="mydivheader">
                    <img src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">  {{Auth::user()->username}} | 
                </div>
                <video autoplay="true" id="videoElement">
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