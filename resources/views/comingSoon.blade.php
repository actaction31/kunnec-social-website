@extends('layouts.app')
@section('additional-css')
<title>{{ config('app.name', 'Kunnec | Coming Soon') }}</title>
<style type="text/css">
    .navbar{
        display: none;
    }
    .home_text {
        text-align: center;
        font-size: 35px;
        font-weight: bold;
        color: #908889;
        line-height: 42px;
    }
    .footer_top {
        font-size: 50px;
        text-align: center;
        font-weight: bold;
        position: absolute;
        bottom: 40px;
        display: inherit;
        right: 0px;
        left: 0px;
        color: #000;
    }
    .hmpg_lg {
        height: 40vw;
        background-size: contain;
        max-height: 260px;
    }
    .sky{
        padding-bottom: 105px;
    }
</style>
@endsection
@section('content')
    <!-- Sky Background -->
    <div class="sky">
        <div class="container">
            <div class="hmpg_lg"> <!-- Logo -->
            </div>
            <div class="home_text">Thank You for dropping by</div>
            <div class="footer_top">Coming Soon11111</div>
        </div><!-- End of Container-->
    </div><!-- End of Sky -->

    <!-- Footer -->
    <footer>
        <div class="copyright_k">Kunnec &copy; <?php echo date("Y"); ?></div>
    </footer>
@endsection
@section('additional-js')
<script type="text/javascript">
    $(document).ready(function(){
        var screen_h=$(window).height();
        var foot_h=$("footer").height();
        var main_content=screen_h-foot_h-10;
        $(".sky").css("min-height",main_content);
        $(window).resize(function(){
            screen_h=$(window).height();
            main_content=screen_h-foot_h-10;
            $(".sky").css("min-height",main_content);
        });
    });
    
</script>
@endsection
