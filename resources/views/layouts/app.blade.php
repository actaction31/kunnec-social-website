<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Kunnec is everything all in one. We value your privacy, freedom of speech and your data belongs to you. We don't sell your data to third parties.
    ">
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <link href="{{ asset('public/images/favicon.ico')}}" type="image/x-icon" rel="icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {!! NoCaptcha::renderJs() !!}

    <!-- GOOGLE Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107694954-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-107694954-1');
    </script>

    <!-- GOOGLE TRANSLATE -->
    <script type="text/javascript">
        function googleTranslateElementInit() { 
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <!-- Styles -->
    <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    @yield('additional-css')
    <style>
        .field-icon {
            position: absolute;
            z-index: 2;
            top: 19px;
            right: 26px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('landing') }}">
                <div class="navbar_brand">
                </div>
                <div class="text-white">
                    Kunnec
                </div>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mb-lg-2">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="sr-only"></span></a>
                    </li>
                    <div id="google_translate_element">
                    </div>
                </ul>
                @if(!Auth::check())
                <div class="form-inline my-2 my-lg-0">
                    <form action="{{ route('signin') }}" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="timezone" id="timezone">
                        <div class="form-group row">
                            <div class="col-lg-4 col-md-4">
                                <input class="form-control mr-sm-2" type="search" placeholder="Username Or Email"
                                    name="email" value="{{ old('email') }}" required autofocus style="width:100%;">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <input class="form-control mr-sm-2 my-2" type="password" placeholder="Password"
                                    name="password" required style="width:100%;" id="password-field">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <button class="btn btn-danger" type="submit" style="">Sign In</button>
                                @if(Request::segment(1) !='register')
                                <a href="{{ url('/register') }}" class="btn btn-warning" style="">
                                    <font color="#FFFFFF">Sign Up</font>
                                </a>
                                @endif
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <a href="{{ route('password.request') }}">
                                    <font color="FFFFFF">Forgot Password?</font>
                                </a>
                            </div>

                        </div>
                    </form>

                    @if($errors->login->any())
                    <div class="alert alert-dismissible alert-danger">
                        @foreach ($errors->login->all() as $error)
                        {!! $error !!}
                        @endforeach
                    </div>
                    @endif
                </div>
                @else
                <a class="nav-link" href="{{route('dash')}}" style="color: #fff;">Dashboard</a>
                <a class="nav-link" href="{{route('logout')}}" style="color: #fff;">Sign-Out</a>
                @endif
            </div>
        </div>
    </nav>
    <!-- End of Navbar-->
    @yield('content')
    <!-- Scripts -->
    <!-- <script src="{{ asset('public/js/app.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js">
    </script>
    <script>
        $( document ).ready(function() {
            $('#timezone').val(moment.tz.guess())
        });
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });        
    </script>
    @yield('additional-js')
</body>

</html>