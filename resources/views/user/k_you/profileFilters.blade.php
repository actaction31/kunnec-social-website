<div class="col-lg-12 rounded mb-2 header2" style="padding: 0px;">
    <div class="card-header1">
        <div class="row">
            <div class="col-10 mt-2" style="padding: 0px;">
                <p>
                    <a href="{{ route('k2u.home') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec to You</a>
                    |&nbsp; 
                    <a href="{{ route('k2u.settings',['tab'=>'setup']) }}" style="font-size:20px; color: #ffffff;">
                       <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;"></i>
                    </a>             
                </p>
            </div>
            <div class="col-2 d-flex flex-row-reverse" style="padding: 0px;">
                <p>
                    <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
                    </button>
                </p>
            </div>
        </div>
        <div class="collapse" id="collapseSort1">
            <div class="col p-3">
                <form action="{{route('k2u.listProfiles')}}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" placeholder="Search Skilled Kunnec's" name="q" aria-label="Search">
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-light btn-md my-0 ml-sm-2" type="submit">Search</button>
                        </div>
                    </div>
                    
                </form>
            </div>

            <div class=" col pb-4">
                <div class="border p-card rounded">
                    <div class="media">
                        <div class="container">
                            <form class="" action="{{route('k2u.listProfiles')}}" method="GET">
                                @csrf
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <select class="custom-select" id="card-holder-category" name="cat_id">
                                                <option value="" disabled selected>Select Category ...</option>
                                                @if($cats)
                                                    @foreach($cats as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            {!! Form::select('classification',$classifications,old('classifications'),['class'=>'custom-select text-capitalize','placeholder'=>'Type of Post ...']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::select('country',$countries,old('country'),['class'=>'custom-select text-capitalize country','data-id'=>'#dyna_state','placeholder'=>'Country']) !!}
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select state" id="dyna_state" name="state" data-id='#dyna_city'>
                                                <option value="" disabled selected>Select State...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select" id="dyna_city" name="city" >
                                                <option value="" disabled selected>Select City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check-label" style="color: #F1C40F">Time</div>
                                        @if($jobTypes)
                                            @foreach($jobTypes as $key=>$jobType)
                                                <div class="form-group form-check-inline">
                                                    <input class="form-check-input" id="{{$key}}" type="checkbox" value="{{$key}}" name="jobTypes[]">
                                                    <label class="form-check-label" for="{{$key}}" style="color: #FFFFFF">{{$jobType}} </label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check-label" style="color: #F1C40F">Payment</div>
                                         @if($paymentTypes)
                                            @foreach($paymentTypes as $key=>$paymentType)
                                                <div class="form-group form-check-inline">
                                                    <input class="form-check-input" id="pay_{{$key}}" type="checkbox" value="{{$key}}" name="payment_types[]">
                                                    <label class="form-check-label" for="pay_{{$key}}" style="color: #FFFFFF">{{$paymentType}} </label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div> 
                                    <div class="col-sm-2">
                                        <div class="form-check-label" style="color: #F1C40F">Posted</div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="today" type="radio" value="today" name="posted">
                                            <label class="form-check-label" for="today" style="color: #FFFFFF">Today </label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="thisweek" type="radio" value="thisweek" name="posted">
                                            <label class="form-check-label" for="thisweek" style="color: #FFFFFF">This Week</label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="thismonth" type="radio" value="thismonth" name="posted">
                                            <label class="form-check-label" for="thismonth" style="color: #FFFFFF">This Month</label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <button class="btn btn-warning mr-5 mb-1" type="submit">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>