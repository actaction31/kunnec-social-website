@extends('layouts.user')
@section('title', 'Post Details')
@section('css/profile')
<link href="{{ asset('public/user-dash/css/profile.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --> 
<div class="card">
    <div id="user-profile-2" class="user-profile">
        @if($postData)
            <div class="card">
                @include('user.social.postView',['post'=>$postData])
                <div class="card-footer bg-light pt-0">
                    <div class="border-bottom border-200 fs--1 py-3">
                    <a class="text-700">@if($postData->likes) {{count($postData->likes)}}@else 0 @endif Likes</a> &bull; <a class="text-700">{{$postData->comments_count}} Comments</a>
                    </div>
                    <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                        <div class="col-auto">
                            <a class="rounded d-flex align-items-center mr-3 postLike" href="#" data-id="{{$postData->id}}">
                                @if($postData->likes && in_array(Auth::user()->id, $postData->likes))
                                    <img src="{{ asset('public/user-dash/images/illustrations/like-active.png')}}" width="20" alt="" />
                                @else
                                    <img src="{{ asset('public/user-dash/images/illustrations/like-inactive.png')}}" width="20" alt=""/>
                                @endif
                                <span class="ml-1">Like</span>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a class="rounded d-flex align-items-center mr-3">
                                <img src="{{ asset('public/user-dash/images/illustrations/comment-active.png')}}" width="20" alt="" />
                                <span class="ml-1">Comment</span>
                            </a>
                        </div>
                        {{--
                        <div class="col-auto d-flex align-items-center">
                            <a class="rounded text-700 d-flex align-items-center" href="#">
                                <img src="{{ asset('public/user-dash/images/illustrations/share-inactive.png')}}" width="20" alt="" />
                                <span class="ml-1">Share</span>
                            </a>
                        </div>
                        --}}
                    </div>
                    <div class="d-flex align-items-center border-top border-200 pt-3">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="{{Auth::user()->image}}" alt="" />
                        </div>
                        <input class="form-control rounded-capsule ml-2 fs--1 postCommentInput cmtInput_{{$postData->id}}" data-id="{{$postData->id}}" type="text" placeholder="Write a comment..." />
                        <div class="postComment">
                           <button class="btn btn-success btn-sm postComtBtn" data-id="{{$postData->id}}">Post</button>
                        </div> 
                        
                    </div>
                    <div class="comments_block" id="cmtBlock_{{$postData->id}}">
                        @include('user.social.postCommentTable')
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
@section('additional-js')
<script type="text/javascript">
    
</script>
@endsection