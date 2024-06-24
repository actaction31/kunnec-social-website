<div class="col-lg-12 rounded mb-2 header2" style="padding: 0px;">
    <div class="card-header1">
        <div class="row">
            <div class="col-10 mt-2" style="padding: 0px;">
                <p>
                    <a href="{{ route('k2me.jobsHome') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec Jobs</a>
                     |&nbsp;               
                    <a href="{{ route('k2me.myJobs') }}" style="font-size:20px; color: #ffffff;">
                        <i class="fas fa-clipboard-list" data-toggle="tooltip" data-placement="bottom" title="Posts" style="color: #FFFFFF;"></i> 
                    <span1 class="badge badge-danger"> {{Auth::user()->jobs_count->count()}}</span1>
                    </a>
                    &nbsp;               
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
            <div class="row p-3">
                <div class="col">
                    <form class="form-inline" action="{{route('k2me.search')}}" method="GET">
                        @csrf
                        <div class="md-form my-0">
                            <input class="form-control" type="text" placeholder="Search Opportunities" name="q" aria-label="Search">
                        </div>
                        <div class="ml-2">
                            <button class="btn btn-outline-light btn-md my-0 ml-sm-2" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class=" col pb-4">
                <div class="border p-card rounded">
                    <div class="media">
                        <div class="container">
                            <form class="" action="{{route('k2me.search')}}" method="GET">
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
                                            {{--
                                            <select class="custom-select" id="card-holder-category" name="subcat_id">
                                                <option value="" disabled selected>Select Category ...</option>
                                                @if($cats)
                                                    @foreach($cats as $cat)
                                                        <optgroup label="{{$cat->name}}">
                                                            @if($cat->subcats)
                                                                @foreach($cat->subcats as $subcats)
                                                                    <option value="{{$subcats->id}}">{{$subcats->name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </optgroup>
                                                    @endforeach
                                                @endif
                                            </select>
                                            --}}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::select('classification',$classifications,old('classifications'),['class'=>'custom-select text-capitalize','placeholder'=>'Type of Post ...']) !!}
                                        </div>
                                        {{-- <div class="form-group">
                                            <select class="custom-select" id="card-holder-country" name="customSelectCountry">
                                                <option value="" disabled selected>Select Language ...</option>
                                                <option value="Afrikanns">Afrikanns</option>
                                                <option value="Albanian">Albanian</option>
                                                <option value="Albanian">Amharic</option>
                                                <option value="Arabic">Arabic</option>
                                                <option value="Armenian">Armenian</option>
                                                <option value="Basque">Basque</option>
                                                <option value="Albanian">Belarusian</option>
                                                <option value="Bengali">Bengali</option>
                                                <option value="Albanian">Bosnian</option>
                                                <option value="Bulgarian">Bulgarian</option>
                                                <option value="Catalan">Catalan</option>
                                                <option value="Cambodian">Cambodian</option>
                                                <option value="Albanian">Cebuano</option>
                                                <option value="Albanian">Chichwea</option>
                                                <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                                <option value="Albanian">Corsican</option>
                                                <option value="Croation">Croation</option>
                                                <option value="Czech">Czech</option>
                                                <option value="Danish">Danish</option>
                                                <option value="Dutch">Dutch</option>
                                                <option value="English">English</option>
                                                <option value="Estonian">Estonian</option>
                                                <option value="Albanian">Filipino</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finnish">Finnish</option>
                                                <option value="French">French</option>
                                                <option value="Albanian">Gallician</option>
                                                <option value="Georgian">Georgian</option>
                                                <option value="German">German</option>
                                                <option value="Greek">Greek</option>
                                                <option value="Gujarati">Gujarati</option>
                                                <option value="Albanian">Hausa</option>
                                                <option value="Albanian">Cebuano</option>
                                                <option value="Hebrew">Hawaiian</option>
                                                <option value="Albanian">Hebrew</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Albanian">Hmong</option>
                                                <option value="Hungarian">Hungarian</option>
                                                <option value="Icelandic">Icelandic</option>
                                                <option value="Albanian">Igbo</option>
                                                <option value="Indonesian">Indonesian</option>
                                                <option value="Irish">Irish</option>
                                                <option value="Italian">Italian</option>
                                                <option value="Japanese">Japanese</option>
                                                <option value="Javanese">Javanese</option>
                                                <option value="Albanian">Kannada</option>
                                                <option value="Albanian">Kazakh</option>
                                                <option value="Albanian">Khmer</option>
                                                <option value="Korean">Korean</option>
                                                <option value="Albanian">Kurdish</option>
                                                <option value="Albanian">Kyrgyz</option>
                                                <option value="Albanian">Lao</option>
                                                <option value="Latin">Latin</option>
                                                <option value="Latvian">Latvian</option>
                                                <option value="Lithuanian">Lithuanian</option>
                                                <option value="Albanian">Luxembourgish</option>
                                                <option value="Macedonian">Macedonian</option>
                                                <option value="Albanian">Malagasy</option>
                                                <option value="Malay">Malay</option>
                                                <option value="Malayalam">Malayalam</option>
                                                <option value="Maltese">Maltese</option>
                                                <option value="Maori">Maori</option>
                                                <option value="Marathi">Marathi</option>
                                                <option value="Mongolian">Mongolian</option>
                                                <option value="Albanian">Myammar</option>
                                                <option value="Nepali">Nepali</option>
                                                <option value="Norwegian">Norwegian</option>
                                                <option value="Albanian">Pashto</option>
                                                <option value="Persian">Persian</option>
                                                <option value="Polish">Polish</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="Punjabi">Punjabi</option>
                                                <option value="Quechua">Quechua</option>
                                                <option value="Romanian">Romanian</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Samoan">Samoan</option>
                                                <option value="Albanian">Scots Gaelic</option>
                                                <option value="Serbian">Serbian</option>
                                                <option value="Albanian">Sesotho</option>
                                                <option value="Albanian">Shona</option>
                                                <option value="Albanian">Sinhala</option>
                                                <option value="Slovak">Slovak</option>
                                                <option value="Slovenian">Slovenian</option>
                                                <option value="Albanian">Somali</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Albanian">Sundanese</option>
                                                <option value="Swahili">Swahili</option>
                                                <option value="Swedish ">Swedish </option>
                                                <option value="Albanian">Tajik</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Tatar">Tatar</option>
                                                <option value="Telugu">Telugu</option>
                                                <option value="Thai">Thai</option>
                                                <option value="Tibetan">Tibetan</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Turkish">Turkish</option>
                                                <option value="Ukranian">Ukranian</option>
                                                <option value="Urdu">Urdu</option>
                                                <option value="Uzbek">Uzbek</option>
                                                <option value="Vietnamese">Vietnamese</option>
                                                <option value="Welsh">Welsh</option>
                                                <option value="Xhosa">Xhosa</option>
                                                <option value="Albanian">Yiddish</option>
                                                <option value="Albanian">Yoruba</option>
                                                <option value="Albanian">Zulu</option>
                                            </select>
                                        </div> --}}
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
                                        {{-- <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Full Time</label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Part Time</label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Remote</label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Internship</label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Freelance</label>
                                        </div> --}}
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check-label" style="color: #F1C40F">Payment</div>
                                         @if($paymentTypes)
                                            @foreach($paymentTypes as $key=>$paymentType)
                                                <div class="form-group form-check-inline">
                                                    <input class="form-check-input" id="{{$key}}" type="checkbox" value="{{$key}}" name="payment_types[]">
                                                    <label class="form-check-label" for="{{$key}}" style="color: #FFFFFF">{{$paymentType}} </label>
                                                </div>
                                            @endforeach
                                        @endif

                                        {{-- <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Hourly</label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Weekly</label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                            <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Completion</label>
                                        </div>
                                        <div class="form-group form-check-inline">
                                            <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">No Payment</label>
                                        </div> --}}
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