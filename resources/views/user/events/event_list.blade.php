@extends('layouts.user')
 @section('title', 'Event List')
@section('additional-css')
@endsection
@section('content')      
<div class="card">
    <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
        <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40" width="60"/> Event Invites</h5>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Event List</h6>
        <div class="media text-muted pt-3">
            <div class="media btn-reveal-trigger">
                <div class="calendar"><span class="calendar-month">Mar</span><span class="calendar-day">26</span></div>
                <div class="media-body position-relative pl-3">
                    <h6 class="fs-0 mb-0"><a href="{{ url('events/event_details') }}">Crain's New York Business </a></h6>
                    <p class="text-1000 mb-0">Duration: Feb 29 - Mar 2</p>Place: Workbar - Central Square, Cambridge
                </div>
            </div>
        </div>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Full Name</strong>
                <button type="button" class="btn btn-danger btn-sm" style="border-radius:16px;">
                    <i class="fas fa-times-circle"></i> Delete &nbsp;&nbsp;
                </button>
            </div>
        </div>

    <div class="media text-muted pt-3">
        <div class="media btn-reveal-trigger">
            <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">29</span></div>
            <div class="media-body position-relative pl-3">
                <h6 class="fs-0 mb-0"><a href="{{ url('events/event_details') }}">Film Festival</a></h6>
                <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>Place: Porter Square, North Cambridge
            </div>
        </div>
    </div>
    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100 ">
            <strong class="text-gray-dark">Full Name</strong>
            <button type="button" class="btn btn-danger btn-sm" style="border-radius:16px;">
                <i class="fas fa-times-circle"></i> Delete &nbsp;&nbsp;
            </button>
        </div>
    </div>

    <div class="media text-muted pt-3">
        <div class="media btn-reveal-trigger">
        <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">16</span></div>
            <div class="media-body position-relative pl-3">
                <h6 class="fs-0 mb-0"><a href="{{ url('events/event_details') }}">Film Festival</a></h6>
                <p class="text-1000 mb-0">Duration: Feb 29 - Mar 2</p>Place: Workbar - Central Square, Cambridge
            </div>
        </div>
    </div>
    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
            <strong class="text-gray-dark">Full Name</strong>
            <button type="button" class="btn btn-danger btn-sm" style="border-radius:16px;">
                <i class="fas fa-times-circle"></i> Delete &nbsp;&nbsp;
            </button>
        </div>
    </div>

    <h6 class="border-bottom border-gray p-2 mb-0">K-Ads</h6>
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



@endsection
@section('additional-js')
@endsection