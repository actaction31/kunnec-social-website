<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
        <div class="col-lg mt-2">
            <p style="color: #FFFFFF">
                <a href="{{ route('krecords.home') }}" style="color: #FFFFFF"><img
                        src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px" /> Kunnec Screen
                </a> |&nbsp;
                <a href="{{ route('krecords.settings',['tab'=>'setup']) }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings"
                        style="color: #FFFFFF;">
                    </i>
                </a>
            </p>
        </div>
        
        <div class="col-sm d-flex flex-row-reverse">
            <p>
                <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse"
                data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample">
                    <span class="fa fa-sliders-h text-success"></span>
                </button>
            </p>
        </div>
    </div>
    <div class="collapse" id="collapseSort1">
        {{-- <div class="row p-3">
            <div class="col">
                {!! Form::open(['route' =>['k2me.search'],'class'=>'form-inline']) !!}
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control" type="text" placeholder="Search Recorders" aria-label="Search">
                    </div>
                    <div class="ml-2">
                        <button href="#!" class="btn btn-outline-light btn-md my-0 ml-sm-2"
                            type="submit">Search</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div> --}}
        <div class=" col pb-4">
            <div class="border p-card rounded">
                <div class="media">
                    <div class="container">
                    {!! Form::open(['route' =>['krecords.search'],'method'=>'GET']) !!}
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                {!! Form::select('record_cat_id',$recordCats,'',['class'=>'custom-select','placeholder'=>'Select Category']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::select('country',$countries,old('country'),['class'=>'custom-select text-capitalize country','data-id'=>'#dyna_state','placeholder'=>'Country']) !!}
                            </div>

                            <div class="form-group">
                                <select class="custom-select state text-capitalize" id="dyna_state" name="state" data-id='#dyna_city'>
                                    <option value="" disabled selected>Select State...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="custom-select text-capitalize" id="dyna_city" name="city" >
                                    <option value="" disabled selected>Select City</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label for="card-holder-country" style="color: #F1C40F">Type</label>
                            <div class="form-group form-check">
                                {!! Form::radio('type','all','',['class'=>'form-check-input','id'=>'alltype']) !!}
                                <label class="form-check-label" for="alltype" style="color: #FFFFFF">Both</label>
                            </div>
                            @if($tutor_types)
                                @foreach ($tutor_types as $key=>$tutor_type)
                                    <div class="form-group form-check">
                                        {!! Form::radio('type',$key,'',['class'=>'form-check-input','id'=>$tutor_type]) !!}
                                        <label class="form-check-label" for="{{$tutor_type}}" style="color: #FFFFFF">{{$tutor_type}}</label>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-sm">
                            <label for="card-holder-country" style="color: #F1C40F">Price</label>
                            <div class="form-group form-check">
                                {!! Form::radio('fee_type','all','',['class'=>'form-check-input','id'=>'allfee_type']) !!}
                                <label class="form-check-label" for="allfee_type" style="color: #FFFFFF">Both</label>
                            </div>
                            <div class="form-group form-check">
                                {!! Form::radio('fee_type','1','',['class'=>'form-check-input','id'=>'per_hr']) !!}
                                <label class="form-check-label" for="per_hr" style="color: #FFFFFF">Per Hour</label>
                            </div>
                            <div class="form-group form-check">
                                {!! Form::radio('fee_type','2','',['class'=>'form-check-input','id'=>'flat_fee']) !!}
                                <label class="form-check-label" for="flat_fee" style="color: #FFFFFF">Flat Fee</label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label for="card-holder-country" style="color: #F1C40F">Level</label>
                            <div class="form-group form-check">
                                {!! Form::checkbox('tutor_level[]','all','',['class'=>'form-check-input','id'=>'alltutor_level']) !!}
                                <label class="form-check-label" for="alltutor_level" style="color: #FFFFFF">All</label>
                            </div>
                            @if($tutor_levels)
                                @foreach ($tutor_levels as $key=>$tutor_level)
                                    <div class="form-group form-check">
                                        {!! Form::checkbox('tutor_level[]',$key,'',['class'=>'form-check-input','id'=>'tutor_level'.$key]) !!}
                                        <label class="form-check-label" for="{{'tutor_level'.$key}}" style="color: #FFFFFF">{{$tutor_level}}</label>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-sm">
                            <label for="card-holder-country" style="color: #F1C40F">Available</label>
                            <div class="form-group form-check">
                                {!! Form::checkbox('available_days[]','all','',['class'=>'form-check-input','id'=>'defaultcheckbox1']) !!}
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Everyday</label>
                            </div>
                            @if($available_days)
                                @foreach ($available_days as $key=>$available_day)
                                    <div class="form-group form-check">
                                        {!! Form::checkbox('available_days[]',$key,'',['class'=>'form-check-input','id'=>$key]) !!}
                                        <label class="form-check-label" for="{{$key}}" style="color: #FFFFFF">{{$available_day}}</label>
                                    </div>
                                @endforeach
                            @endif
                            {{-- <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Mondays</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Tuesdays</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Wednesdays</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Thursdays</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Fridays</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Saturdays</label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Sundays</label>
                            </div> --}}
                        </div>
                        <div class="col-sm">
                            <label for="card-holder-country" style="color: #F1C40F">Ratings</label>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="4_5above" type="radio" name="rating" value="4.5">
                                <label class="form-check-label" for="4_5above">
                                    <div>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star-half-alt text-warning star-icon"></span>
                                        <span class="ml-1" style="color: #FFFFFF">4.5 & above</span>
                                    </div>
                            </div>
                            </label>

                            <div class="form-group form-check">
                                <input class="form-check-input" id="4above" type="radio" name="rating" value="4">
                                <label class="form-check-label" for="4above">
                                    <div>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="ml-1" style="color: #FFFFFF">4.0 & above</span>
                                    </div>
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="3_5above" type="radio" name="rating" value="3.5">
                                <label class="form-check-label" for="3_5above">
                                    <div>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star-half-alt text-warning star-icon"></span>
                                        <span class="ml-1" style="color: #FFFFFF">3.5 & above</span>
                                    </div>
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="3above" type="radio" name="rating" value="3">
                                <label class="form-check-label" for="3above">
                                    <div>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="fa fa-star text-warning"></span>
                                        <span class="ml-1" style="color: #FFFFFF">3.0 & above</span>
                                    </div>
                                </label>
                            </div>
                            <button class="btn btn-warning mr-5 mb-1" type="submit">Filter</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                <div class="alert alert-danger">
                    <strong>Best Performance:</strong> Two Monitors, Camera, & Microphone : See system requirements
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                <a href="{{ url('k_screen/recording/record_apple') }}" class="btn btn-success rounded-capsule mr-1 mb-1" role="button">
                    <span class="fab fa-apple"></span> MAC OS Requirements - Click HERE
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4">
                <a href="{{ url('k_screen/recording/record_windows') }}" class="btn btn-success rounded-capsule mr-1 mb-1" role="button">
                    <span class="fab fa-windows"></span> Windows Requirements - Click HERE
                </a>
            </div>
        </div>
    </div>
</div>