<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <link href="{{ asset('public/images/favicon.ico')}}" type="image/x-icon" rel="icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('public/user-dash/css/home_navsb.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/shop_card.css') }}" />
    @yield('css/course')
	<!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit()  {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <!-- google translator -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

</head>
<style type="text/css">

video{
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position:absolute;
    left: 0;
    margin-top: -20px;
}
.modal .modal-dialog {
	position: fixed;
	margin: auto;
	width: 520px;
	height: 100%;
	transform: translate3d(0%, 0, 0);
}
.modal .modal-content {
	height: 100%;
	overflow-y: auto;
}
.modal .modal-body {
	padding: 15px 15px 80px;
}

.modal.middle.fade .modal-dialog {
	left: -520px;
	transition: opacity 0.1s linear, left 0.1s ease-out;
}
.modal.middle.fade.show .modal-dialog {
	left: 0;
}

.modal.left.fade .modal-dialog {
	left: -520px;
	transition: opacity 0.1s linear, left 0.1s ease-out;
}
.modal.left.fade.show .modal-dialog {
	left: 0;
}
.modal.right.fade .modal-dialog {
	right: -520px;
	transition: opacity 0.1s linear, right 0.1s ease-out;
}
.modal.right.fade.show .modal-dialog {
	right: 0;
}

/* ----- MODAL STYLE ----- */
.modal-content {
	border-radius: 0;
	border: none;
}
.modal-header {
	border-bottom-color: #eeeeee;
	background-color: #fafafa;
}

/* ----- v CAN BE DELETED v ----- */
.container {
	padding-top: 2rem;
}
.btn {
	margin-bottom: 2rem;
}

</style>

<!-- Modal Kunnec Social -->
<div class="modal fade" id="inviteModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal7Label" aria-hidden="true">
        <div class="modal-dialog modal-x6" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Social</h2>
                    <span><img class="mx-auto d-block" src="images/K_Logo6.png" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <video width="100%" controls><source src="{{asset('promo_vids/k_intro.mp4')}}" type="video/mp4"> </video>
                    <p class="mb-5"><strong></strong> Under this a section, you can stay connected with everyone. You can post images, speak about yourself, and scroll through your feed of your kunnecs.</p>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<body>
    <!-- Spot Modal-->
    <div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #009900;" >
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #FFFFFF; ">Create Your New Spot</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                <p class="fs--1 mb-2 mb-md-3"><img src="{{asset('user-dash/images/users/profiles/5.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</p>
                    <h5>This is your Kunnec Spot code</h5>
                    <p class="fs--1">Share this code with your Kunnec's. Up to 9 in your spot.</p>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputSpot" aria-describedby="spotHelp" placeholder="spot.kennec.com/maa-ccc-ohm">
                        <small id="spotHelp" class="form-text text-muted">Save this Code. Send code to Kunnec's to enter your spot.</small>
                    </div>
				</div>
                <div class="modal-footer justify-content-center" >
                    <a href="k_spot_stream" class="btn btn-success"  style="border-radius: 25px; background-color: #009900;" >
                        <i class="fas fa-video" title="Open Your Spot" style="color: #FFFFFF; "></i>
                         Open Your Spot
                    </a>
                </div>
            </div>
        </div>
    </div>

@yield('content')
<script  type="text/javascript" src="{{ asset('public/user-dash/js/flpnt.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/scrndsktp.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/clktim.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/qz.js') }}"></script>
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/main.js') }}"></script>

    <script src="{{ asset('public/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user-dash/js/sbt.js') }}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/libs/@fortawesome/all.min.js') }}"></script>
    @yield('additional-js')
    @yield('js/world')
    @yield('js/imgprv.js')
</body>
</html>