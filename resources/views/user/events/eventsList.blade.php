@extends('layouts.user')
@section('title', 'My Events')
@section('additional-css')
@endsection
@section('content')
<div class="card">
    <div class="card-header justify-content-between" style="background-color:#009900;">
        <div class="row">
            <div class="col-10 mt-2">
                <a href="{{ route('events.home') }}" style="color: #FFFFFF">
                    <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('public/images/K_Logo6.png') }}" height="50"
                            width="60" /> My Events</h5>
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
    <div class="card-body fs--1">
        <div class="row">
            @if($events->total()>0)
            @foreach($events as $event)
            <div class="col-md-6 h-100">
                <div class="media btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">{{$event->startDate->format('M')}}</span><span
                            class="calendar-day">{{$event->startDate->format('d')}}</span></div>
                    <div class="media-body position-relative pl-3">
                        <h6 class="fs-0 mb-0 t-t-c"><a
                                href="{{route('events.eventDetails',['event_id'=>$event->id])}}">{{$event->title}} <span
                                    class="badge badge-soft-success rounded-capsule">{{$event->ticket_type}}</span></a>
                            <a href="{{ route('events.edit', ['event_id'=>$event->id]) }}" class="btn btn-success"
                                style="border-radius: 4px;float: right;">Edit</a>
                        </h6>
                        {{-- <p class="mb-1">By </p> --}}
                        <div class="avatar avatar-2xl mb-4 justify-content-center">
                            <a href="{{route('profile',['user_id'=>Crypt::encrypt($event->user->id)])}}">
                                <img class="rounded-circle" src="{{$event->user->image}}" alt="">
                                <div class="row justify-content-center">
                                    <p
                                        style="font-size: 12px;margin: 0px;color: #000;font-weight: 500;text-transform: capitalize;">
                                        By {{$event->user->username}}</p>
                                </div>
                            </a>

                        </div>

                        <p class="text-1000 mb-0">Time: {{$event->startTime->format('h:i A')}}</p>
                        <p class="text-1000 mb-0">
                            @if($event->startDate->format('M d')==$event->endDate->format('M d')) Date:
                            {{$event->startDate->format('M d')}} @else Duration: {{$event->startDate->format('M d')}} -
                            {{$event->endDate->format('M d')}} @endif
                        </p>
                        {{$event->venue}}, {{$event->address}} {{$event->loc_city->name}} {{$event->loc_state->name}}
                        {{$event->loc_country->name}}

                        <hr class="border-dashed border-bottom-0" />
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <!-- <div class="col-md-6 h-100">
                <div class="media btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Mar</span><span class="calendar-day">26</span></div>
                    <div class="media-body position-relative pl-3">
                        <h6 class="fs-0 mb-0"><a href="{{ url('events/event_details') }}">Crain's New York Business <span class="badge badge-soft-success rounded-capsule">Free</span></a></h6>
                        <p class="mb-1">Organized by <a href="#!" class="text-700">AID MIT</a></p>
                        <p class="text-1000 mb-0">Time: 11:00AM</p>
                        <p class="text-1000 mb-0">Duration: Feb 29 - Mar 2</p>The Liberty Warehouse, New Yourk
                        <hr class="border-dashed border-bottom-0" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 h-100">
                <div class="media btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">29</span></div>
                    <div class="media-body position-relative pl-3">
                        <h6 class="fs-0 mb-0"><a href="../../pages/events/k_event_details.php">Film Festival</a></h6>
                        <p class="mb-1">Organized by <a href="#!" class="text-700">American Nuclear Society</a></p>
                        <p class="text-1000 mb-0">Time: 11:00AM</p>
                        <p class="text-1000 mb-0">Duration: Feb 29 - Mar 2</p>Place: Workbar - Central Square, Cambridge
                        <hr class="border-dashed border-bottom-0" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 h-100">
                <div class="media btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
                    <div class="media-body position-relative pl-3">
                        <h6 class="fs-0 mb-0"><a href="../../pages/events/k_event_details.php">Newmarket Nights</a></h6>
                        <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
                        <p class="text-1000 mb-0">Time: 6:00AM</p>
                        <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge
                        <hr class="border-dashed border-bottom-0" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 h-100">
                <div class="media btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">31</span></div>
                    <div class="media-body position-relative pl-3">
                        <h6 class="fs-0 mb-0"><a href="../../pages/events/k_event_details.php">31st Night Celebration</a></h6>
                        <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber Music Society</a></p>
                        <p class="text-1000 mb-0">Time: 11:00PM</p>
                        <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York
                        <hr class="border-dashed border-bottom-0" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 h-100">
                <div class="media btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">16</span></div>
                    <div class="media-body position-relative pl-3">
                        <h6 class="fs-0 mb-0"><a href="../../pages/events/k_event_details.php">Folk Festival</a></h6>
                        <p class="mb-1">Organized by <a href="#!" class="text-700">Harvard University</a></p>
                        <p class="text-1000 mb-0">Time: 9:00AM</p>
                        <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>Place: Porter Square, North Cambridge
                    </div>
                </div>
            </div> -->
        </div>


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