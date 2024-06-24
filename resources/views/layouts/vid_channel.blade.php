<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('public/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('public/user-dash/css/home_navsb.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/shop_card.css') }}" />
    @yield('css/course')
    <link rel="stylesheet" type="text/css"  href="{{ asset('public/../../user-dash/k_vid/content/global.css') }}"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    
	
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


<body>

    @yield('content')
    <!-- End Wrapper -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user-dash/js/sbt.js') }}"></script>
    <script src="{{ asset('public/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/libs/@fortawesome/all.min.js') }}"></script> 
    @yield('additional-js')
    
</body>
</html>