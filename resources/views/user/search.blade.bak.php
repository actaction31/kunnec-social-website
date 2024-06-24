@extends('layouts.user')
 @section('title', 'Social Search')
@section('additional-css')
@endsection
@section('content')

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">K-Ads</h6>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{asset('user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{asset('user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>     
</div>

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Search Results</h6>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{asset('user-dash/images/users/profiles/18.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Full Name</strong>
                <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                    <i class="fas fa-user-plus"></i> Kunnec To &nbsp;&nbsp;&nbsp<span1 class="badge badge-success"> 24</span1>
                </button>
            </div>
            <span class="d-block">@username</span>
        </div>
    </div>

    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{asset('user-dash/images/users/profiles/20.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Full Name</strong>
                <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                    <i class="fas fa-user-plus"></i> Kunnec To &nbsp;&nbsp;&nbsp<span1 class="badge badge-success"> 24</span1>
                </button>
            </div>
            <span class="d-block">@username</span>
        </div>
    </div>

    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{asset('user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Full Name</strong>
                <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                    <i class="fas fa-user-plus"></i> Kunnec To &nbsp;&nbsp;&nbsp<span1 class="badge badge-success"> 24</span1>
                </button>
            </div>
            <span class="d-block">@username</span>
        </div>
    </div>
    <small class="d-block text-right mt-3">
        <a href="#">All suggestions</a>
    </small>
</div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">K-Ads</h6>
        <div class="media text-muted pt-3">
            <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{asset('user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div>
        <div class="media text-muted pt-3">
            <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{asset('user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div>     
    </div>

@endsection
@section('additional-js')
@endsection