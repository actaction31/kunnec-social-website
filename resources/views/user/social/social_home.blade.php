@extends('layouts.user')
@section('title', 'Kunnec Social')
@section('css/social')
<link href="{{ asset('public/user-dash/css/social.css') }}" rel="stylesheet" />
<style>
    .profile_link {
        display: block;
    }
    img.profile_image {
        width: 100%;
        height: 280px;
        object-fit: cover;
    }
    span.profile_name {
        position: absolute;
        bottom: 5px;
        left: 10px;
        text-transform: capitalize;
        color: #fff;
        background-color: #00000052;
        padding: 0px 8px;
        border-radius: 4px;
    }
</style>
@endsection
@section('content')
<div class="col-lg-12 rounded mb-2 header2" style="background-color:#009900;">
    <div class="row">
        <div class="col-10 mt-2" style="padding: 0px;">
            <p>
                <a href="{{route('social.home')}}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}"
                        height="40px" width="60px" />Kunnec Social
                </a> |&nbsp;
                <a href="{{ route('edit_profile',['tab'=>'settings']) }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings"
                        style="color: #FFFFFF;">
                    </i>
                </a>
            </p>
        </div>

        <div class="col-2 d-flex flex-row-reverse" style="padding: 0px;">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse"
                    data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span
                        class="fa fa-sliders-h text-success"></span>
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
        @if($profiles)
        <div class="row">
            @foreach ($profiles as $profile)
                <div class="col-sm-3 p-0">
                    <a href="{{route('profile',['user_id'=>Crypt::encrypt($profile->id)])}}" class="profile_link">
                        <img src="{{$profile->image}}" alt="" class="profile_image">
                        <span class="profile_name">{{$profile->username}}</span>
                    </a>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
@section('additional-js')
@endsection