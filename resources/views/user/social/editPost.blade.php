@extends('layouts.user')
@section('title', 'Post Update')
@section('css/profile')
<link href="{{ asset('public/user-dash/css/profile.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
    <div class="row no-gutters">
        <div class="col-lg-12 pr-lg-2">
            <!-- Create post -->
            <div class="card mb-3">
                @if(session()->has('success'))
                  <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="alert alert-success">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    </div>
                  </div>
                @endif
                @if(session()->has('error'))
                  <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="alert alert-danger">
                            <strong>{{ session('error') }}</strong>
                        </div>
                    </div>
                  </div>
                @endif
                <div class="card-header bg-light">
                    <div class="media align-items-center">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{Auth::user()->image}}" alt="" />
                        </div>
                        <div class="media-body ml-2">
                            <h5 class="mb-0 fs-0">
                               Update Post
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <form method="POST" action="{{route('post.create',['post_id'=>$post->id])}}" enctype="multipart/form-data">
                        @csrf
                        <textarea class="form-control border-0 rounded-0 resize-none" type="text" placeholder="Type your post here!" rows="4" name="post_content">{!!$post->post_content!!}</textarea>
                        <span class="hws_error text-right text-danger" style="padding-left: 20px;">{{ $errors->first('post_content') }}</span>
                        <div class="d-flex align-items-center border-y px-3 mt-1">
                            <label class="text-nowrap mb-0 mr-2" for="hash-tags"><span class="fas fa-plus mr-1 fs--2"></span><span class="font-weight-regular">Add hashtag</span>
                            </label>
                            <input class="form-control border-0 fs--1" id="hash-tags" type="text" placeholder="Help the right person to see" name="tag" value="{{$post->tag}}" />
                        </div>
                        <div class="row no-gutters justify-content-between mt-3 px-3 pb-3">
                            <div class="col-sm-12">
                              <label style="display: block;"><img class="cursor-pointer" src="{{ asset('public/user-dash/images/illustrations/image.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Snap / Video</span></label>
                              <input type="file" name="images[]" class="" id="images" multiple style="margin-bottom: 20px;">
                              <div class="post_files">
                                <div class="row">
                                  {{--<div class="col-lg-4 file_block">
                                     <img src="http://localhost/kunnec/user-dash/images/users/profiles/1636973613_image.jpg" class="selected_file">
                                  </div>--}}
                                    @if($post->postfiles)
                                        @foreach($post->postfiles as $postfile)
                                            <div class="col-lg-4 file_block delete_{{$postfile->id}}">
                                                @if($postfile->file_type=="video")
                                                    <video width="100%" controls="" class="selected_file"><source src="{{$postfile->file}}" type="video/mp4"> </video>
                                                @else
                                                    <img src="{{$postfile->file}}" class="selected_file">
                                                @endif
                                                <button type="button" class="btn btn-danger btn-sm deletePostFile" post-id="{{$postfile->post_id}}" file-id="{{$postfile->id}}">
                                                <i class="fas fa-times-circle"></i> Delete </button>
                                            </div> 
                                        @endforeach
                                    @endif
                                </div>
                              </div>
                            </div>
                            <!-- <div class="col">
                                <button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1 mb-0" type="button"><img class="cursor-pointer" src="{{ asset('public/user-dash/images/illustrations/image.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Snap</span></button>
                                <button class="btn btn-light btn-sm bg-light rounded-capsule shadow-none d-inline-flex align-items-center fs--1 ml-1" type="button"><img class="cursor-pointer" src="{{ asset('public/user-dash/images/illustrations/calendar.svg')}}" width="17" alt="" /><span class="ml-2 d-none d-md-inline-block">Video</span></button>
                            </div> -->
                            
                            <div class="col-sm-12 text-right">
                              <div class="dropdown d-inline-block mr-1">
                                  <input type="text" name="status" id="postStatus" value="{{$post->status}}" readonly>
                                  <button class="btn btn-sm dropdown-toggle px-1" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #009900" class="fas fa-globe-americas"></span>
                                  </button>
                                  
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item pstatus" href="#">Public</a>
                                    <a class="dropdown-item pstatus" href="#">Private</a>
                                    <a class="dropdown-item pstatus" href="#">Draft</a>
                                  </div>
                              </div>
                              <button class="btn btn-success btn-sm px-4 px-sm-5" type="submit">Post</button>
                            </div>
                        </div>
                    </form>
                  </div>
            </div>
            <!-- Create post End -->
        </div>
    </div>
@endsection
@section('additional-js')
<script type="text/javascript">
    
</script>
@endsection