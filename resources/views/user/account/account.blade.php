@extends('layouts.user')
 @section('title', 'My Account')
 @section('css/account')     
 <link href="{{ asset('public/user-dash/css/account.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
<div class="card">
    <div id="user-profile-2" class="user-profile">
        <div class="tabbable hwstabs" tab-url="{{route('account')}}">
            <!-- Start of tab buttons -->
            <ul class="nav nav-tabs padding-18">
                <li class="@if(request()->url()==route('account',['tab'=>'information'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#information">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Information
                    </a>
                </li>
                <li class="@if(request()->url()==route('account',['tab'=>'password'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#password">
                        <i class="green ace-icon fa fa-lock bigger-120"></i>
                        Password
                    </a>
                </li>
                <li class="@if(request()->url()==route('account',['tab'=>'plan'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#plan">
                        <i class="green ace-icon fa fa-users bigger-120"></i>
                        Plan 
                    </a>
                </li>
                <li class="@if(request()->url()==route('account',['tab'=>'history'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#history">
                        <i class="green ace-icon fa fa-history bigger-120"></i>
                        History
                    </a>
                </li>
                <li class="@if(request()->url()==route('account',['tab'=>'delete'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#delete">
                        <i class="green ace-icon fas fa-camera bigger-120"></i>
                        Delete Account
                    </a>
                </li>
            </ul>
            <!-- End of Tab Buttons -->
            
            <div class="tab-content no-border padding-24">
                @if(session()->has('success'))
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="alert alert-success">
                                <strong>{{ session('success') }}</strong>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- Start of Information Tab -->
                <div id="information" class="tab-pane @if(request()->url()==route('account',['tab'=>'information'])) {{ 'in active' }} @endif">
                    <div class="space-20">
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-3">Account info</h5>
                            <div class="row">
                                <div class="col-sm">
                                    Name: 
                                </div>
                                <div class="col" style="text-transform: capitalize;">
                                    {{Auth::user()->first_name}}
                                    {{Auth::user()->last_name}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                Username: 
                                </div>
                                <div class="col-sm">
                                {{Auth::user()->username}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                Email: 
                                </div>
                                <div class="col-sm">
                                {{Auth::user()->email}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                Sign Up Date:
                                </div>
                                <div class="col-sm">
                                {{Auth::user()->created_at->format('M-d-Y')}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                Location:
                                </div>
                                <div class="col-sm">
                                    <span style="color: #212529;text-transform: capitalize;">@if($userData->loc_country){{$userData->loc_country->name}} :@endif @if($userData->loc_city){{$userData->loc_city->name}}@endif,
                                    @if($userData->loc_state){{$userData->loc_state->name}}@endif</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user.updateloc')}}" method="POST">
                                @csrf
                                
                                <h5 class="card-title mb-3">Change Location</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="state"><strong>Country</strong></label>
                                        <select class="form-control text-capitalize" name="country" id="country"  required>
                                            <option value="" class="text-capitalize">Country</option>
                                            @if($countries)
                                                @foreach($countries as $country)     
                                                    <option value="{{ $country->id }}" class="text-capitalize"  @if($country->id == $userData->country) selected @endif > {{ $country->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <span class="invalid-feedback" id="country-empty" role="alert">
                                            <strong>Please Choose Country</strong>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state"><strong>State</strong></label>
                                        <select class="form-control text-capitalize" name="state" id="state" required>
                                            <option value="">State</option>
                                        </select>
                                        @error('state')
                                        <span class="invalid-feedback d-block" id="state-empty" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror 
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state"><strong>City</strong></label>
                                        <select class="form-control text-capitalize" name="city" id="city" required>
                                            <option value="">City</option>
                                        </select>
                                        @error('city')
                                        <span class="invalid-feedback d-block" id="city-empty" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror    
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                </div>
                                <button type="submit" class="btn btn-primary" style="background-color:#009900;">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /#End of Information Tab -->

                <!-- /#Start of Password Tab -->
                <div id="password" class="tab-pane @if(request()->url()==route('account',['tab'=>'password'])) {{ 'in active' }} @endif">
                    <div class="card">

                        <div class="card-body">
                            
                            <form action="{{route('user.changePassword')}}" method="POST">
                                @csrf
                                <h5 class="card-title">Security Questions for blocked account from incorrect email/password combination:</h5>
                                <div class="form-group row">
                                    <div class="col-md-12 mb-2">
                                        <select class="form-control" name="ques1" id="ques1" required>
                                            <option value="">Please Select Security Question</option>
                                            @if($securityQuestions)
                                                @foreach($securityQuestions as $Question)
                                                    <option @if($Question==$userData->ques1)) selected @endif>{{ $Question }}</option>
                                                @endforeach
                                            @endif  
                                        </select>
                                        @error('ques1')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <input id="ans1" type="text" class="form-control @error('ans1') is-invalid @enderror" name="ans1" value="{{ $userData->ans1 }}" placeholder="Answer" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 mb-2">
                                        <select class="form-control" name="ques2" id="ques2" required>
                                            <option value="">Please Select Security Question</option>
                                            @if($securityQuestions)
                                                @foreach($securityQuestions as $Question)
                                                    <option @if($Question==$userData->ques2) selected @endif>{{ $Question }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('ques2')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <input id="ans2" type="text" class="form-control @error('ans2') is-invalid @enderror" name="ans2" value="{{ $userData->ans2}}" placeholder="Answer" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 mb-2">
                                        <select class="form-control" name="ques3" id="ques3" required>
                                            <option value="">Please Select Security Question</option>
                                            @if($securityQuestions)
                                                @foreach($securityQuestions as $Question)
                                                    <option @if($Question==$userData->ques3) selected @endif>{{ $Question }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('ques3')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <input id="ans3" type="text" class="form-control @error('ans3') is-invalid @enderror" name="ans3" value="{{ $userData->ans3 }}" placeholder="Answer" required>
                                    </div>
                                </div>
                                <h5 class="card-title">Change Password</h5>                                
                                <div class="form-group">
                                    <label for="inputPasswordCurrent">Current password</label>
                                    <input type="password" class="form-control" id="inputPasswordCurrent" name="password" value="{{ old('password') }}">
                                    @error('password')
                                        <span class="invalid-feedback d-block" id="state-empty" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" name="newpassword" value="{{ old('newpassword') }}">
                                    @error('newpassword')
                                        <span class="invalid-feedback d-block" id="state-empty" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew2">Verify New password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew2" name="confpassword" value="{{ old('confpassword') }}">
                                    @error('confpassword')
                                        <span class="invalid-feedback d-block" id="state-empty" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror 
                                </div>
                                <button type="submit" class="btn btn-primary" style="background-color:#009900;">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /#End of Password Tab -->

                <!-- /#Start of Plan Tab -->
                <div id="plan" class="tab-pane @if(request()->url()==route('account',['tab'=>'plan'])) {{ 'in active' }} @endif">
                    <div class="alert alert-warning">
                        <strong>Reminder!</strong> Your account will be deleted in 9 days. Please renew or download your data before your account ends. 
                    </div>
                    <div class="row">
                        <div class="card" style="width: 63rem;">
                            <div class="card-header">
                                <h5 class="card-title mb-3">My Plan</h5>
                                <div class="row">
                                    <div class="col-sm">
                                        Name: 
                                    </div>
                                    <div class="col" style="text-transform: capitalize;">
                                        {{Auth::user()->first_name}}
                                        {{Auth::user()->last_name}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                    Email: 
                                    </div>
                                    <div class="col-sm">
                                    {{Auth::user()->email}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                    Sign Up Date:
                                    </div>
                                    <div class="col-sm">
                                    {{Auth::user()->created_at->format('M-d-Y')}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                    Paypal Account
                                    </div>
                                    <div class="col-sm">
                                    xxxxxxxxxxxxxxxxx
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                    Term
                                    </div>
                                    <div class="col-sm">
                                        @if($currPlan) ${{$currPlan->amount}} a {{$currPlan->type}} @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <form action="{{route('user.changePlan')}}" method="POST">
                                    @csrf
                                    <h5 class="card-title mb-3">Change Plan</h5>
                                    <div class="form-row ">
                                        @if($plans)
                                        @foreach($plans as $plan)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="plan" id="normal-plan_{{$plan->id}}" value="{{$plan->id}}" @if($plan->id==$userData->plan) checked @endif >
                                                <label class="form-check-label" for="normal-plan_{{$plan->id}}">${{$plan->amount}} a {{$plan->type}}</label>
                                            </div>
                                        @endforeach
                                        @endif
                                        
                                    </div>
                                    <div class="form-row pb-3">
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="background-color:#009900;">Pay</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /#End of Plan Tab -->

                <!-- /#Start of History Tab -->
                <div id="history" class="tab-pane @if(request()->url()==route('account',['tab'=>'history'])) {{ 'in active' }} @endif">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-3">History</h5>
                            <div class="col-sm-12  ">
                                <div class="x_panel">
                                    <div class="x_title">
                                    <div class="form-group row">
										<div class="col-md-6 col-sm-6">
											<select class="form-control">
                                                <option>Select Year</option>
												<option>2022</option>
												<option>2023</option>
												<option>2024</option>
												<option>2025</option>
											</select>
										</div>
									</div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-lg-12 profile_box">
                                            @include('user.paymentsTable')
                                        </div>
                                        <!-- <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Month</th>
                                                    <th>Date</th>
                                                    <th>Descriptions</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">January</th>
                                                    <td>January 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">February</th>
                                                    <td>February 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">March</th>
                                                    <td>March 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">April</th>
                                                    <td>April 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">May</th>
                                                    <td>May 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">June</th>
                                                    <td>June 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">July</th>
                                                    <td>July 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">August</th>
                                                    <td>August 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">September</th>
                                                    <td>September 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">October</th>
                                                    <td>October 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">November</th>
                                                    <td>November 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">December</th>
                                                    <td>December 6th, 2021</td>
                                                    <td>Monthly</td>
                                                    <td>$9.99</td>
                                                </tr>
                                            </tbody>
                                        </table> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#End of History Tab -->

                <!-- /#Start of Delete Tab -->
                <div id="delete" class="tab-pane @if(request()->url()==route('account',['tab'=>'delete'])) {{ 'in active' }} @endif">
                    <div class="alert alert-danger">
                         <strong>Important!</strong> Once you delete your account from Kunnec.com, all of your data will be removed from Kunnec.com. Please download all of your data you want to keep because your data belongs to you and we have no way of retrieving your data once you delete your account.
                    </div>
                    <div class="row ">
                         <div class="col ">
                             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete My Account</button>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection

@section('additional-js')

<script>
    /*var getStatesUrl = "{{ route('landing') }}"+"/states/";
    var getCitiesUrl = "{{ route('landing') }}"+"/cities/";*/
    var oldState = "{{$userData->state}}";
    var oldCity = "{{$userData->city}}";
    var oldCountry = "{{$userData->country}}";
    var oldGender = "";
    var oldPlan = "";
    var oldDOB = ""
    $(document).ready(function(){
        
    });
</script>
<script src="{{ asset('public/js/pages/signup.js') }}"></script>
@endsection