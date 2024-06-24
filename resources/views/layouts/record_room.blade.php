<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <link href="{{ asset('public/images/favicon.ico')}}" type="image/x-icon" rel="icon">
    <link rel="stylesheet" href="{{ asset('public/css/app.css')}}">
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
      .opportunity-list {
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
      }

      .op-list{
        float: left;
        margin-left:20px;
      }
      .btn {
        border-radius:0px;
      }

      .jumbotron{
        background-color: white !important;
        margin-top:10px;
      }
      .card {
        background-color: white;
        margin-bottom: 10px;
      }
      .card-footer {
        background-color: white;
      }
      .card-header {
        background-color: white;
      }
      a {
        border-radius: 0px;
      }
      .form-control {
        border-radius: 0px;
      }
      button {
        border-radius: 0px;
      }
      .jumbotron{
        border-radius: 0px;
      }
      html {
       scroll-behavior: smooth;
      }

    .modal-dialog-pic {
        max-width:700px;
        margin:1.75rem auto;
        }

    .box-info {
    position: relative;
    padding: 15px;
    background: #fff;
    color: #5b5b5b;
    margin-bottom: 20px;
    -webkit-transition: All 0.4s ease;
    -moz-transition: All 0.4s ease;
    -o-transition: All 0.4s ease;
    background:#FFFFFF;
    margin-top:20px;
}
.box-info .nav-tabs {
    background: #FFFFFF;
}

.box-info .nav-tabs  li.active  a, .box-info .nav-tabs  li.active  a:hover, .box-info .nav-tabs  li.active  a:focus {
    cursor: default;
    border-top: none;
    border-right: none;
    border-left: none;
    border-bottom: none;
    background-color: #ffffff;
    color: #009900;
}

.box-info .nav-tabs  li.active  a i, .box-info .nav-tabs  li.active  a:hover i, .box-info .nav-tabs  li.active  a:focus i {
    color: #212121;
}
.box-info .nav-tabs  li  a i {
    color: #fff;
}

.box-info.full .box-footer {
    padding: 20px 20px 15px 20px;
}

.box-info .media-list {
    margin-top: 30px;
}

.box-info .media-list .media {
    padding: 5px 20px;
    border-bottom: 1px solid #eaeaea;
}

.box-info .media-list .media .media-object {
    width: 50px;
}

.scroll-widget{
    width: auto;
    height: 500px;
}

figure.snip2139 {
    font-family: 'Raleway', Arial, sans-serif;
    position: relative;
    float: left;
    overflow: hidden;
    margin: 10px 1%;
    min-width: 220px;
    max-width: 390px;
    width: 100%;
    color: #333;
    text-align: left;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    border-radius: 8px;
  }
  figure.snip2139 * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
    transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  }
  figure.snip2139 img {
    max-width: 100%;
    max-height: 100%;
    vertical-align: middle;
  }
  figure.snip2139 blockquote {
    position: relative;
    background-color: #ffffff;
    padding: 25px 50px 25px 50px;
    font-size: 0.8em;
    font-weight: 500;
    text-align: left;
    margin: 0;
    line-height: 1.6em;
    font-style: italic;
  }
  figure.snip2139 blockquote:before,
  figure.snip2139 blockquote:after {
    font-family: 'FontAwesome';
    content: "\201C";
    position: absolute;
    font-size: 50px;
    opacity: 0.3;
    font-style: normal;
  }
  figure.snip2139 blockquote:before {
    top: 25px;
    left: 20px;
  }
  figure.snip2139 blockquote:after {
    content: "\201D";
    right: 20px;
    bottom: 0;
  }
  figure.snip2139 .arrow {
    top: 100%;
    width: 0;
    height: 0;
    border-left: 0 solid transparent;
    border-right: 25px solid transparent;
    border-top: 25px solid #ffffff;
    margin: 0;
    position: absolute;
  }
  figure.snip2139 .author {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 5px 25px;
    color: #000000;
    background-color: #ffffff;
    margin: 0;
    text-transform: uppercase;
  }
  figure.snip2139 .author h5 {
    opacity: 0.8;
    margin: 0;
    font-weight: 800;
  }
  figure.snip2139 .author h5 span {
    font-weight: 400;
    text-transform: none;
    padding-left: 5px;
  }

  ul.media-list{
    background-color: #ffffff;
    margin-left: -60px;
  }

  li img.media-object{
     padding-right: 10px;
  }

  h6.media-heading{
      font-size: 10px;
  }

  .media-body p{
    font-size: 13px;
  }
  
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');

*{
	margin: 0;
	padding: 0;
  font-family: 'Montserrat', sans-serif;
}

button{
  padding: 8px;
  width: 100px;
  border: 2px solid white;
  background-color: transparent;
  color: white;
  cursor: pointer;
  border-radius: 5px;
  transition: 0.3s ease-out;
}

button:hover{
  transform: scale(1.05);
}

button1{
  padding: 8px;
  width: 100px;
  border: 2px solid #009900;
  background-color: transparent;
  color: #009900;
  cursor: pointer;
  border-radius: 5px;
  transition: 0.3s ease-out;
}

button1:hover{
  transform: scale(1.05);
}


.container-fluid{
	width: 100%;
	overflow: hidden;
}

.pages {
	width: 100%;
}

.page {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
	gap: 10px;
  transition: all 0.7s;
  color: blue;
}

.one{
  background: #ffffff;
}

.two{
  background-color: #e9ffd;
}

.three{
  background-color: indigo;
}

.four{
  background-color: limegreen;
}

.navbar{
    height: 8%;
    width: 100%;
}
</style>

<body>

    <!-- Record Room Exit Modal -->
    <div class="modal fade" id="record_roomModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{ asset('public/images/K_Logo5.png') }}" height="40px" width="60px"/>
                    <h4 class="modal-title" id="exampleModalLabel" style="color: #000000">Are you sure you want to exit session?</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h4>Oracle DBA 11g/12c - Database Administration for Junior DBA</h4>
                    <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Tutor: </small><img src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</p>
                    <h6 class="d-flex align-items-center"><span class="text-warning mr-2">400 Credits</span><span class="mr-1 fs--1 text-500"> per 15 mins.</h6>
                    <h6 class="d-flex align-items-center"><span class="text-dark mr-2">Paid:</span><span class="mr-1 fs--1 text-500"> 800 credits.</h6>
                    <h6 class="d-flex align-items-center"><span class="text-dark mr-2">Session Time:</span><span class="mr-1 fs--1 text-500"> 27 minutes.</h6>
                    <h6 class="d-flex align-items-center"><span class="text-success mr-2">Please Comment and Rate on my details page.</span></h6>
                    <h6 class="d-flex align-items-center"><span class="text-dark mr-2">Thank You for your time.</span></h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-sm" type="button"><a href="{{ url('k_screen/recording/record_details') }}" target="_self">Yes</a></button>
                    <button class="btn btn-danger btn-sm" type="button"  data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>


    

@yield('content')
    <!-- End Wrapper -->

    <!-- End files  -->
    <!-- Sidebar Toggle -->
    
    
    
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user-dash/js/sbt.js') }}"></script>
    <script src="{{ asset('public/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/libs/@fortawesome/all.min.js') }}"></script>
    @yield('additional-js')
    @yield('js/world')
    @yield('js/imgprv.js')
</body>
</html>