@extends('layouts.user')
 @section('title', 'Events Home')
@section('additional-css')
<style>
    .card {
        margin: 5% 0%;
    }

    .card-body {
        margin: 0% 0% 0% 3%;
        padding: 6% 0%;
    }
</style>
@endsection
@section('content')

<div class="card">
    <div class="card-header col-12 justify-content-between" style="background-color:#009900;">
        <div class="row">
            <div class="col-10 mt-2">
                <a href="{{ route('events.home') }}" style="color: #FFFFFF">
                <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('public/images/K_Logo6.png') }}" height="50" width="60"/> Event Home</h5></a>
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
    <div class="card-body">
        <div class="card-deck row">
            @if($events->total()>0)
                @foreach($events as $event)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- Card -->
                    <div class="card mb-4">
                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="{{$event->banner}}"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">{{$event->title}}</h4>
                            <div class="card-text">
                                {!! $event->short_desc !!}
                            </div>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <a href="{{route('events.eventDetails',['event_id'=>$event->id])}}" class="btn btn-light-blue btn-md">See Event</a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                @endforeach
                <div class="pagi_row col-sm-12">  
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
            @else
            <div class="col-sm-12 text-center">
                No Events in Your Area
            </div>
            @endif
             
            {{-- <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card mb-4">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Event Title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">See Event</button>
                    </div>
                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card mb-4">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Event Title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">See Event</button>
                    </div>
                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Event Title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">See Event</button>
                    </div>
                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card mb-4">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Event Title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">See Event</button>
                    </div>
                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card mb-4">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Event Title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">See Event</button>
                    </div>
                </div>
                <!-- Card -->
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card mb-4">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Event Title </h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">See Event</button>
                    </div>
                </div>
                <!-- Card -->
            </div> --}}
        </div>
    </div>
</div>
@endsection
@section('additional-js')
@endsection