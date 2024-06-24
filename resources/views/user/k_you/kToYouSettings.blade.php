@extends('layouts.user')
@section('title', 'K2U Settings')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/settings.css') }}" rel="stylesheet"></link>
<style type="text/css">
	.portfolio_file {
	    height: 200px;
	}
</style>
@endsection
@section('content')
@include('user.k_you.profileFilters')   
<div class="card">
	<div class="card-body" style="padding: 20px 0px;">
		<div class="tabbable hwstabs" tab-url="{{route('k2u.settings')}}">
			<!-- Start of Tabs -->
			<ul class="nav nav-tabs" id="2uTab" role="tablist">
				<li class="nav-item @if(request()->url()==route('k2u.settings',['tab'=>'setup'])) {{ 'active' }} @endif">
					<a class="nav-link @if(request()->url()==route('k2u.settings',['tab'=>'setup'])) {{ 'active show' }} @endif" id="tab-setup" data-toggle="tab" href="#setup" role="tab" aria-controls="tab-setup" aria-selected="true">To You Setup</a>
				</li>
				<li class="nav-item @if(request()->url()==route('k2u.settings',['tab'=>'work-history'])) {{ 'active' }} @endif">
					<a class="nav-link @if(request()->url()==route('k2u.settings',['tab'=>'work-history'])) {{ 'active show' }} @endif" id="tab-work-history" data-toggle="tab" href="#work-history" role="tab" aria-controls="tab-work-history" aria-selected="false">My Work History</a>
				</li>
				<li class="nav-item @if(request()->url()==route('k2u.settings',['tab'=>'portfolio'])) {{ 'active' }} @endif">
					<a class="nav-link @if(request()->url()==route('k2u.settings',['tab'=>'portfolio'])) {{ 'active show' }} @endif" id="tab-portfolio" data-toggle="tab" href="#portfolio" role="tab" aria-controls="tab-portfolio" aria-selected="false">My Portfolio</a>
				</li>
				<li class="nav-item @if(request()->url()==route('k2u.settings',['tab'=>'favorites'])) {{ 'active' }} @endif">
					<a class="nav-link @if(request()->url()==route('k2u.settings',['tab'=>'favorites'])) {{ 'active show' }} @endif" id="tab-favorites" data-toggle="tab" href="#favorites" role="tab" aria-controls="tab-favorites" aria-selected="true">Favorites</a>
				</li>
				<!-- <li class="nav-item @if(request()->url()==route('k2u.settings',['tab'=>'analytics'])) {{ 'active' }} @endif">
					<a class="nav-link @if(request()->url()==route('k2u.settings',['tab'=>'analytics'])) {{ 'active show' }} @endif" id="tab-analytics" data-toggle="tab" href="#analytics" role="tab" aria-controls="tab-anal" aria-selected="true">Analytics</a>
				</li> -->
			</ul>

	<div class="tab-content border-x border-bottom p-3" id="myTabContent">
		@if(session()->has('success'))
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="alert alert-success">
                        <strong>{{ session('success') }}</strong>
                    </div>
                </div>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-dismissible alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
		<div class="tab-pane fade @if(request()->url()==route('k2u.settings',['tab'=>'setup'])) {{ 'active show' }} @endif" id="setup" role="tabpanel" aria-labelledby="setup-tab">
			<div class="card">
				<div class="card-body p-0">
					<hr class="style-12">
					{!! Form::open(['route'=>['k2u.settings.setup'],'files' => true]) !!}
						<div class="row no-gutters">
							<div class="col-lg-8 pr-lg-2">
								<div class="card mb-3">
									<div class="card-header1">
										<h5 class="mb-0" style="color:#ffffff;">Setup a Kunnec to You Profile</h5>
									</div>
									<div class="card-body bg-light">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													
													{{--
													<hr>
													<div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
														<input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
														<label id="upload-label" for="upload" class="font-weight-light text-muted">Choose Kunnec Profile Image</label>
														<div class="input-group-append">
															<label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fas fa-cloud-upload-alt" style="color: #009900;"></i><small class="text-uppercase font-weight-bold text-muted"> Choose file</small></label>
														</div>
													</div>
													<p class="font-italic text-success text-center">The image uploaded will be rendered below.
													</p>
													<div class="image-area mt-4">
														<img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
													</div>
													--}}
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<hr>
													<label class="mb-0">Email</label>
													{!! Form::email('email',$userData->email,["class"=>"form-control","id"=>"k2uEmail","aria-describedby"=>"emailHelp","placeholder"=>"Email","readonly"=>"readonly"])!!}
													<small id="emailHelp" class="form-text text-success">
														<div class="form-group form-check-inline">
															{!! Form::checkbox('is_email','0',$profile->is_email,["class"=>"form-check-input","id"=>"is_email"]) !!}
															<label class="form-check-label" for="is_email">Show Email on profile </label>
														</div>
													</small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<hr>
													<label class="mb-0">Address</label>
													{!! Form::textarea('address',$profile->address,["class"=>"form-control","rows"=>"3","placeholder"=>"Address"])!!}
													<small id="emailHelp" class="form-text text-success">
														<div class="form-group form-check-inline">
															{!! Form::checkbox('is_address','0',$profile->is_address,["class"=>"form-check-input","id"=>"is_address"]) !!}
															<label class="form-check-label" for="is_address">Show Address with map on profile </label>
														</div>
													</small>
												</div>
											</div>

											<div class="col-12">
												<div class="form-group">
													<label class="mb-0">Phone</label>
													{!! Form::number('phone',$profile->phone,["class"=>"form-control","placeholder"=>"Phone Number"]) !!}
													<small id="emailHelp" class="form-text text-success ">
														<div class="form-group form-check-inline">
															{!! Form::checkbox('is_phone','0',$profile->is_phone,["class"=>"form-check-input","id"=>"is_phone"]) !!}
															<label class="form-check-label" for="is_phone">Show Phone on profile </label>
														</div>
													</small>
												</div>
												<hr>
											</div>

											<div class="col-lg-6">
												<div class="form-group">
													<label class="mb-0">Job Title</label>
													{!! Form::select('job_cat_id',$jobCats,$profile->job_cat_id,['class'=>'selectpicker form-control','placeholder'=>'Select Job Title ...']) !!}
													<span class="invalid-feedback d-block" role="alert">
				                                        <strong>{{ $errors->first('job_cat_id') }}</strong>
				                                    </span>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label class="mb-0">About Me</label>
													<textarea class="form-control" id="about_me1" name="about_me" cols="30" rows="13" placeholder="Type about me section ...">{!! $profile->about_me !!}</textarea>
													<span class="invalid-feedback d-block" role="alert">
				                                        <strong>{{ $errors->first('about_me') }}</strong>
				                                    </span>
												</div>
											</div>

											<div class="col-12">
												<hr>
												<div class="card-header1">
													<h5 class="mb-0" style="color:#ffffff;">Education</h5>
												</div>
												<br>
												<div class="educations_block" id="dyna_educations">
													@if($profile->educations)
														@foreach ($profile->educations as $education)
															@include('user.k_you.education')
														@endforeach
													@endif
												</div>
												<div class="d-flex justify-content-end">
													<button class="btn btn-success" id="addEducation" type="button">Add Education </button>
												</div>
												
											</div>

											<div class="col-12">
												<hr>
												<div class="card-header1">
													<h5 class="mb-0" style="color:#ffffff;">Certifications</h5>
												</div><br>
												<div class="certifications_block" id="dyna_certifications">
													@if($profile->certifications)
														@foreach ($profile->certifications as $certification)
															@include('user.k_you.certification')
														@endforeach
													@endif
												</div>
												<div class="d-flex justify-content-end">
													<button class="btn btn-success" id="addCertification" type="button">Add Certification </button>
												</div>
											</div>
											<div class="col-12">
												<hr>
											</div>
											<div class="col-12 d-flex justify-content-end">
												<button class="btn btn-success" style="width:100%;"  type="submit">Update </button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 pl-lg-2">
								<div class="sticky-top sticky-sidebar">
									<div class="card mb-3 overflow-hidden">
										<div class="card-header1">
											<h5 class="mb-0" style="color:#ffffff;">Select Languages You Know</h5>
										</div>
										<br>
										@for($i=0;$i<4;$i++)
											@php $lang=""; if($profile->languages){ $lang=$profile->languages[$i];}@endphp
											<div class="row">
												<div class="col">
													<div class="form-group col-sm">
														{!! Form::select('languages[]',$languages,$lang,['class'=>'custom-select text-capitalize','placeholder'=>'Select Language '.($i+1).' ...']) !!}
													</div>
												</div>
											</div>
										@endfor  
										<div class="row">
											<div class="col-sm">
												<div class="card mb-3">
													<div class="card-header1">
														<h5 class="mb-0" style="color:#ffffff;"> Your Social Links</h5>
													</div>
													<div class="card-body bg-light">
														@if($userData->website)
														<div class="input-group mb-2">
															<div class="form-group form-check-inline">
																{!! Form::checkbox('is_website','0',$profile->is_website,["class"=>"form-check-input","id"=>"is_website"]) !!}
																<label class="form-check-label" for="is_website">Your Website</label>
															</div>
														</div>
														@endif
														@if($userData->website)
														<div class="input-group mb-2">
															<div class="form-group form-check-inline">
																{!! Form::checkbox('is_facebook','0',$profile->is_facebook,["class"=>"form-check-input","id"=>"is_facebook"]) !!}
																<label class="form-check-label" for="is_facebook">Facebook</label>
															</div>
															
														</div>
														@endif
														@if($userData->website)
														<div class="input-group mb-2">
															<div class="form-group form-check-inline">
																{!! Form::checkbox('is_instagram','0',$profile->is_instagram,["class"=>"form-check-input","id"=>"is_instagram"]) !!}
																<label class="form-check-label" for="is_instagram">Instagram</label>
															</div>
															
														</div>
														@endif
														@if($userData->twitter)
														<div class="input-group mb-2">
															<div class="form-group form-check-inline">
																{!! Form::checkbox('is_twitter','0',$profile->is_twitter,["class"=>"form-check-input","id"=>"is_twitter"]) !!}
																<label class="form-check-label" for="is_twitter">Twitter</label>
															</div>
															
															
														</div>
														@endif
														@if($userData->pinterest)
														<div class="input-group mb-2">
															<div class="form-group form-check-inline">
																{!! Form::checkbox('is_pinterest','0',$profile->is_pinterest,["class"=>"form-check-input","id"=>"is_pinterest"]) !!}
																<label class="form-check-label" for="is_pinterest">Pinterest</label>
															</div>
															
														</div>
														@endif
														@if($userData->youtube)
														<div class="input-group mb-2">
															<div class="form-group form-check-inline">
																{!! Form::checkbox('is_youtube','0',$profile->is_youtube,["class"=>"form-check-input","id"=>"is_youtube"]) !!}
																<label class="form-check-label" for="is_youtube">Youtube</label>
															</div>
														</div>
														@endif
														@if($userData->inkedin)
														<div class="input-group mb-2">
															<div class="form-group form-check-inline">
																{!! Form::checkbox('is_linkedin','0',$profile->is_linkedin,["class"=>"form-check-input","id"=>"is_linkedin"]) !!}
																<label class="form-check-label" for="is_linkedin">Linkedin</label>
															</div>
														</div>
														@endif
														@if($userData->patreon)
														<div class="input-group mb-2">
															<div class="form-group form-check-inline">
																{!! Form::checkbox('is_patreon','0',$profile->is_patreon,["class"=>"form-check-input","id"=>"is_patreon"]) !!}
																<label class="form-check-label" for="is_patreon">Patreon</label>
															</div>
														</div>
														@endif
														<!-- <div class="input-group mb-2">
															<div class="input-group-prepend">
																<div class="input-group-text"><i class="fab fa-patreon"></i></div>
															</div>
															<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Patreon">
														</div> -->
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm">
												<div class="card mb-3">
													<div class="card-header1">
														<h5 class="mb-0" style="color:#ffffff;">Post Type</h5>
													</div>
													<div class="card-body bg-light">
														<div class="form-group">
															{!! Form::select('job_type',$classifications,$profile->job_type,['class'=>'form-control','placeholder'=>'Select here ...']) !!}
															<span class="invalid-feedback d-block" role="alert">
						                                        <strong>{{ $errors->first('job_type') }}</strong>
						                                    </span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm">
												<div class="card mb-3">
													<div class="card-header1">
														<h5 class="mb-0" style="color:#ffffff;">Availability Time</h5>
													</div>
													<div class="card-body bg-light">
														@if($jobTypes)
															@foreach ($jobTypes as $jobType)
																@php $val=0; if($profile->availability){if(in_array($jobType,$profile->availability)){ $val=1; }}@endphp
																<div class="form-group form-check-inline">
																	<div class="col-sm-12">
																		{!! Form::checkbox('availability[]',$jobType,$val,["class"=>"form-check-input","id"=>"avl_".$jobType]) !!}
																		<label class="form-check-label" for="avl_{{$jobType}}" style="color: #808080">{{$jobType}} </label>
																	</div>
																</div>   
															@endforeach
														@endif
														<div class="form-group">
															<label class="mb-0">Hours Avilable</label>
															{!! Form::selectRange('hr_week',1,50,$profile->hr_week,['class'=>'form-control','placeholder'=>'Hours Available ...']) !!}
															<span class="invalid-feedback d-block" role="alert">
						                                        <strong>{{ $errors->first('hr_week') }}</strong>
						                                    </span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm">
											<div class="card mb-3">
											<div class="card-header1">
											<h5 class="mb-0" style="color:#ffffff;">Payment Type</h5>
											</div>
											<div class="card-body bg-light">
											<div class="form-group">
												{!! Form::select('payment_type',$paymentTypes,$profile->payment_type,['class'=>'form-control','placeholder'=>'Select here ...']) !!}
												<span class="invalid-feedback d-block" role="alert">
			                                        <strong>{{ $errors->first('payment_type') }}</strong>
			                                    </span>
											</div>
												<div class="form-group">
													<label class="mb-0">Hourly Fee</label>
													{!! Form::number('hr_rate',$profile->hr_rate,["class"=>"form-control","placeholder"=>"Type Hourly Fee here ..."])!!}
													<span class="invalid-feedback d-block" role="alert">
				                                        <strong>{{ $errors->first('hr_rate') }}</strong>
				                                    </span>
												</div>
												<div class="form-group">
													<label class="mb-0">Annual Salary</label>
													{!! Form::number('annual_salary',$profile->annual_salary,["class"=>"form-control","placeholder"=>"Type Salary Fee here ..."])!!}
													<span class="invalid-feedback d-block" role="alert">
				                                        <strong>{{ $errors->first('annual_salary') }}</strong>
				                                    </span>
													
												</div>
											</div>
											</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm">
											<div class="card mb-3">
											<div class="card-header1">
											<h5 class="mb-0" style="color:#ffffff;">Currency Accepted</h5>
											</div>
											<div class="card-body bg-light">
											<div class="form-group form-check-inline">
											<div class="col-sm-12">
											<input class="form-check-input" id="defaultcheckbox1" type="checkbox">
											<label class="form-check-label" for="defaultcheckbox1" style="color: #808080">U.S. Dollar (USD) </label>
											</div>
											</div>
											<div class="form-group form-check-inline">
											<div class="col-sm-12">
											<input class="form-check-input" id="defaultcheckbox1" type="checkbox">
											<label class="form-check-label" for="defaultcheckbox1" style="color: #808080">European Euro (EUR)</label>
											</div>
											</div>
											<div class="form-group form-check-inline">
											<div class="col-sm-12">
											<input class="form-check-input" id="defaultcheckbox1" type="checkbox">
											<label class="form-check-label" for="defaultcheckbox1" style="color: #808080">Japenese Yen (JPY)</label>
											</div>
											</div>
											<div class="form-group form-check-inline">
											<div class="col-sm-12">
											<input class="form-check-input" id="defaultcheckbox1" type="checkbox">
											<label class="form-check-label" for="defaultcheckbox1" style="color: #808080">British Pound (GBP)</label>
											</div>
											</div>
											<div class="form-group form-check-inline">
											<div class="col-sm-12">
											<input class="form-check-input" id="defaultcheckbox1" type="checkbox">
											<label class="form-check-label" for="defaultcheckbox1" style="color: #808080">Swiss Franc (CHF)</label>
											</div>
											</div>
											<div class="form-group form-check-inline">
											<div class="col-sm-12">
											<input class="form-check-input" id="defaultcheckbox1" type="checkbox">
											<label class="form-check-label" for="defaultcheckbox1" style="color: #808080">Canadian Dollar (CAD)</label>
											</div>
											</div>
											<div class="form-group form-check-inline">
											<div class="col-sm-12">
											<input class="form-check-input" id="defaultcheckbox1" type="checkbox">
											<label class="form-check-label" for="defaultcheckbox1" style="color: #808080">Chinese Renminbi (RMB)</label>
											</div>
											</div>
											</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>   
					{!! Form::close() !!}       
				</div>
			</div>
		</div>
		<!-- Start of My Work History Tab -->
		<div class="tab-pane fade @if(request()->url()==route('k2u.settings',['tab'=>'work-history'])) {{ 'active show' }} @endif" id="work-history" role="tabpanel" aria-labelledby="whistory-tab">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center justify-content-between">
						<div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
							<h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-th-list"></i> &nbsp;My History</h5>
						</div>
					</div>
					<div class="col-12">
						<hr>
						<div class="card-header1">
							<h5 class="mb-0" style="color:#ffffff;">Work History</h5>
						</div><br>
						{!! Form::open(['route'=>['k2u.settings.createWorkHistory'],'files' => true]) !!}
						<div id="dyna_workHistory">
							@if($profile->work_histories)
								@foreach ($profile->work_histories as $work_history)
									@include('user.k_you.workHistory')
								@endforeach
							@endif
						</div>
						<div class="d-flex justify-content-end">
							<button class="btn btn-success" id="addWork" type="button">Add Work </button>
							<button class="btn btn-success" type="submit">Update </button>
						</div>
						{!! Form::close() !!}       
					</div>
				</div>
			</div>
		</div>

		<!-- Start of Portfolio Tab -->
		<div class="tab-pane fade @if(request()->url()==route('k2u.settings',['tab'=>'portfolio'])) {{ 'active show' }} @endif" id="portfolio" role="tabpanel" aria-labelledby="tab-portifolio">
			<div id="accordion">
				<div class="card-header1">
					<h5 class="mb-0" style="color:#ffffff;">Check the box of the Portfolio section you want added and open section.
					</h5>
				</div>
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<div class="form-inline">
								<input class="form-check-input" type="checkbox" value="" id="check_music">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapseMusic" aria-expanded="true" aria-controls="collapseMusic" style="color: #009900;white-space: normal;">
								Music ( Artist, Producers, Arrangers, Engineers and Song Writers )
								</button>
							</div>
						</h5>
					</div>
					<div id="collapseMusic" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body p-0">
							<div class="card-header" style="display: inline-block;width: 100%;">
								<div class="float-left"><strong>Upload Mp3 Music File Only</strong> </div>
								<div class="float-right"><strong>6 files </strong> max</div>
							</div>
							<div class="card-body card-block p-0">
								{!! Form::open(['route'=>['k2u.settings.createPortfolio'],"class"=>"form-horizontal",'files' => true]) !!}
									<div class="row form-group">
										<div class="col-12 col-md-12">
											<div class="control-group" id="fields">
												<!-- <label class="control-label" for="field1">
													Requests
												</label> -->
												<div class="controls_music">
													<!-- <div class="entry_music input-group upload-input-group">
														<input class="form-control" name="fields[]" type="file">
														<button class="btn btn-upload btn-success btn-add" type="button"><i class="fa fa-plus"></i></button>
														<div class="col-12 mt-2">
															<div class="form-group">
																<textarea class="form-control" id="intro" name="intro" cols="30" rows="2" placeholder="Type a brief description ..."></textarea>
															</div>
														</div>
													</div> -->
													@if(!$portfolios->isEmpty() && isset($portfolios['audio']))
														@foreach($portfolios['audio'] as $portfolio)
															@include('user.k_you.addPortfolio',['type'=>'audio'])
														@endforeach
													@endif
												</div>
												<button type="submit" class="btn1 btn-kunnec">Upload</button>
												<button class="btn1 btn-kunnec addPortfolio" type="button" data-container="controls_music" data-type="audio"><i class="fa fa-plus"></i></button>
											</div>
										</div>
									</div>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingVideos">
						<h5 class="mb-0">
							<div class="form-inline">
								<input class="form-check-input" type="checkbox" value="" id="check_videos">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseVideos" aria-expanded="false" aria-controls="collapseVideos" style="color: #009900;    white-space: normal;">
								Videos ( Directors, Editors, Promotion Video, Lighting and Choreographers )
								</button>
							</div>
						</h5>
					</div>
					<div id="collapseVideos" class="collapse" aria-labelledby="headingVideos" data-parent="#accordion">
						<div class="card-body p-0">
							<div class="card-header" style="display: inline-block;width: 100%;">
								<div class="float-left"><strong>Upload Mp4 Video File Only</strong> </div>
								<div class="float-right"><strong>3 files </strong> max</div>
							</div>
							<div class="card-body card-block p-0">
								{!! Form::open(['route'=>['k2u.settings.createVideoPortfolio'],"class"=>"form-horizontal",'files' => true]) !!}
									<div class="row form-group">
										<div class="col-12 col-md-12">
											<div class="control-group" id="fields">
												<!-- <label class="control-label" for="field1">
												Requests
												</label> -->
												<div class="controls_video">
													<!-- <div class="entry_video input-group upload-input-group">
														<input class="form-control" name="fields[]" type="file">
														<button class="btn btn-upload btn-success btn-add" type="button">
														<i class="fa fa-plus"></i>
														</button>
														<div class="col-12 mt-2">
															<div class="form-group">
																<textarea class="form-control" id="intro" name="intro" cols="30" rows="2" placeholder="Type a brief description ..."></textarea>
															</div>
														</div>
													</div> -->
													@if(!$portfolios->isEmpty() && isset($portfolios['video']))
														@foreach($portfolios['video'] as $portfolio)
															@include('user.k_you.addPortfolio',['type'=>'video'])
														@endforeach
													@endif
												</div>
												
											</div>
										</div>
										<div class="col-sm-12">
											<button type="submit" class="btn1 btn-kunnec">Upload</button>
											<button class="btn1 btn-kunnec addPortfolio" type="button" data-container="controls_video" data-type="video"><i class="fa fa-plus"></i></button>
										</div>
									</div>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingImages">
						<h5 class="mb-0">
							<div class="form-inline">
								<input class="form-check-input" type="checkbox" value="" id="check_image">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseImages" aria-expanded="false" aria-controls="collapseImages" style="color: #009900;    white-space: normal;"> Images (  Photos, Art, Design and Projects )
								</button>
							</div>
						</h5>
					</div>
					<div id="collapseImages" class="collapse" aria-labelledby="headingImages" data-parent="#accordion">
						<div class="card-body p-0">
							<div class="card">
								<div class="card-header" style="display: inline-block;width: 100%;">
									<div class="float-left"><strong>Upload PNG or JPG Image File Only</strong> </div>
									<div class="float-right"><strong>12 Images </strong> max</div>
								</div>
								<div class="card-body card-block p-0">
									{!! Form::open(['route'=>['k2u.settings.createPortfolio'],"class"=>"form-horizontal",'files' => true]) !!}
										<div class="row form-group">
											<div class="col-12 col-md-12">
												<div class="control-group" id="fields">
													<!-- <label class="control-label" for="field1">Requests</label> -->
													<div class="controls_images">
														<!-- <div class="entry_images input-group upload-input-group">
															<input class="form-control" name="fields[]" type="file">
															<button class="btn btn-upload btn-success btn-add" type="button"><i class="fa fa-plus"></i></button>
															<div class="col-12 mt-2">
																<div class="form-group">
																	<textarea class="form-control" id="intro" name="intro" cols="30" rows="2" placeholder="Type a brief description ..."></textarea>
																</div>
															</div>
														</div> -->
														@if(!$portfolios->isEmpty() && isset($portfolios['img']))
															@foreach($portfolios['img'] as $portfolio)
																@include('user.k_you.addPortfolio',['type'=>'img'])
															@endforeach
														@endif
													</div>
													<button type="submit" class="btn1 btn-kunnec">Upload</button>
													<button class="btn1 btn-kunnec addPortfolio" type="button" data-container="controls_images" data-type="img"><i class="fa fa-plus"></i></button>
												</div>
											</div>
										</div>
									{!! Form::close() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Start of Favorites Tab -->
		<div class="tab-pane fade @if(request()->url()==route('k2u.settings',['tab'=>'favorites'])) {{ 'active show' }} @endif" id="favorites" role="tabpanel" aria-labelledby="tab-favorites">
			<div class="card">
				<div class="card-body p-0 overflow-hidden">
					<div class="row no-gutters">
						<hr class="style12">
						<div class="col-12 p-2">
							@if($favProfiles->total()>0)
	                            @foreach($favProfiles as $favProfile)
									<!-- Start of K2u Favorites-->
									<div class="p-1">
										<div class="row p-2">
											<div class="col-sm-3">
												<div class="hovereffect">
													<img class="img-fluid" src="@if($favProfile->profile->user){{$favProfile->profile->user->image}}@endif" width="250" alt="Card image cap" >
													<div class="overlay">
														<h2>
															<p class="card-text d-inline" style="font-size:.9rem;">
															<small class="text-white">@if($favProfile->profile->user){{$favProfile->profile->user->first_name}} @endif</small>
															</p>
														</h2>
														<a class="info" href="{{ route('k2u.profile',['user_id'=>$favProfile->profile->user_id]) }}">
															<button type="button" class="btn1 btn-kunnec">View</button>
														</a>
													</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="row">
													<a href="{{ route('k2u.profile',['user_id'=>$favProfile->profile->user_id]) }}">
														<h5 style="text-transform:capitalize;">
															@if($favProfile->profile->user){{$favProfile->profile->user->first_name}}@endif</h5>
													</a>
												</div>
												<div class="row">
													<div class="col-sm-3">
													<p  style="font-size: 14px;">{{$favProfile->profile->job_category->name}}</p>
													<p style="font-size: 12px;">
														@if($favProfile->profile->is_address){{$favProfile->profile->address}},@endif
			                                            @if($favProfile->profile->user)
			                                            @if($favProfile->profile->user->loc_city){{$favProfile->profile->user->loc_city->name}}@endif
			                                            @if($favProfile->profile->user->loc_state){{$favProfile->profile->user->loc_state->name}}@endif 
			                                            @if($favProfile->profile->user->loc_country){{$favProfile->profile->user->loc_country->name}}@endif
			                                            @endif 
			                                        </p>
													<p style="font-size: 12px;">@if($favProfile->profile->is_phone){{$favProfile->profile->phone}}@endif</p>
													</div>
													<div class="col-sm-9 text-pre-line break">
														{!!$favProfile->profile->short_aboutme!!}
													</div>
												</div>
												<hr class="style12">
												<div class="row">
													<ul class="nav justify-content-center">
														@if($favProfile->profile->is_website)
											            <li class="nav-item">
											                <a class="nav-link active" href="@if($favProfile->profile->user){{$favProfile->profile->user->webiste}}@endif"><i class="fas fa-globe"></i><small> My Website</small></a>
											            </li>
											            @endif
											            @if($favProfile->profile->is_facebook)
											            <li class="nav-item">
											                <a class="nav-link" href="@if($favProfile->profile->user){{$favProfile->profile->user->facebook}}@endif"><i class="fab fa-facebook"></i><small> Facebook</small></a>
											            </li>
											            @endif
											            @if($favProfile->profile->is_linkedin)
											            <li class="nav-item">
											                <a class="nav-link" href="@if($favProfile->profile->user){{$favProfile->profile->user->linkedin}}@endif"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
											            </li>
											            @endif
											            @if($favProfile->profile->is_youtube)
											            <li class="nav-item">
											                <a class="nav-link" href="@if($favProfile->profile->user){{$favProfile->profile->user->youtube}}@endif"><i class="fab fa-youtube"></i><small> YouTube</small></a>
											            </li>
											            @endif
											            @if($favProfile->profile->is_patreon)
											            <li class="nav-item">
											                <a class="nav-link" href="@if($favProfile->profile->user){{$favProfile->profile->user->patreon}}@endif"><i class="fab fa-patreon"></i><small> Patreon</small></a>
											            </li>
											            @endif
											            @if($favProfile->profile->is_instagram)
											            <li class="nav-item">
											                <a class="nav-link" href="@if($favProfile->profile->user){{$favProfile->profile->user->instagram}}@endif"><i class="fab fa-instagram"></i><small> Instagram</small></a>
											            </li>
											            @endif
											            @if($favProfile->profile->is_twitter)
											            <li class="nav-item">
											                <a class="nav-link" href="@if($favProfile->profile->user){{$favProfile->profile->user->twitter}}@endif"><i class="fab fa-twitter"></i><small> Twitter</small></a>
											            </li>
											            @endif
													</ul>
												</div>
											</div>
											<div class="col-sm-2 p-1">
												<div class="row">
													<a href="{{ route('k2u.profile',['user_id'=>$favProfile->profile->user_id]) }}">
														<button type="button" class="btn1 btn-outline-success">
															<i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
														</button>
													</a>
													<a href="{{ route('k2u.profile',['user_id'=>$favProfile->profile->user_id,'redirect'=>'chat']) }}">
														<button type="button" class="btn1 btn-outline-success">
															<i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
														</button>
													</a>
												</div>
												<hr class="style12">
											</div>
										</div>
									</div>
									<hr class="style12">
									<!-- End of K2u Favorites -->
								@endforeach 
	                        @else
	                            <div class="media text-muted pt-3 text-center">
	                                No Record Found
	                            </div>
	                        @endif 
							<div class="pagi_row">  
		                        <div class="page_counts"> 
		                            Results: {{ $favProfiles->firstItem() }}
		                            - {{ $favProfiles->lastItem() }}
		                            of 
		                            {{ $favProfiles->total() }}
		                        </div>
		                        <div class="vehi_pagination"> 
		                            {{ $favProfiles->links() }}
		                        </div>
		                    </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Start of analytics Tab -->
		<div class="tab-pane fade @if(request()->url()==route('k2u.settings',['tab'=>'analytics'])) {{ 'active show' }} @endif" id="analytics" role="tabpanel" aria-labelledby="tab-analytics">
			<div class="card">
			<div class="card-header">
			<div class="row align-items-center justify-content-between">
			<div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
			<h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-chart-bar"></i> &nbsp;My Analytics</h5>
			</div>  
			</div>
			<div class="row">
			<div class="col-sm-4">
			<div class="card mb-3">
			<div class="card-header pb-2" style="background-color: #009900;" >
			<h6 class="mb-0 mt-2 d-flex align-items-center" style="color:#FFFFFF;">Gender<span class="ml-1 text-400" data-toggle="tooltip" data-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
			</h6>
			</div>
			<div class="card-body">
			<div class="row h-100 justify-content-between no-gutters">
			<div class="col-5 col-sm-6 col-xxl pr-2">

			<div class="fs--2 mt-3">
			<div class="d-flex flex-between-center mb-1">
			<div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="font-weight-semi-bold">Male</span>
			</div>
			<div class="d-xxl-none">&nbsp; ( 33% )
			</div>
			</div>
			<div class="d-flex flex-between-center mb-1">
			<div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="font-weight-semi-bold">Female</span>
			</div>
			<div class="d-xxl-none">&nbsp; ( 67% )
			</div>
			</div>
			</div>
			</div>
			<div class="col-auto">
			<div class="echart-doughnut"></div>
			<div class="absolute-centered font-weight-medium text-dark fs-2">26M</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="col-sm-4">
			<div class="card mb-3">
			<div class="card-header pb-2" style="background-color: #009900;" >
			<h6 class="mb-0 mt-2 d-flex align-items-center" style="color:#FFFFFF;">Age Range<span class="ml-1 text-400" data-toggle="tooltip" data-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
			</h6>
			</div>
			<div class="card-body">
			<div class="row h-100 justify-content-between no-gutters">
			<div class="col-5 col-sm-6 col-xxl pr-2">

			<div class="d-flex flex-between-center mb-1">
			<div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="font-weight-semi-bold small-text">Age: 16 - 30</span>
			</div>

			</div>
			<div class="d-flex flex-between-center mb-1">
			<div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="font-weight-semi-bold">Age: 31 - 45</span>
			</div>

			</div>
			<div class="d-flex flex-between-center mb-1">
			<div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="font-weight-semi-bold">Age: Above</span>
			</div>

			</div>
			</div>
			<div class="col-auto">
			<div class="echart-doughnut"></div>
			<div class="absolute-centered font-weight-medium text-dark fs-2">26M</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="col-sm-4">
			<div class="card mb-3">
			<div class="card-header pb-2" style="background-color: #009900;" >
			<h6 class="mb-0 mt-2 d-flex align-items-center" style="color:#FFFFFF;">Weekly Sales<span class="ml-1 text-400" data-toggle="tooltip" data-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
			</h6>
			</div>
			<div class="card-body d-flex align-items-end">
			<div class="row flex-grow-1">
			<div class="col">
			<div class="fs-4 font-weight-normal text-sans-serif text-700 line-height-1 mb-1">$47K</div><span class="badge badge-pill fs--2 badge-soft-success">+3.5%</span>
			</div>
			<div class="col-auto pl-0">
			<div class="echart-bar-weekly-sales h-100"></div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>      
			<div class="row">
			<div class="col-sm">
			<div class="card h-300 mb-3">
			<div class="card-header pb-2" style="background-color: #009900;" >
			<div class="row flex-between-center">
			<div class="col-auto">
			<h6 class="mt-2" style="color:#FFFFFF;">Monthly Sales</h6>
			</div>
			<div class="col-auto d-flex">
			<select class="custom-select custom-select-sm select-month mr-2">
			<option value="0">January</option>
			<option value="1">February</option>
			<option value="2">March</option>
			<option value="3">April</option>
			<option value="4">May</option>
			<option value="5">Jun</option>
			<option value="6">July</option>
			<option value="7">August</option>
			<option value="8">September</option>
			<option value="9">October</option>
			<option value="10">November</option>
			<option value="11">December</option>
			</select>
			<div class="dropdown text-sans-serif btn-reveal-trigger">
			<button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-total-saldes" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"   style="color:#FFFFFF;"><span class="fas fa-ellipsis-h fs--2"></span></button>
			<div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-total-saldes">
			<div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
			<div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="card-body h-300 pr-0">
			<div class="echart-line-total-sales" style="min-height: 300px;" data-echart-responsive="true"></div>
			</div>
			</div>      
			</div>
			<div class="col-sm">

			<div class="card h-300">
			<div class="card-header py-2" style="background-color:#009900; color:#FFFFFF">
			<div class="row flex-between-center">
			<div class="col-auto pt-2">
			<h6 class="mb-0">Top Products</h6>
			</div>
			<div class="col-auto d-flex">
			<div class="dropdown text-sans-serif btn-reveal-trigger">
			<button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-running-projects" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF;"><span class="fas fa-ellipsis-h fs--2"></span></button>
			<div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown-running-projects">
			<div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
			<div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="card-body h-300 pr-0">
			<div class="echart-bar-top-products" style="min-height: 300px;" data-echart-responsive="true"></div>
			</div>
			</div>
			</div>
			</div>  
			</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('additional-js')
<script type="text/javascript" src="{{ asset('public/user-dash/js/k2uset_image.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/user-dash/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/user-dash/js/phone-number.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/user-dash/js/k2uset_port.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/user-dash/js/echarts.js') }}"></script>
<script>
	$(document).ready(function(){
		var dyna_educations = $("#dyna_educations");
		var dyna_certifications = $("#dyna_certifications");
		var dyna_workHistory = $("#dyna_workHistory");

		$('.addPortfolio').on('click', function(){   
			var url="{{ route('k2u.settings.addPortfolioHtml') }}";
			var type="img";
			var dataContainer=$("."+$(this).attr('data-container'));
			var type=$(this).attr('data-type');
			var data={"type":type};
			var is_validate=true;
			$(".portinput_"+type).each(function(){
				if($(this).val()==""){
					is_validate=false;
					$(this).focus();
					return false;
				}
			});
			if(is_validate){
				addField(url,dataContainer,data);
			}else{
				//alert();
			}
		});
		$('#addEducation').on('click', function(){   
			var url="{{ route('k2u.settings.educationHtml') }}";
			var is_validate=true;
			$(".eduinput").each(function(){
				if($(this).val()==""){
					is_validate=false;
					$(this).focus();
					return false;
				}
			});
			if(is_validate){
				addField(url,dyna_educations);
			}else{
				//alert();
			}
		});
		$('#addCertification').on('click', function(){   
			var url="{{ route('k2u.settings.addCertHtml') }}";
			var is_validate=true;
			$(".certinput").each(function(){
				if($(this).val()==""){
					is_validate=false;
					$(this).focus();
					return false;
				}
			});
			if(is_validate){
				addField(url,dyna_certifications);
			}
		});
		$('#addWork').on('click', function(){   
			var url="{{ route('k2u.settings.addWorkHtml') }}";
			var is_validate=true;
			$(".workinput").each(function(){
				if($(this).val()==""){
					is_validate=false;
					$(this).focus();
					return false;
				}
			});
			if(is_validate){
				addField(url,dyna_workHistory);
			}
		});
		$(document).on('click', '.deleteWork', function(event){
			event.preventDefault();
			var delObj=$(this);
			var id=$(this).attr('data-id');
			var url="{{route('k2u.settings.deleteWork')}}";
			if(confirm("Are u sure want to delete this?")){
				if(id){
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url : url,
						method: 'POST',
						data: {'id':id},
					}).done(function (res_data){
						delObj.parent().parent().remove();
					}).fail(function () {
						console.log("unable to delete!!!");
					});
				}else{
					$(this).parent().parent().remove();
				}

				
			}
		});
		$(document).on('click', '.deleteEdu', function(event){
			event.preventDefault();
			var delObj=$(this);
			var id=$(this).attr('data-id');
			var url="{{route('k2u.settings.deleteEducation')}}";
			if(confirm("Are u sure want to delete this?")){
				if(id){
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url : url,
						method: 'POST',
						data: {'id':id},
					}).done(function (res_data){
						delObj.parent().parent().remove();
					}).fail(function () {
						console.log("unable to delete!!!");
					});
				}else{
					$(this).parent().parent().remove();
				}

				
			}
		});
		$(document).on('click', '.deleteCert', function(event){
			event.preventDefault();
			var delObj=$(this);
			var id=$(this).attr('data-id');
			var url="{{route('k2u.settings.deleteCert')}}";
			if(confirm("Are u sure want to delete this?")){
				if(id){
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url : url,
						method: 'POST',
						data: {'id':id},
					}).done(function (res_data){
						delObj.parent().parent().remove();
					}).fail(function () {
						console.log("unable to delete!!!");
					});
				}else{
					$(this).parent().parent().remove();
				}
			}
		});
		$(document).on('click', '.deletePortfolio', function(event){
			event.preventDefault();
			var delObj=$(this);
			var id=$(this).attr('data-id');
			var url="{{route('k2u.settings.deletePortfolio')}}";
			if(confirm("Are u sure want to delete this?")){
				if(id){
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
					$.ajax({
						url : url,
						method: 'POST',
						data: {'id':id},
					}).done(function (res_data){
						delObj.parent().remove();
					}).fail(function () {
						console.log("unable to delete!!!");
					});
				}else{
					$(this).parent().parent().remove();
				}
			}
		});
	});

	function addField(url,out_put,data){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url : url,
			method: 'POST',
			data: data,
		}).done(function (res_data){
			out_put.append(res_data);
		}).fail(function () {
			console.log("unable to get data!");
		});    
	}
</script>
@endsection