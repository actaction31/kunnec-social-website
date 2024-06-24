@extends('layouts.user')
@section('title', 'Screen Details')
@section('content')
<style>
    .rate {
        
    }
    .rate:not(:checked) > input {
        position:absolute;
        visibility: hidden;
    }
    .rate:not(:checked) > label {
        float: right;
        width: 25px;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 23px;
        color: #d5d5d5;
        margin: -4px 0px !important;
        line-height: 23px;
    }
    .rate:not(:checked) > label:before {
        content: '★ ';
    }
    .rate > input:checked ~ label {
        color: #ffee4b;    
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #ffee4b;  
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #ffee4b;
    }
    .fit-cover {
        width: 100%;
        object-fit: cover;
        height: 100%;
    }
</style>
@include('user.k_screen.recording.recordFilters')

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img class="img-fluid fit-cover w-sm-50 h-sm-50 rounded absolute-sm-centered"
                src="{{ $recorder->cover_image }}" alt="" />
                {{-- <div class="product-slider position-relative">
                    <div class="position-relative h-sm-50">
                       
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-6">
                @if($recorder->user_id == Auth::user()->id || $recorder->status == 2)
                <button class="btn btn-lg btn-success rounded-capsule mr-1 mb-1" type="button" href="#!"
                    data-toggle="modal" data-target="#recordModal" id="enter_session_btn" >
                    <span class="fas fa-handshake"></span> Enter Session
                </button>
                @endif
                @if($recorder->user_id != Auth::user()->id && $recorder->status == 1)
                <button class="btn btn-lg btn-danger rounded-capsule mr-1 mb-1" type="button" href="#!" id="in_session_btn" >
                    <span class="fas fa-ban"></span> In Session
                </button>
                @endif
                @if($recorder->user_id != Auth::user()->id && $recorder->status == 0)
                <button class="btn btn-lg btn-warning rounded-capsule mr-1 mb-1" type="button" href="#!" id="not_available_btn" >
                    <span class="fas fa-skull-crossbones ml-1"></span> Recorder Not Available
                </button>
                @endif
                <h5>{{ $recorder->title }}</h5>
                <div class="fs--1">{!!$recorder->short_descriptions!!}</div>
                <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">@if($recorder->type!=NULL) {{$tutor_types[$recorder->type]}}: @endif</small>
                    <img src="@if($recorder->user) {{$recorder->user->image}} @endif" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> @if($recorder->user) {{$recorder->user->first_name}} @endif</p>
                <h4 class="d-flex align-items-center">
                    <span class="text-warning mr-2">${{$recorder->fee}}</span>
                    <span class="mr-1 fs--1 text-500"> {{($recorder->fee_type=="1")? "Per Hour":"Flat Fee" }} </span>
                </h4>

                <a class="fs--2 mb-3 d-inline-block text-decoration-none" href="#review" data-tab-target="#review"
                    data-fancyscroll data-offset="80">
                    @if($recorder->rating)
                        @for($i=1;$i<=5;$i++)
                            @if($i<=$recorder->rating->avg_rating)
                                <span class="fa fa-star text-warning"></span>
                            @elseif(($i-0.5) <= $recorder->rating->avg_rating)
                                <span class="fa fa-star-half-alt text-warning star-icon"></span>
                            @else
                                <span class="far fa-star text-warning"></span>
                            @endif
                        @endfor
                    @else
                        @for($i=0;$i<5;$i++)
                            <span class="far fa-star text-warning"></span>
                        @endfor
                    @endif
                    <span class="ml-1 text-600">(@if($recorder->rating){{$recorder->rating->total_rating}}@else{{0}}@endif)</span>
                </a>
                <p class="fs--1 mb-1"> <span>Language: </span><strong>{{$recorder->language}}</strong></p>
                <p><span><b>Schedule:</b></span> 
                    <span> <font style="color: #3f3f3f;">
                        @if($recorder->schedules)
                            @foreach($recorder->schedules as $schedule)
                                {{$schedule->day}} ({{($schedule->start_time) ? $schedule->start_time->format('h:i A'): ""}} - {{($schedule->end_time) ? $schedule->end_time->format('h:i A'):""}}),
                            @endforeach
                        @endif
                    </font> </span>
                </p>
                <div class="row">
                    <div class="col-auto pr-0">
                    </div>
                    <div class="col-sm-auto pl-3 pl-sm-0">
                        <a class="btn btn-sm btn-outline-danger border-300 mr-2 mt-2 mt-sm-0" href="#!"
                            data-toggle="tooltip" data-placement="top" title="Add to Recorder List"><span
                                class="far fa-heart mr-1"></span>{{$recorder->likes_count}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="fancy-tab overflow-hidden mt-4">
                    <div class="nav-bar">
                        <div class="nav-bar-item active pl-0 pr-2 pr-sm-4">
                            <div class="mt-1 fs--1"><strong>Description</strong>
                            </div>
                        </div>
                    </div>
                    <div class="tab-contents">
                        <div class="tab-content active">
                            {!! $recorder->descriptions !!}
                        </div>
                        <div class="tab-content">
                            @if($recorder->k_to_you_show=='1')
                            <div class="nav-bar-item active pl-0 pr-2 pr-sm-4">
                                <div class="mt-1 fs--1"><strong>More Background</strong></div></br>
                                <a class="btn btn-lg btn-success rounded-capsule mr-1 mb-1"
                                    href="{{ route('k2u.profile', ['user_id'=>$recorder->user_id]) }}">See My Kunnec To You Page </a>
                            </div>
                            @endif
                            <div class="col-lg-12 pr-lg-2">
                                <p class=" text-center" style="color: #FF8C00">Return to this page to rate and review.
                                </p>
                            </div>
                            <div class="tab-content">
                                <div class="row">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <div class="nav-bar-item active pl-0 pr-2 pr-sm-4">
                                            <div class="mt-1 fs--1"><strong>Reviews</strong>
                                            </div>
                                        </div>
                                        @if($comments->total()>0)
                                            @foreach($comments as $comment)
                                            <div class="mb-1">
                                                @for($i=1;$i<=5;$i++)
                                                    <span class="@if($i<=$comment->star) fa @else far @endif fa-star text-warning fs--1"></span>
                                                @endfor
                                                <span class="ml-3 text-dark font-weight-semi-bold">{{$comment->title}}</span>
                                            </div>
                                            <p class="fs--1 mb-2 text-600">By @if($comment->user){{$comment->user->first_name}}@endif {{$comment->created_at->format('M d, Y')}}</p>
                                            <p class="mb-0">{{$comment->comment}}</p>
                                            <hr class="my-4">
                                            @endforeach

                                            <div>
                                                {{ $comments->links() }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 pl-lg-5">
                                        @if($recorder->user_id!=Auth::user()->id)
                                            @if(!$recorder->user_comment)
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
                                            @if($errors->any())
                                                <div class="alert alert-dismissible alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </div>
                                            @endif
                                            {!! Form::open(['route'=>['krecords.createComment',['recorder_id'=>$recorder->id]]]) !!}
                                                <h5 class="mb-3">Write your Review</h5>
                                                <div class="form-group">
                                                    <label>Rate:</label>
                                                    <div class="fs--2 d-inline-block text-decoration-none rate"
                                                        data-tab-target="#review" data-fancyscroll data-offset="80">
                                                        <input type="radio" id="star5" name="star" value="5" />
                                                        <label for="star5" title="5">5 stars </label>
                                                        <input type="radio" id="star4" name="star" value="4" />
                                                        <label for="star4" title="4">4 stars</label>
                                                        <input type="radio" id="star3" name="star" value="3" />
                                                        <label for="star3" title="3">3 stars</label>
                                                        <input type="radio" id="star2" name="star" value="2" />
                                                        <label for="star2" title="2">2 stars</label>
                                                        <input type="radio" id="star1" name="star" value="1" />
                                                        <label for="star1" title="1">1 star</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Title:</label>
                                                    {!! Form::text("title",'',['class'=>'form-control']) !!}
                                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('title')
                                                    }}</strong></span>
                                                </div>

                                                <div class="form-group">
                                                    <label>Review:</label>
                                                    {!! Form::textarea("comment",'',['class'=>'form-control','rows'=>4]) !!}
                                                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $errors->first('comment')
                                                    }}</strong></span>
                                                </div>
                                                <button class="btn btn-success" type="submit">Submit</button>
                                            {!! Form::close() !!}
                                            @else
                                                <div class="row justify-content-center">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="alert alert-success">
                                                            <strong>Thank you! You have submitted review on this.</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Record Modal -->
    <div class="modal fade" id="recordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000000">Are you sure you want to start session :</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h5>{{$recorder->title}}</h5>
                    <p class="fs--1">{!!$recorder->short_descriptions!!}</p>
				    <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Recorder: </small><img src="{{$recorder->user->image}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image">{{$recorder->user->username}}</p>
                    <h4 class="d-flex align-items-center"><span class="text-warning mr-2">The Price</span><span class="mr-1 fs--1 text-500">${{$recorder->fee}}  {{($recorder->fee_type=="1")? "Per Hour":"Flat Fee" }} </h4>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-sm" type="button" id="enter_room_btn">
                        <!--<a href="{{ url('k_screen/recording/record_room') }}">Yes</a>-->
                        <a href="#">Yes</a>
                    </button>
                    <button class="btn btn-danger btn-sm" type="button"  data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional-js')
