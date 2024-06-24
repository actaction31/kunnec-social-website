@extends('layouts.user')
@section('title', 'Event Details')
@section('additional-css')
@endsection
@section('content')
<div class="card mb-3">
        <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
            <a href="{{ route('events.home') }}" style="color: #FFFFFF">
                <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40" width="60"/> Event Details</h5>
            </a>
        <div class="col-sm d-flex flex-row-reverse">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
                </button>
            </p>
        </div>
    </div>
    <div class="collapse" id="collapseSort1" style="background-color:#009900;">
        @include('user.events.eventFilters')
    </div>
</div>

<div class="card mb-3">
    <img class="card-img-top" src="{{$event->banner}}">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <div class="media">
                    <div class="calendar mr-2">
                        <span class="calendar-month">{{$event->startDate->format('M')}}</span><span class="calendar-day">{{$event->startDate->format('d')}} </span>
                    </div>
                    <div class="media-body fs--1">
                        <h5 class="fs-0 t-t-c">{{$event->title}}</h5>
                        <p class="mb-0">by <a href="{{route('profile',['user_id'=>Crypt::encrypt($event->user->id)])}}" class="t-t-c">{{$event->user->first_name}} {{$event->user->last_name}}</a></p>
                        @if($event->ticket_type=='paid')<span class="fs-0 text-warning font-weight-semi-bold">${{$event->ticket1}} – ${{$event->ticket2}}</span>@else <span class="badge badge-soft-success rounded-capsule t-t-c">{{$event->ticket_type}}</span> @endif
                    </div>
                </div>
            </div>
            @if($event->invite)
            <div class="col-md-auto mt-4 mt-md-0">
                @if($event->invite->status=='new')
                    <a class="btn btn-lg btn-success rounded-capsule mr-1 mb-1" href="{{route('events.inviteUserAction',['invite_id'=>$event->invite->id,'action'=>'accepted'])}}"><span class="fas fa-handshake"></span> RSVP Confirmation</a>
                @elseif($event->invite->status=='accepted')
                    <button class="btn btn-lg btn-success rounded-capsule mr-1 mb-1 t-t-c"><span class="fas fa-handshake"></span> {{$event->invite->status}}</button>
                @else
                               
                @endif
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row no-gutters">
    <div class="col-lg-8 pr-lg-2">
        <div class="card">
            <div class="card-body">
                <div>
                    {!! $event->descriptions !!}
                </div>
                <div class="icon-group">
                    @if($event->user->facebook)<a class="icon-item text-facebook" href="{{$event->user->facebook}}" target="_blank"><span class="fab fa-facebook-f"></span></a>&nbsp;&nbsp; @endif

                    @if($event->user->twitter)<a class="icon-item text-twitter" href="{{$event->user->twitter}}" target="_blank"><span class="fab fa-twitter"></span></a>&nbsp;&nbsp; @endif

                    @if($event->user->instagram)<a class="icon-item text-twitter" href="{{$event->user->instagram}}" target="_blank"><span class="fab fa-instagram"></span></a>&nbsp;&nbsp; @endif

                    @if($event->user->youtube)<a class="icon-item text-twitter" href="{{$event->user->youtube}}" target="_blank"><span class="fab fa-youtube"></span></a>&nbsp;&nbsp; @endif

                    {{-- <a class="icon-item text-google-plus" href="" target="_blank"><span class="fab fa-google-plus-g"></span></a>&nbsp;&nbsp; --}} 

                    @if($event->user->linkedin)<a class="icon-item text-linkedin" href="{{$event->user->linkedin}}" target="_blank"><span class="fab fa-linkedin-in"></span></a>@endif

                    <a class="icon-item text-700" href="" target="_blank">&nbsp;&nbsp;</a>
                </div>
                <hr class="style12">
                <h5 class="fs-0">Location</h5>
                <div class="mb-1">{{$event->organizer}}<br />{{$event->venue}}<br />{{$event->address}} {{$event->loc_city->name}} {{$event->loc_state->name}}<br />{{$event->loc_country->name}}</div>
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=520&height=400&hl=en&q={{$event->address}} {{$event->loc_city->name}} {{$event->loc_state->name}} {{$event->loc_country->name}}&t=&z=12&ie=UTF8&iwloc=B&output=embed"></iframe> 
                <a href='http://maps-generator.com/'>Maps-Generator.com</a> 
                <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1d0dab658d1860a953bd8caf54b4bc3ccec70f14'></script>
            </div>
        </div>
    </div>

    <div class="col-lg-4 pl-lg-2">
        <div class="sticky-top sticky-sidebar">
            <div class="card mb-3 fs--1">
                <div class="card-body">
                    <h6>Date And Time</h6>
                    <p class="mb-1">
                        @if($event->startDate->format('M d')==$event->endDate->format('M d')) {{$event->startDate->format('D, M d, Y')}}, {{$event->startTime->format('h:i A')}} @else  {{$event->startDate->format('D, M d, Y')}}, {{$event->startTime->format('h:i A')}} – <br/>{{$event->endDate->format('D, M d, Y')}}, {{$event->endTime->format('h:i A')}} @endif</p> 
                    {{-- <a href="../../k_my2do.php" class="btn btn-primary mr-1 mb-1" role="button">Add to Calendar</a> --}}
                    <h6 class="mt-4">Refund Policy</h6>
                    <p class="fs--1 mb-0">No Refunds</p>
                </div>
            </div>
            @if($events)
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Events you may like</h5>
                    </div>
                    <div class="card-body fs--1">
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
                    </div>
                    <div class="card-footer bg-light py-0 border-top"><a class="btn btn-link btn-block" href="{{route('events.search')}}">All Events<span class="fas fa-chevron-right ml-1 fs--2"></span></a></div>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
@section('additional-js')
@endsection