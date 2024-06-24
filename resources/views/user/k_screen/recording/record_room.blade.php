@extends('layouts.record_room')
@section('title', 'Screen Room')
@section('css/course')
<link href="{{ asset('public/user-dash/css/course.css') }}" rel="stylesheet"></link>
@endsection
@section('content')


<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-custom " style="background-color: #009900;">
        <div class="col">
            <img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/>
            
        </div>
        <div class="col-sm-2">
           <h3 class="card-title mt-2 "><img src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image"><font color="#FFFFFF" style="font-size:18px"> {{Auth::user()->username}} Session</font></h3> 
           <h5 style="color:#FFFFFF;"><time>00:00:00</time></h5>
        </div>
        <div class="col-sm-8">
            <button class="btn-d" type="button" id="start">
                <i class="fas fa-desktop fa-1x"></i>
            </button>&nbsp;
            <button class="btn-ds" type="button" id="stop">
                <i class="fas fa-ban fa-1x"></i>
            </button>
            <button id="startButton" class="btn-d">
                <i class="fas fa-video"></i>
            </button>
            <button id="callButton" class="btn-d">
                <i class="fas fa-microphone"></i>
            </button>
            <button id="hangupButton" class="btn-d">
                <i class="fas fa-phone-slash"></i>
            </button>
            <button class="btn-ps" id="stop_cl"><i class="fas fa-pause"></i></button>&nbsp;<button class="btn-p" id="start_cl"><i class="fas fa-play"></i></button>
        </div>
        <div class="col">
      <button class="btn btn-danger btn-sm mt-2" type="button" href="#!" data-toggle="modal" data-target="#record_roomModal" id="">
                                        Exit Session
                                    </button>
    </div>
        <div class="container-fluid">
             
            
            &nbsp; &nbsp;		
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FFFFFF; color: #009900; border-color: #009900;">
                <i class="fas fa-align-justify"></i>
            </button>
                        
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    
                                    <br class="d-none d-sm-block">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    
    <div class="pages">
        <div class="page one">
            <div id="mydiv">
                <!-- Include a header DIV with the same name as the draggable DIV, followed by "header" -->
                <div id="mydivheader">
                    <img src="{{ asset('public/user-dash/images/users/profiles/25.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">  {{Auth::user()->username}}
                </div>
                    
                <div id="vid_holder">
                    <video id="localVideo" playsinline autoplay></video>
                </div>     
            </div>
            <div>
                <div id="mydiv2">
                    <!-- Include a header DIV with the same name as the draggable DIV, followed by "header" -->
                    <div id="mydivheader2">
                        <img src="{{ asset('public/user-dash/images/users/profiles/17.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image">  Michael ( GUEST )
                    </div>
                    <div id="vid_holder">
                        <video id="remoteVideo" playsinline autoplay></video>
                    </div> 
                    <div class="row">
                        <div class="col-sm">
                            <a class="btn btn-sm mt-2 pl-2" href="#!" style="background-color:#009900; color:#FFFFFF;">Download FIle</a>
                        </div>
                    </div>	
                </div> 
                <button onClick="slide('next')">Guest Page</button>
            </div>
            <video id="desktop" autoplay></video>
        </div>
        <!-- Add later 
        <div class="page two">
            <h1>PAGE 2</h1>
            <div>
                <button onClick="slide('prev')">Previous</button>
            </div>
        </div>
        -->
    </div>
</div>

   
    




<div class="col-sm">
    <?php
        if (isset($_SESSION['message']) && $_SESSION['message'])
        {
            printf('<b>%s</b>', $_SESSION['message']);
            unset($_SESSION['message']);
        }
    ?>
</div>

<pre id="log"></pre>

<script src="lib/ga.js"></script>

<script type="text/javascript">
        const pages = document.querySelectorAll(".page");
    const translateAmount = 100; 
    let translate = 0;

    slide = (direction) => {

      direction === "next" ? translate -= translateAmount : translate += translateAmount;

      pages.forEach(
        pages => (pages.style.transform = `translateY(${translate}%)`)
      );
    }
    </script>

<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("mydiv"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>

<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("mydiv2"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header2")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header2").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>

@endsection
@section('additional-js')
<script  type="text/javascript" src="{{ asset('public/user-dash/js/flpnt.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/scrndsktp.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/clktim.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/qz.js') }}"></script>
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/main.js') }}"></script>
@endsection