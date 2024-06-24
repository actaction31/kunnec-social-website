<div class="row p-3">
    <div class="col">
        <form class="form-inline" action="{{route('events.search')}}" method="GET">
            @csrf
            <div class="md-form my-0">
                <input class="form-control" type="text" name="q" placeholder="Search Events" aria-label="Search">
            </div>
            <div class="ml-2">
                <button class="btn btn-outline-light btn-md my-0 ml-sm-2" type="submit">Search
                </button>
            </div>
        </form>
    </div>
</div>

<div class=" col pb-4">
<div class="border p-card rounded">
    <div class="media">
        <div class="container">
            <form class="" action="{{route('events.search')}}" method="GET">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            {!! Form::select('country',$countries,old('country'),['class'=>'custom-select text-capitalize','id'=>'country','placeholder'=>'Country']) !!}
                        </div>
            
                        <div class="form-group">
                            <select class="custom-select text-capitalize" id="state" name="state">
                                <option value="0">State</option>
                            </select>
                        </div>
              
                        <div class="form-group">
                            <select class="custom-select text-capitalize" name="city" id="city">
                                <option value="">City</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-select" id="event-type" name="event_type">
                                <option value="">Select event type...</option>
                                @foreach($eventTypes as $eventType)
                                    <option value="{{$eventType}}">{{$eventType}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-select" id="event-topic" name="event_topic">
                                <option value="" selected="selected">Select a topic</option>
                                @foreach($eventTopics as $eventTopic)
                                    <option value="{{$eventTopic}}">{{$eventTopic}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
         
                    <div class="col-sm-2">
                        <div class="form-check-label" style="color: #F1C40F">Days</div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="monday" type="checkbox" name="monday">
                            <label class="form-check-label" for="monday" style="color: #FFFFFF">Monday </label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="tuesday" type="checkbox" name="tuesday">
                            <label class="form-check-label" for="tuesday" style="color: #FFFFFF">Tuesday</label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="wednesday" type="checkbox" name="wednesday">
                            <label class="form-check-label" for="wednesday" style="color: #FFFFFF">Wednesday</label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="thursday" type="checkbox" name="thursday">
                            <label class="form-check-label" for="thursday" style="color: #FFFFFF">Thursday</label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox" name="friday">
                            <label class="form-check-label" for="friday" style="color: #FFFFFF">Friday</label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="saturday" type="checkbox" name="saturday">
                            <label class="form-check-label" for="saturday" style="color: #FFFFFF">Saturday</label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="sunday" type="checkbox" name="sunday">
                            <label class="form-check-label" for="sunday" style="color: #FFFFFF">Sunday</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-check-label" style="color: #F1C40F">Posted</div>
                            <div class="form-group form-check-inline">
                            <input class="form-check-input" id="today" type="radio" name="posted" value="today">
                            <label class="form-check-label" for="today" style="color: #FFFFFF">Today </label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="thisweek" type="radio" name="posted" value="thisweek">
                            <label class="form-check-label" for="thisweek" style="color: #FFFFFF">This Week</label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input class="form-check-input" id="thismonth" type="radio" name="posted" value="thismonth">
                            <label class="form-check-label" for="thismonth" style="color: #FFFFFF">This Month</label>
                        </div>
                    </div>
                    <div class="col-sm">
                        <button class="btn btn-warning mr-5 mb-1" type="submit">
                            Filter
                        </button>
                    </div>
                </div>
                <br>
            </form>
        </div>                  
    </div>
</div>
</div>