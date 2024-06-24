@extends('layouts.user')
 @section('title', 'You May Know')
@section('additional-css')
@endsection
@section('content')


<!--
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">K-Ads</h6>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>         
</div>
-->



<div class="my-3 p-3 bg-white rounded shadow-sm">
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
    <h6 class="border-bottom border-gray pb-2 mb-0">You May Know</h6>
    @if($profiles->total()>0)
        @foreach($profiles as $profile)
            <div class="media text-muted pt-3">
                <a class="media" href="{{route('profile',['user_id'=>Crypt::encrypt($profile->id)])}}" style="font-size: inherit;color: inherit;display: contents;">
                    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{$profile->image}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32" style="object-fit: cover;">
                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-gray-dark t-t-c">{{$profile->first_name}} {{$profile->last_name}}</strong>
                            <a  href="{{route('social.followRequest',['follow_user_id'=>$profile->id])}}" class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                                <i class="fas fa-user-plus"></i> Kunnec To &nbsp;&nbsp;&nbsp
                            </a>
                        </div>
                        <span class="d-block">@ {{$profile->username}}</span>
                    </div>
                </a>
            </div>
        @endforeach
    @else
        <div class="media text-muted">
            No profile suggestion !       
        </div>
    @endif 
   {{--  <small class="d-block text-right mt-3">
        <a href="#">All suggestions</a>
    </small> --}}
</div>


<!--
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">K-Ads</h6>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>     
</div>
-->


@endsection
@section('additional-js')
@endsection