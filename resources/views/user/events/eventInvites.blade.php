@extends('layouts.user')
@section('title', 'Event Invites')
@section('additional-css')
@endsection
@section('content')
<div class="card mb-3">
    <div class="card-header justify-content-between" style="background-color:#009900;">
        <div class="row">
            <div class="col-10 mt-2">
                <a href="{{ url('events/event_home') }}" style="color: #FFFFFF">
                    <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40"
                            width="60" /> Event Invites</h5>
                </a>
            </div>
            <div class="col-2 d-flex flex-row-reverse">
                <p>
                    <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse"
                        data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span
                            class="fa fa-sliders-h text-success"></span>
                    </button>
                </p>
            </div>
        </div>
    </div>
    <div class="collapse" id="collapseSort1" style="background-color:#009900;">
        @include('user.events.eventFilters')
    </div>
</div>
<div class="card">
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
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Event List</h6>
        @if($eventInvites->total()>0)
        @foreach($eventInvites as $eventInvite)
        <div class="media text-muted pt-3">
            <div class="media btn-reveal-trigger">
                <div class="calendar"><span
                        class="calendar-month">{{$eventInvite->event->startDate->format('M')}}</span><span
                        class="calendar-day">{{$eventInvite->event->startDate->format('d')}}</span></div>
                <div class="media-body position-relative pl-3">
                    <h6 class="fs-0 mb-0"><a
                            href="{{route('events.eventDetails',['event_id'=>$eventInvite->event_id])}}">{{$eventInvite->event->title}}</a>
                    </h6>
                    <p class="text-1000 mb-0">@if($eventInvite->event->startDate->format('M
                        d')==$eventInvite->event->endDate->format('M d')) Date:
                        {{$eventInvite->event->startDate->format('M d')}} @else Duration:
                        {{$eventInvite->event->startDate->format('M d')}} - {{$eventInvite->event->endDate->format('M
                        d')}} @endif</p>Place: {{$eventInvite->event->venue}} - {{$eventInvite->event->address}},
                    {{$eventInvite->event->loc_city->name}} {{$eventInvite->event->loc_state->name}}
                    {{$eventInvite->event->loc_country->name}}
                </div>
            </div>
        </div>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark"><a
                        href="{{route('profile',['user_id'=>Crypt::encrypt($eventInvite->event->user->id)])}}"
                        class="t-t-c">{{$eventInvite->event->user->first_name}}
                        {{$eventInvite->event->user->last_name}}</a></strong>
                <div>
                    @if($eventInvite->status=='new')
                    <a href="{{route('events.inviteUserAction',['invite_id'=>$eventInvite->id,'action'=>'accepted'])}}"
                        class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                        <i class="fas fa-user-plus"></i> Accept Request
                    </a>
                    <a href="{{route('events.inviteUserAction',['invite_id'=>$eventInvite->id,'action'=>'rejected'])}}"
                        class="btn btn-danger btn-sm" style="border-radius:16px;">
                        <i class="fas fa-times-circle"></i> Delete &nbsp;&nbsp;
                    </a>
                    @elseif($eventInvite->status=='accepted')
                    <button class="btn btn-outline-success btn-sm t-t-c" style="border-radius:16px;">
                        {{$eventInvite->status}}
                    </button>
                    @else
                    <button class="btn btn-danger btn-sm btn-sm t-t-c" style="border-radius:16px;">
                        {{$eventInvite->status}}
                    </button>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h5 style="text-align: center;padding-top: 25px;">No invite for you yet !</h5>
        @endif
        {{-- <h6 class="border-bottom border-gray p-2 mb-0">K-Ads</h6>
        <div class="media text-muted pt-3">
            <img class="bd-placeholder-img mr-2 rounded" width="32" height="32"
                src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img" aria-label="Placeholder: 32x32">
            <title>Placeholder</title>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div>
        <div class="media text-muted pt-3">
            <img class="bd-placeholder-img mr-2 rounded" width="32" height="32"
                src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img" aria-label="Placeholder: 32x32">
            <title>Placeholder</title>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">@username</strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus.
            </p>
        </div> --}}
        @if($eventInvites->total()>0)
        <div class="pagi_row">
            <div class="page_counts">
                Results: {{ $eventInvites->firstItem() }}
                - {{ $eventInvites->lastItem() }}
                of
                {{ $eventInvites->total() }}
            </div>
            <div class="vehi_pagination">
                {{ $eventInvites->links() }}
            </div>
        </div>
        @endif
    </div>

</div>
@endsection
@section('additional-js')
@endsection