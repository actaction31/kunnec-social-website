@extends('layouts.user')
 @section('title', 'Event Search')
@section('additional-css')
@endsection
@section('content')

<div class="card">
    <div class="card-header  justify-content-between" style="background-color:#009900;">
        <div class="row">
            <div class="col-10 mt-2">
                <a href="{{ route('events.home') }}" style="color: #FFFFFF">
                <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('public/images/K_Logo6.png') }}" height="50" width="60"/> Event Search</h5></a>
            </div>
            <div class="col-2 d-flex flex-row-reverse">
                <p>
                    <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
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
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Event Search Results</h6>
        @if($events->total()>0)
            @foreach($events as $event)
                <div class="media text-muted pt-3">
                    <div class="media btn-reveal-trigger">
                        <div class="avatar avatar-2xl status-offline mr-3 status_{{$event->user->id}}" >
                            <a href="{{route('profile',['user_id'=>Crypt::encrypt($event->user->id)])}}"><img class="rounded-circle" src="{{$event->user->image}}" alt=""></a>
                        </div>
                        <div class="calendar" >
                            <span class="calendar-month">{{$event->startDate->format('M')}}</span>
                            <span class="calendar-day">{{$event->startDate->format('d')}}</span>
                        </div>
                        <div class="media-body position-relative pl-3">
                            <h6 class="fs-0 mb-0"><a href="{{route('events.eventDetails',['event_id'=>$event->id])}}">{{$event->title}} </a></h6>
                            Place: {{$event->venue}}
                            <p class="text-1000 mb-0">Location: {{$event->address}}, {{$event->loc_city->name}} {{$event->loc_state->name}} {{$event->loc_country->name}}</p>
                            <p class="text-1000 mb-0">@if($event->startDate->format('M d')==$event->endDate->format('M d')) Date: {{$event->startDate->format('M d')}} @else Duration: {{$event->startDate->format('M d')}} - {{$event->endDate->format('M d')}} @endif</p>
                            @if($event->ticket_type=="free")
                                <button type="button" class="btn btn-success btn-sm" style="border-radius:16px;">
                                    <i class="fas fa-check"></i> Free &nbsp;&nbsp;
                                </button>
                            @else
                                <button type="button" class="btn btn-primary btn-sm" style="border-radius:16px;">
                                    <i class="fas fa-dollar-sign"></i> {{$event->ticket1}} &nbsp;&nbsp;
                                </button>
                            @endif
                            
                        </div>
                    </div>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">{{$event->user->first_name}} {{$event->user->last_name}} </strong>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="pagi_row">  
            <div class="page_counts"> 
                Results: {{ $events->firstItem() }}
                - {{ $events->lastItem() }}
                of 
                {{ $events->total() }}
            </div>
            <div class="vehi_pagination"> 
                {{ $events->links() }}
            </div>
        </div>    
    </div>
</div>
@endsection
@section('additional-js')
@endsection