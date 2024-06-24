@extends('layouts.user')
@section('title', 'Kunnec Social')
@section('css/social')
<link href="{{ asset('public/user-dash/css/social.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
<div class="col-lg-12 rounded mb-2 header2" style="background-color:#009900;">
    <div class="row">
        <div class="col-10 mt-2" style="padding: 0px;">
            <p>
                <a href="{{route('social.home')}}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/>Kunnec Social
                </a> |&nbsp;
                <a href="{{ route('edit_profile',['tab'=>'settings']) }}" style="font-size:20px; color: #ffffff;">
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
        @include('user.profileFilters')
    </div>  
</div>
<div class="card-header1 mt-3">
    Recent Kunnec's
</div>
<div class="card">
    <div class="card-body">
        <div class="container">
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            <!--Controls-->
                <div class="controls-top">
                    <div class="mx-auto d-flex justify-content-center" style="width: 200px;">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            <!--/.Controls-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                @if($profiles)
                    @foreach ($profiles as $index => $profile)
                        @if($index%6==0)
                        <div class="carousel-item @if($index==0) active @endif">
                            <div class="row">
                        @endif
                                <div class="col-6 col-md-2 col-lg-2" style="text-align: center;">
                                    <div class="avatar avatar-4xl mr-3 justify-content-center">
                                        <a href="{{route('profile',['user_id'=>Crypt::encrypt($profile->id)])}}">
                                            <img class="img-thumbnail img-fluid rounded-circle" src="{{$profile->image}}" alt="" />
                                            <div class="row justify-content-center">
                                                <p style="font-size:10px;"> {{$profile->username}}</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        @if(($index+1) %6==0)
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endif
            </div>
            <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>

    <hr class="style12">

    <section class="grid-container">
        <div class="cols grid-area">
            @if($snaps)
            @foreach ($snaps as $key => $snap)
            <figure class="col grid-{{$key+1}}">
                @if($snap->lastfile)
                    <img src="{{$snap->lastfile->file}}" alt="">    
                @endif
                
                <figcaption>
                    <h2 class="snapTitle">{!! $snap->descriptions !!}</h2>
                    <div class="grid-button-wrapper">
                        <button class="rww_grid_button">
                            View Profile
                        </button>
                    </div>
                    {{-- <div>{!! $snap->descriptions !!}</div> --}}
                    <a href="{{route('profile',['user_id'=>Crypt::encrypt($snap->user->id),'tab'=>'pictures'])}}">View Profile</a>
                </figcaption>
            </figure>
            @endforeach
            @endif
            

            {{-- <div class="col grid-2">
                <img src="https://placeimg.com/640/640/any" alt="">
            </div> 
            <figure class="col grid-3">
                <img src="https://placeimg.com/640/640/arch" alt="">
                <figcaption>
                    <h2>Title</h2>
                    <div class="grid-button-wrapper">
                        <button class="rww_grid_button">View Profile</button>
                    </div>
                    <p>Filler sentance goes here. It's longer to demonstrate how the text wrapping works.</p>
                    <a href="{{ url('social/profile') }}">View Profile</a>
                </figcaption>
            </figure>
            <div class="col grid-4">
                <img src="https://placeimg.com/640/640/nature" alt="">
            </div>
            <div class="col grid-5">
                <span class="text-container">
                    <p><img src="{{ asset('public/images/K_Logo5.png') }}" style="height:110px; width: 170px;"/>Social</p>
                </span>
                <img src="https://placeimg.com/640/640/tech" alt="">
            </div>
            <div class="col grid-6">
                <img src="https://placeimg.com/640/640/grayscale" alt="">
            </div>
            <div class="col grid-7">
                <img src="https://placeimg.com/640/640/sepia" alt="">
            </div>
            <div class="col grid-8">
                <img src="https://placeimg.com/640/640/any" alt="">
            </div> --}} 
        </div>
    </section>

    <hr class="style12">

    <div class="container">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                @if($profiles)
                    @foreach ($profiles as $index => $profile)
                        @if(($index)%6==0)
                            <div class="carousel-item @if($index==0) active @endif">
                                <div class="row">
                        @endif
                                    <div class="col-6 col-md-2 col-lg-2" style="text-align: center;">
                                        <div class="avatar avatar-4xl mr-3 justify-content-center">
                                            <img class="img-thumbnail img-fluid rounded-circle" src="{{$profile->image}}" alt="" />
                                        </div>
                                    </div>
                        @if(($index+1)%6==0)
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endif
            </div>
            <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->

    </div>
</div>

@endsection
@section('additional-js')
@endsection