@extends('layouts.user')
@section('title', 'Edit Profile')
@section('css/profile')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/profile.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/bootstrap2-toggle.min.css') }}" rel="stylesheet">
<link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@endsection
@section('content')
<div class="col-lg-12 rounded mb-2" style="background-color:#009900;">
    <div class="row">
        <div class="col-10 mt-2" style="padding: 0px;">
            <p>
                <a href="{{route('social.home')}}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/>Kunnec Social
                </a> |&nbsp;
                <a href="{{ route('edit_profile',['tab'=>'settings']) }}" style="font-size:20px; color: #ffffff;">
                    <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;">
                    </i> 
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
        @include('user.profileFilters')
    </div>	
</div>

<div class="card">
    <div id="user-profile-2" class="user-profile">
        <div class="tabbable hwstabs" tab-url="{{route('edit_profile')}}">
            <ul class="nav nav-tabs padding-18 ">
                <li class="@if(request()->url()==route('edit_profile',['tab'=>'settings'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#settings">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Profile Settings
                    </a>
                </li>
                <li class="@if(request()->url()==route('edit_profile',['tab'=>'posts'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#posts">
                    <i class="green ace-icon fas fa-camera bigger-120"></i>
                        Post List
                    </a>
                </li>
                <li class="@if(request()->url()==route('edit_profile',['tab'=>'addsanp'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#addsanp">
                        <i class="green ace-icon fa fa-users bigger-120"></i>
                        Snap Upload
                    </a>
                </li>
                <li class="@if(request()->url()==route('edit_profile',['tab'=>'snaps'])) {{ 'active' }} @endif">
                    <a data-toggle="tab" href="#snaps">
                        <i class="green ace-icon fas fa-camera bigger-120"></i>
                        Snap List
                    </a>
                </li>
            </ul>

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
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div id="settings" class="tab-pane @if(request()->url()==route('edit_profile',['tab'=>'settings'])) {{ 'in active' }} @endif">
                    <div class="row">
                        <div class="card-body">
                            <form action="{{route('update_profile')}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title mb-3">Profile Setup</h5>
                                        <div class="form-group">
                                            <label for="inputUsername">Profile Image</label>
                                            <div class="col-sm-12" style="padding: 0px">
                                                <input type="file" name="image" class="profile_image " id="profile_image" onchange="preview(this,'.profile_img');" style="width: 100%;">
                                                <img class="profile_img" src="{{$userData->image}}">
                                            </div>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" @if($userData->profile_status=="public") checked @endif data-toggle="toggle" data-on="<i class='fa fa-lock-open'></i> Public" data-off="<i class='fa fa-lock'></i> Private" data-onstyle="success" data-offstyle="danger" data-width="100" data-height="30" name="profile_status" value="public">
                                                Click public or private for your profile
                                                <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="right" title="Private profiles, members will only be able to see your profile when you accept their Kunnec request." style="color: #009900;"></i> 
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername">Headline</label>
                                            <div class="col-sm-12 well" style="padding: 0px;">
                                                <textarea class="form-control" id="text" name="headline" 
                                                maxlength="200" placeholder="Type your profile headline ..." rows="6">{{$userData->headline}}</textarea>
                                                <span class="pull-right label label-default" id="count_message"></span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title mb-3">Social Links</h5>
                                        <label for="formGroupExampleInput">Add social links below</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-globe"></i></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Your Website" name="website" value="{{$userData->website}}">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fab fa-facebook-square"></i></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Facebook" name="facebook" value="{{$userData->facebook}}">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Instagram" name="instagram" value="{{$userData->instagram}}">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Twitter" name="twitter" value="{{$userData->twitter}}">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fab fa-pinterest-square"></i></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Pinterest" name="pinterest" value="{{$userData->pinterest}}">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fab fa-youtube"></i></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Youtube" name="youtube" value="{{$userData->youtube}}">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fab fa-linkedin"></i></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Linkedin" name="linkedin" value="{{$userData->linkedin}}">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fab fa-patreon"></i></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Patreon" name="patreon" value="{{$userData->patreon}}">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend" >
                                                <div class="input-group-text" style="padding: 7px;"><img src="{{ asset('public/images/tiktok_icon.png') }}" style="width: 24px;height: 23px;object-fit: contain;"></div>
                                            </div>
                                            <input type="url" class="form-control" id="inlineFormInputGroup" placeholder="Tik Tok" name="patreon" value="{{$userData->patreon}}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success" style="background:#009900; border: #009900;">Save</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End of Profile Tab -->

                <div id="posts" class="tab-pane @if(request()->url()==route('edit_profile',['tab'=>'posts'])) {{ 'in active' }} @endif">
                    <div class="my-3 p-3 bg-white rounded shadow-sm" id="postData">
                        @include('user.social.postTable')
                    </div>    
                </div>
        
                <div id="addsanp" class="tab-pane @if(request()->url()==route('edit_profile',['tab'=>'addsanp'])) {{ 'in active' }} @endif">
                    
                    <div class="row">
                        <div class="col-md-6 ">
                            <form action="{{route('snap.create')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group p-3">
                                    <h5 class="card-title mb-3">Upload Snap Image</h5>
                                    <div class="row">
                                        
                                        <div class="col-sm-12 well">
                                            <label for="inputUsername">Caption</label>
                                            <textarea class="form-control" id="text" name="descriptions" 
                                            maxlength="200" placeholder="Type snap caption ..." rows="3">{{ old('descriptions') }}</textarea>
                                            <span class="hws_error text-right text-danger" >{{ $errors->first('descriptions') }}</span>
                                            <span class="pull-right label label-default" id="count_message"></span>
                                            <br>
                                        </div>
                                    </div>                            
                                    <div class="row">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-success btn-file" style="background:#009900; border: #009900;">
                                                    Select Image<input type="file" name="image" id="imgInp">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <img id='img-upload'/>
                                </div>
                                <button type="submit" class="btn btn-danger btn-sm" style="background:#009900; border: #009900;">
                                    <i class="fas fa-chevron-circle-up"></i> Upload &nbsp;&nbsp;&nbsp
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="{{route('snap.createAlbum')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group p-3">
                                    <h5 class="card-title mb-3">Upload Snap Images to Album</h5>
                                    <div class="row">
                                        
                                        <div class="col-sm-12 well">
                                            <label for="inputUsername">Caption</label>
                                            <textarea class="form-control" id="text" name="album_descriptions" 
                                            maxlength="200" placeholder="Type snap Album caption ..." rows="3" required>{{ old('album_descriptions') }}</textarea>
                                            <span class="hws_error text-right text-danger" >{{ $errors->first('album_descriptions') }}</span>
                                            <span class="pull-right label label-default" id="count_message"></span>
                                            <br>
                                        </div>
                                    </div>                            
                                    <div class="row">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-success btn-file" style="background:#009900; border: #009900;">
                                                    Select Images<input type="file" name="images[]" id="snapImgs" multiple required>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="snapSelFiles">
                                        <div class="row">
                                            
                                        </div>
                                    </div>
                                    <img id='img-upload'/>
                                </div>
                                <button type="submit" class="btn btn-danger btn-sm" style="background:#009900; border: #009900;">
                                    <i class="fas fa-chevron-circle-up"></i> Upload &nbsp;&nbsp;&nbsp
                                </button>
                            </form>
                            <!-- <div class="form-group p-3">
                                <h5 class="card-title mb-3">Upload Snap Images to Album</h5>
                                <label for="inputUsername">Caption</label>
                                    <div class="col-sm-12 well">
                                        <form accept-charset="UTF-8" action="" method="POST">
                                            <textarea class="form-control" id="albumDesc" name="albumDesc" 
                                            maxlength="200" placeholder="Type snap caption ..." rows="1"></textarea>
                                            <span class="pull-right label label-default" id="count_message"></span>
                                            <br>
                                        </form>
                                    </div>
                                <div id="drag-drop-area">
                                </div>
                                

                            </div> -->
                        </div>
                    </div>
                </div>
                <div id="snaps" class="tab-pane @if(request()->url()==route('edit_profile',['tab'=>'snaps'])) {{ 'in active' }} @endif">
                    <div class="my-3 p-3 bg-white rounded shadow-sm">
                        @include('user.social.snapsTable')
                        
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('additional-js')
<script type="text/javascript" src="{{ asset('public/user-dash/js/bootstrap2-toggle.min.js') }}"></script>
<script>
  var text_max = 150;
$('#count_message').html('0 / ' + text_max );

$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_length + ' / ' + text_max);
});
</script>
<script>
    $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
        
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
    
</script>
<script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
<script>
/*var uppy = Uppy.Core().use(Uppy.Dashboard, {
            inline: true,
            target: '#drag-drop-area',
            metaFields:[
                "albumDesc"
            ]
        }).use(Uppy.Tus, {
            endpoint: '',
            formData:true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }})
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      })*/
</script>
@endsection