<script type="text/javascript">
    $(document).ready(function(){
        var recorder = {!! json_encode($recorder) !!};
        var auth_id = {!! json_encode(Auth::user()->id) !!};
        var uniqueID = new Date().getFullYear();
        var room_id = `#record-${uniqueID}-${recorder.id}`;

        if(auth_id == recorder.user_id || recorder.status == 2 ){
            $("#enter_session_btn").show();
            $("#in_session_btn").hide();
            $("#not_available_btn").hide();
        }
        else if(recorder.status == 1){
            $("#enter_session_btn").hide();
            $("#in_session_btn").show();
            $("#not_available_btn").hide();
        }
        else if(recorder.status == 0){
            $("#enter_session_btn").hide();
            $("#in_session_btn").hide();
            $("#not_available_btn").show();
        }

        $('#enter_room_btn').click(function(){
            // window.location.href = `http://localhost/public/k_screen/${room_id}`;
            // window.location.href = `http://localhost:3000/${room_id}`;
            window.location.href = `https://kunnec.com/public/k_screen/${room_id}`;
        })
        
        $(document).on('click', '.tutorLike', function(e) {
            e.preventDefault();
            var currObj=$(this);
            currObj.prop('disabled', true);
            var recorder_id=$(this).attr('data-id');
            var url="{{ route('krecords.like') }}";
            if(url){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : url,
                    method: 'POST',
                    data: {'recorder_id':recorder_id},
                }).done(function (data){
                    if(currObj.children('svg').attr('data-prefix')=='fa'){
                        currObj.html('<i class="ace-icon far fa-heart"></i>');
                    }else{
                        currObj.html('<i class="ace-icon fa fa-heart"></i>');
                    }
                    currObj.prop('disabled', false);
                    console.log(data);
                }).fail(function () {
                    window.href="";
                }); 
            }
        });
    });
</script>
@endsection