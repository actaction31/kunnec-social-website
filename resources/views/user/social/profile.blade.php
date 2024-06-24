@extends('layouts.user')
@section('profiletitle',$userData->first_name)
@section('title','Profile')
@section('css/profile')
<link href="{{ asset('public/images/favicon.ico')}}" type="image/x-icon" rel="icon"></link>
<link href="{{ asset('public/user-dash/css/profile.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
        <div class="col-10 mt-2" style="padding: 0px;">
            <p>
                <a href="{{route('social.home')}}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Social
                </a> |&nbsp;
                <a href="{{ route('edit_profile') }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;">
                    </i> 
                </a>
            </p>
        </div>
  
        <div class="col-2 d-flex flex-row-reverse" style="padding: 0px;">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
                </button>
            </p>
        </div>
    </div>
    <div class="collapse" id="collapseSort1">
        <!-- <div class="row p-3">
            <div class="col">
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control" type="text" placeholder="Search Social" aria-label="Search">
                    </div>
                    <div class="ml-2">
                        <button href="#!" class="btn btn-outline-light btn-md my-0 ml-sm-2" type="submit">Search
                        </button>
                    </div>
                </form>
            </div>
        </div> -->
        @include('user.profileFilters')
    </div>	
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --> 
<div class="card">
    <div id="user-profile-2" class="user-profile">
        <div class="tabbable hwstabs" tab-url="{{route('profile',['user_id'=>Crypt::encrypt($userData->id)])}}">
            <ul class="nav nav-tabs padding-18">
                <li class="@if(request()->tab=='home') {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#home">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Profile
                    </a>
                </li>
                <li class="@if(request()->tab=='feed') {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#feed">
                        <i class="green ace-icon fa fa-rss bigger-120"></i>
                        Posts
                    </a>
                </li>
                <li class="@if(request()->tab=='friends') {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#friends">
                        <i class="green ace-icon fa fa-users bigger-120"></i>
                        Kunnecs
                    </a>
                </li>
                <li class="@if(request()->tab=='pictures') {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#pictures">
                        <i class="green ace-icon fas fa-camera bigger-120"></i>
                        Snaps
                    </a>
                </li>
            </ul>

            <div class="tab-content no-border padding-24">
                @if(session()->has('success'))
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="alert alert-success">
                                <strong>{{ session('success') }}</strong>
                            </div>
                        </div>
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="alert alert-danger">
                                <strong>{{ session('error') }}</strong>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row justify-content-center msgClickRespo" style="display: none;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="alert alert-danger">
                            <strong class="msgError">You must be Kunnec'd to send a message.</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 center">
                        <h4 class="blue">
                            <span class="middle" style="text-transform: capitalize;"> {{$userData->username}}</span>
                        </h4>
                        <img  src="{{$userData->image}}" alt="..." class="rounded-circle" width="200px;" height="200px;" style="object-fit: cover;">
                        <div class="space space-4 pt-3">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 center">
                        <div class="row">
                            <div class="col">
                                <div class="d-inline p-2">
                                    <!--
                                    <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:16px;">
                                    <i class="fas fa-globe" style="color: #FA8D0A"></i>  My Kunnec
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button">Kunnec to You</button>
                                        <button class="dropdown-item" type="button">Kunnec Shop</button>
                                        <button class="dropdown-item" type="button">Kunnec Pod</button>
                                        <button class="dropdown-item" type="button">Kunnec Screen</button>
                                        <button class="dropdown-item" type="button">Kunnec Show</button>
                                        <button class="dropdown-item" type="button">Kunnec Course</button>
                                        <button class="dropdown-item" type="button">Kunnec Vid</button>
                                        <button class="dropdown-item" type="button">Kunnec Music</button>
                                        <button class="dropdown-item" type="button">Kunnec Books</button>
                                     </div>
                                     -->
                                </div>
                                @if(Auth::user()->id!=$userData->id)
                                    <div class="d-inline p-2">
                                        @if(!$currFollow)
                                        <a href="{{route('social.followRequest',['follow_user_id'=>$userData->id])}}" type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                                            <i class="fas fa-user-plus"></i> Kunnec To &nbsp;&nbsp;&nbsp<span1 class="badge badge-success"> {{$total_kunnecs}}</span1>
                                        </a>
                                        @else
                                        <a href="{{route('social.followRequest',['follow_user_id'=>$userData->id,'action'=>'reject'])}}" class="btn btn-outline-danger btn-sm " style="border-radius:16px;">
                                            <svg class="svg-inline--fa fa-times-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg> 
                                            @if($currFollow->status=="accepted") DisKunnec @else Cancel Request @endif
                                        </a> 
                                        @endif
                                    </div>
                                    <div class="d-inline p-2">
                                        @if($room_id)
                                        <a href="{{ route('messages',['room_id'=>$room_id]) }}"><button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> <i class="far fa-comments"></i> Message</button></a>
                                        @else
                                        <a href="#" class="disableMsg"><button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> <i class="far fa-comments"></i> Message</button></a>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if($profileView==1)
                        <div class="row ">
                            <div class="col pt-2">
                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                <span style="color: #212529;text-transform: capitalize;">@if($userData->loc_country){{$userData->loc_country->name}} :@endif @if($userData->loc_city){{$userData->loc_city->name}}@endif,
                                @if($userData->loc_state){{$userData->loc_state->name}}@endif</span>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col pb-2">
                                <a href="{{$userData->website}}" target="_blank"><i class="fas fa-globe"></i><small> My Website</small></a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            @if($userData->facebook)
                            <div class="soci_icon">
                                <a href="{{$userData->facebook}}" target="_blank"><i class="fab fa-facebook-square" style="color:#009900;" aria-hidden="true"></i></a>
                            </div>
                            @endif
                            @if($userData->instagram)
                            <div class="soci_icon">
                                <a href="{{$userData->instagram}}" target="_blank"><i class="fab fa-instagram" style="color:#009900;" ></i></a>
                            </div>
                            @endif
                            @if($userData->twitter)
                            <div class="soci_icon">
                                <a href="{{$userData->twitter}}" target="_blank"><i class="fab fa-twitter" style="color:#009900;" ></i></a>
                            </div>
                            @endif
                            @if($userData->pinterest)
                            <div class="soci_icon">
                                <a href="{{$userData->pinterest}}" target="_blank"><i class="fab fa-pinterest" style="color:#009900;" ></i></a>
                            </div>
                            @endif
                            @if($userData->youtube)
                            <div class="soci_icon">
                                <a href="{{$userData->youtube}}" target="_blank"><i class="fab fa-youtube" style="color:#009900;" ></i></a>
                            </div>
                            @endif
                            @if($userData->linkedin)
                            <div class="soci_icon">
                                <a href="{{$userData->linkedin}}" target="_blank"><i class="fab fa-linkedin-in" style="color:#009900;" ></i></a>
                            </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="profile-info-value ml-4">
                                <div class="widget-box transparent">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <p>
                                            {{$userData->headline}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                            <div class="row justify-content-center">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="" style="max-width: 385px;margin: 15px auto;position: relative;color: #ffffff;background-color: #009900;border-color: #c7eed8;padding: 9px;border-radius: 4px;">
                                        <strong><i class="fa fa-lock"></i> This user profile is private!</strong>

                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div id="home" class="tab-pane @if(request()->tab=='home') {{ 'in active' }} @endif">
                    
                </div><!-- End of Profile Tab -->

                <div id="feed" class="tab-pane @if(request()->tab=='feed') {{ 'in active' }} @endif">
                   <hr class="style12">
                    <!-- / This is the top area if the user doesn't have any posts  -->
                    @if($profileView==1)
                        @if($posts->total()>0)
                            @include('user.social.userPostTable')
                        @else 
                        <div class="row justify-content-center">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="" style="max-width: 385px;margin: 15px auto;position: relative;color: #ffffff;background-color: #009900;border-color: #c7eed8;padding: 9px;border-radius: 4px;">
                                    <strong><i class="fa fa-lock"></i> {{$userData->username}} does not have any posts !!</strong>

                                </div>
                            </div>
                        </div>
                        @endif
                    @endif
                </div>
                
                <div id="friends" class="tab-pane @if(request()->tab=='friends') {{ 'in active' }} @endif">
                    <hr class="style12">
                    {{--
                    @if($followRequests)
                        @if($followRequests->total()>0)
                            <h6 class="border-bottom border-gray pb-2 mb-0">Kunnec Requests</h6>
                            <div class="profile-users clearfix">                       
                            @foreach($followRequests as $followRequest)
                                <div class="itemdiv memberdiv">
                                    <div class="inline pos-rel">
                                        <div class="user">
                                            <a href="{{route('profile',['user_id'=>Crypt::encrypt($followRequest->id)])}}">
                                                <img src="{{$followRequest->image}}" alt="Bob Doe's avatar">
                                            </a>
                                        </div>
                                        <div class="body">
                                            <div class="name">
                                                <a href="{{route('profile',['user_id'=>Crypt::encrypt($followRequest->id)])}}">
                                                <span class="user-status status-online"></span>
                                                {{$followRequest->first_name}}
                                                </a>
                                            </div>
                                        </div> 
                                        <a href="{{route('social.followRequest',['follow_user_id'=>$followRequest->id,'action'=>'accept'])}}" class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                                            <svg class="svg-inline--fa fa-user-plus fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg> Accept Request
                                        </a>
                                        
                                        <a href="{{route('social.followRequest',['follow_user_id'=>$followRequest->id,'action'=>'reject'])}}" class="btn btn-outline-danger btn-sm " style="border-radius:16px;">
                                            <svg class="svg-inline--fa fa-times-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg> Delete Request
                                        </a>  
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        @endif
                    @endif
                    --}}
                    <!-- / This is the top area if the user doesn't have any kunnecs  -->
                    @if($profileView==1)
                        <h6 class="border-bottom border-gray pb-2 mb-0">Kunnecs</h6>
                        @if($followProfiles->total()>0)
                            <!-- This is the area where kunnecs begin-->
                            <div class="profile-users clearfix">                       
                            @foreach($followProfiles as $followProfile)
                                <div class="itemdiv memberdiv">
                                    <div class="inline pos-rel">
                                        <div class="user">
                                            <a href="{{route('profile',['user_id'=>Crypt::encrypt($followProfile->id)])}}">
                                                <img src="{{$followProfile->image}}" alt="Bob Doe's avatar">
                                            </a>
                                        </div>
                                        <div class="body">
                                            <div class="name">
                                                <a href="{{route('profile',['user_id'=>Crypt::encrypt($followProfile->id)])}}">
                                                <span class="user-status status-online"></span>
                                                {{$followProfile->first_name}}
                                                </a>
                                                @if(Auth::user()->id==$userData->id)
                                                <a href="{{route('social.followRequest',['follow_user_id'=>$followProfile->id,'action'=>'reject'])}}" class="btn btn-outline-danger btn-sm " style="border-radius:16px;    display: block;">
                                                    <svg class="svg-inline--fa fa-times-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg> DisKunnec
                                                </a>
                                                @endif  
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        @else
                        <div class="row justify-content-center">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="" style="max-width: 385px;margin: 15px auto;position: relative;color: #ffffff;background-color: #009900;border-color: #c7eed8;padding: 9px;border-radius: 4px;">
                                    <strong><i class="fa fa-lock"></i> {{$userData->username}} has not kunnected with anyone !!</strong>

                                </div>
                            </div>
                        </div>
                        @endif
                    
                    <div class="hr hr10 hr-double"></div>
                    @endif
                </div><!-- /#End of Kunnecs -->

                <div id="pictures" class="tab-pane @if(request()->tab=='pictures') {{ 'in active' }} @endif">
                    <hr class="style12">

                    <!-- / This is the top area if the user doesn't have any kunnecs  -->
                    @if($profileView==1)
                    @if($snaps)    
                        @if($snaps->total()>0)
                            @include('user.social.userSnapTable')

                        @else
                            <div class="row justify-content-center">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="" style="max-width: 385px;margin: 15px auto;position: relative;color: #ffffff;background-color: #009900;border-color: #c7eed8;padding: 9px;border-radius: 4px;">
                                        <strong><i class="fa fa-lock"></i> {{$userData->username}} does not have any snaps !!</strong>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-js')
<script type="text/javascript">
    
</script>
@endsection

@if($snaps) 
@if($snaps->total()>0)
    @foreach($snaps as $snap)
        <div class="modal fade" id="snapModal_{{$snap->id}}" tabindex="-1" role="dialog" aria-labelledby="snapModal{{$snap->id}}Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #009900; ">
                        <div class="row">
                            <div class="col">
                                <img  src="{{$snap->user->image}}" alt="..." class="rounded-circle" width="50px;" height="50px;" style="object-fit: cover;"><span class="middle"  style="color: #ffffff;"> {{$snap->user->first_name}} {{$snap->user->last_name}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body text-center">
                        
                        <!-- <span class="p-2">
                            <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> <i class="ace-icon fa fa-plus-circle bigger-120"></i> Kunnec To &nbsp;&nbsp;&nbsp<span1 class="badge badge-success"> 24</span1></button>
                        </span> -->
                        @if($room_id)
                        <span class="p-2">
                        <a href="{{ route('messages',['room_id'=>$room_id]) }}"><button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> <i class="far fa-comments"></i> Message</button></a>
                        </span>
                        @endif
                        <div class="box-info full">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#snap_{{$snap->id}}" data-toggle="tab"><i class="fa fa-heart"></i> Likes  &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger">@if($snap->likes) {{count($snap->likes)}}@else 0 @endif</span1></a>
                                </li>
                                <li>
                                    <a href="#comments_{{$snap->id}}" data-toggle="tab" ><i class="fa fa-comments"></i> Comments &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> {{$snap->comments_count}}</span1></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active animated fadeInRight" id="snap_{{$snap->id}}">
                                    <div class="scroll-widget">
                                        <figure class="snip2139">
                                            <blockquote>{!! $snap->descriptions !!}<div class="arrow"></div></blockquote>

                                            @if($snap->snapfiles)
                                                @if(count($snap->snapfiles)==1)
                                                <img src="{{$snap->lastfile->file}}" alt="sample3" width="400px" height="375px"/>
                                                @else
                                                    <div id="snapcarousel_{{$snap->id}}" class="carousel slide carousel-fade" data-ride="carousel">
                                                        <!--Slides-->
                                                        <div class="carousel-inner" role="listbox">
                                                            @foreach($snap->snapfiles as $index=>$sanpfile)
                                                            <div class="carousel-item @if($index==0)active @endif">
                                                                <div class="view">
                                                                    <img src="{{$sanpfile->file}}" alt="sample3" width="400px" height="375px"
                                                                    alt="First slide">
                                                                    <div class="mask rgba-black-light">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>

                                                        <!--Controls-->
                                                        <a class="carousel-control-prev" href="#snapcarousel_{{$snap->id}}" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#snapcarousel_{{$snap->id}}" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                        <!--/.Controls-->
                                                    </div>
                                                @endif
                                            @endif
                                        </figure>   
                                    </div>
                                </div><!-- End div .tab-pane -->
              
                                <!-- Comment  Tab -->
                                <div class="tab-pane animated fadeInRight" id="comments_{{$snap->id}}">
                                    <!-- Begin scroll wrappper -->
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 325px;">
                                        <div class="scroll-widget12" style="overflow: auto; width: auto; height: 325px;">
                                            <ul class="media-list" id="snapCmtBlock_{{$snap->id}}">
                                                @include('user.social.snapCommentTable')
                                                
                                            </ul>
                                        </div>
                                        <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; background: rgb(134, 134, 134);">
                                        </div>
                                        <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);">
                                        </div>
                                    </div><!-- End div .scroll-widget -->
                                    <div class="box-footer">
                                        <div class="d-flex align-items-center border-top border-200 pt-3">
                                            <div class="avatar avatar-xl">
                                                <img class="rounded-circle" src="{{Auth::user()->image}}" alt="" style="    object-fit: cover;width: 34px;height: 34px;">
                                            </div>
                                            <input class="form-control rounded-capsule ml-2 fs--1 snapCommentInput snapCmtInput_{{$snap->id}}" data-id="{{$snap->id}}" type="text" placeholder="Write a comment..." />
                                            <div class="postComment">
                                               <button class="btn btn-success btn-sm snapComtBtn" data-id="{{$snap->id}}">Post</button>
                                           </div> 
                                        </div>
                                    </div>
                                </div><!-- End div .tab-pane -->
                            </div><!-- End div .tab-content -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close Snap
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     @endforeach 
@endif
@endif