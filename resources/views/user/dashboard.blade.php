@extends('layouts.user')
@section('title', 'Home | Members')
@section('additional-css')
@endsection
<style type="text/css">
  
</style>
@section('content')

<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
        <div class="col-lg-6 col-md-5 col-sm-4" style="color: #fff;margin: 10px 0px;">
            <img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"> Kunnec |&nbsp;
            <button class="btn btn-warning rounded-capsule mr-1 mb-1" type="button">
                <a href="{{ url('tutorial/instruct_vids') }}"> Kunnec Tutorials </a>
            </button>
    </div>
    <div class="col-lg-6 col-md-7 col-sm-8 welcome_text">
      <small> Welcome {{Auth::user()->username}}, enjoy your day!</small>
    </div>
  </div>
</div>

<div class="row no-gutters">
    {{-- <i class="fas fa-angle-right"></i> --}}
    <div class="col-lg-8 pr-lg-2 mainContents">
        <!-- Create post -->
        <div class="card mb-3">
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
            <div class="card-header bg-light">
                <div class="media align-items-center">
                    <div class="avatar avatar-m">
                        <img class="rounded-circle" src="{{Auth::user()->image}}" alt="" />
                    </div>
                    <div class="media-body ml-2">
                        <h5 class="mb-0 fs-0 cccc">
                           Create post
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <form method="POST" action="{{route('post.create')}}" enctype="multipart/form-data">
                    @csrf
                    <textarea class="form-control border-0 rounded-0 resize-none" type="text" placeholder="Type your post here!" rows="4" name="post_content"></textarea>
                    <span class="hws_error text-right text-danger" style="padding-left: 20px;">{{ $errors->first('post_content') }}</span>
                    <div class="d-flex align-items-center border-y px-3 mt-1">
                        <label class="text-nowrap mb-0 mr-2" for="hash-tags"><span class="fas fa-plus mr-1 fs--2"></span><span class="font-weight-regular">Add hashtag</span>
                        </label>
                        <input class="form-control border-0 fs--1" id="hash-tags" type="text" placeholder="Help the right person to see" name="tag"/>
                    </div>
                    <div class="row no-gutters justify-content-between mt-3 px-3 pb-3">
                        <div class="col-sm-12">
                          <label style="display: block;"><img class="cursor-pointer" src="{{ asset('public/user-dash/images/illustrations/image.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Snap / Video</span></label>
                          <input type="file" name="images[]" class="" id="images" multiple style="margin-bottom: 20px;">
                          <div class="post_files">
                            <div class="row">
                              {{--<div class="col-lg-4 file_block">
                                 <img src="http://localhost/kunnec/user-dash/images/users/profiles/1636973613_image.jpg" class="selected_file">
                              </div>--}}
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col">
                            <button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1 mb-0" type="button"><img class="cursor-pointer" src="{{ asset('public/user-dash/images/illustrations/image.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Snap</span></button>
                            <button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1" type="button"><img class="cursor-pointer" src="{{ asset('public/user-dash/images/illustrations/calendar.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Video</span></button>
                        </div> -->
                        
                        <div class="col-sm-12 text-right">
                          <div class="dropdown d-inline-block mr-1">
                              <input type="text" name="status" id="postStatus" value="public" readonly>
                              <button class="btn btn-sm dropdown-toggle px-1" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #009900" class="fas fa-globe-americas"></span>
                              </button>
                              
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item pstatus" href="#">Public</a>
                                <a class="dropdown-item pstatus" href="#">Private</a>
                                <a class="dropdown-item pstatus" href="#">Draft</a>
                              </div>
                          </div>
                          <button class="btn btn-success btn-sm px-4 px-sm-5" type="submit">Post</button>
                        </div>
                    </div>
                </form>
              </div>
        </div>
        <!-- Create post End -->
        <div id="ajaxPosts">
          {{-- @include('user.social.userPostTable') --}}
        </div>
    </div>
    
    <!-- right side bar for users list -->
    <div class="col-lg-4 pl-lg-2 sidebar">
        <div class="card">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h5 class="mb-0">You May Know ...</h5><a class="fs--1" href="{{ route('users.mayKnow') }}">See all</a>
            </div>
            <div class="card-body">
                @if($suggestProfiles->total()>0)
                    @foreach($suggestProfiles as $profile)
                        <div class="media">
                            <div class="avatar avatar-3xl">
                                <a href="{{route('profile',['user_id'=>Crypt::encrypt($profile->id)])}}">
                                    <img class="rounded-circle" src="{{$profile->image}}" alt="">
                                </a>
                            </div>
                            <div class="media-body ml-2">
                              <h6 class="mb-0">
                                   <a href="{{route('profile',['user_id'=>Crypt::encrypt($profile->id)])}}">{{$profile->first_name}} {{$profile->last_name}}</a>
                               </h6>
                              {{--<p class="fs--1 mb-0">5 mutual Kunnecs</p> --}}
                                <a class="btn btn-outline-success btn-sm" href="{{route('social.followRequest',['follow_user_id'=>$profile->id])}}" style="border-radius:16px;">
                                    <span style="color: #009900" class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Kunnec To</span>
                                </a>
                              <hr class="border-bottom-0 border-dashed">
                            </div>
                        </div>
                    @endforeach
                @else
                <div class="media text-muted">
                    No profile suggestion !       
                </div>
                @endif
              {{-- <div class="media">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/10.jpg')}}" alt="" />
                    </div>
                    <div class="media-body ml-2">
                      <h6 class="mb-0">
                          <a href="../pages/profile.html">Gustaf Skarsgård</a>
                      </h6>
                      <p class="fs--1 mb-0">10 mutual Kunnecs</p>
                      <button class="btn btn-outline-success btn-sm" type="button" style="border-radius:16px;">
                        <span style="color: #009900" class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs--1">Kunnec To</span>
                      </button>
                      <hr class="border-bottom-0 border-dashed">
                    </div>
              </div>
              <div class="media">
                    <div class="avatar avatar-3xl">
                       <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/8.jpg')}}" alt="" />
                    </div>
                    <div class="media-body ml-2">
                      <h6 class="mb-0">
                           <a href="../pages/profile.html">Clive Standen</a>
                       </h6>
                      <p class="fs--1 mb-0">8 mutual Kunnecs</p>
                      <button class="btn btn-outline-success btn-sm" type="button" style="border-radius:16px;">
                        <span style="color: #009900" class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span>
                        <span class="fs--1">Kunnec To</span>
                      </button>
                      <hr class="border-bottom-0 border-dashed">
                    </div>
              </div> --}}
            </div>
        </div>
        <div class="card mt-4 mb-3 mb-lg-0">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        Event Invites
                    </h5>
                </div>
                <div class="card-body fs--1">
                    @if(!$events->isEmpty())
                        @foreach($events as $event)
                            <div class="media btn-reveal-trigger">
                                <div class="calendar"><span class="calendar-month">{{$event->startDate->format('M')}}</span><span class="calendar-day">{{$event->startDate->format('d')}}</span></div>
                                <div class="media-body position-relative pl-3">
                                    <h6 class="fs-0 mb-0"><a href="{{route('events.eventDetails',['event_id'=>$event->id])}}">{{$event->title}}</a></h6>
                                    <p class="mb-1">By <a href="{{route('profile',['user_id'=>Crypt::encrypt($event->user->id)])}}" class="text-700">{{$event->user->first_name}} {{$event->user->last_name}}</a></p>
                                    <p class="text-1000 mb-0">Time: {{$event->startTime->format('h:i A')}}</p>
                                    <p class="text-1000 mb-0">@if($event->startDate->format('M d')==$event->endDate->format('M d')) Date: {{$event->startDate->format('M d')}} @else Duration: {{$event->startDate->format('M d')}} - {{$event->endDate->format('M d')}} @endif</p>
                                    <p class="text-1000 mb-0">{{$event->accept_invites_count}} people interested</p>
                                    <p class="text-1000 mb-0">Place: {{$event->venue}}</p>Location: {{$event->address}}, {{$event->loc_city->name}} {{$event->loc_state->name}} {{$event->loc_country->name}}
                                    <hr class="border-dashed border-bottom-0" />
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="media text-muted">
                            No Invite Yet        
                        </div>
                    @endif
    
                </div>
                @if(!$events->isEmpty())
                <div class="card-footer bg-light py-0 border-top">
                    <a class="btn btn-link btn-block" href="{{route('events.invites')}}" style="color: #009900;">All Events
                        <span class="fas fa-chevron-right ml-1 fs--2"></span>
                    </a>
                </div>
                @endif
        </div>
    </div>
    <!-- End right side bar for users list -->
<div>
@endsection
@section('additional-js')
{{-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> 
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>--}}
<script>
$(document).ready(function(){
  $(".cccc").on("swiperight",function(){
    $(".sidebar").show();
    $(".mainContents").hide();
  });
  $(".sidebar").on("swiperight",function(){
    $(".mainContents").show();
    $(".sidebar").hide();
  });                       
});
  var page = 1;
  var count=0;
  var is_loading=false;
  getPosts(page);
  $(window).scroll(function(){
    console.log("scroll="+$(window).scrollTop());
    console.log("height="+$(document).height());
    if($(window).scrollTop() + $(window).height() >= $(document).height()-400){
      if(is_loading==false){
        is_loading=true;
        page++;
        getPosts(page);
      }
    }
  });
  function getPosts(page) {
    count++;
    console.log(count)
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
      url : "{{ route('dash') }}?page="+page,
      method: 'GET',
    }).done(function (response) {
      is_loading=false;
      if(response.length == 0) {
       
      }else{
        $("#ajaxPosts").append(response);
      }
    }).fail(function(){
      is_loading=false;
      console.log('Server error occured');
    });
  }
</script>
@endsection