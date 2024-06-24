@extends('layouts.user')
@section('title', 'Screen List')
@section('additional-css')
@endsection
@section('content')

@include('user.k_screen.recording.recordFilters')
@if($recorders->total()>0)
    <div class="card mb-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-auto mb-2 mb-sm-0"> 
                    <h6 class="mb-0">Showing {{ $recorders->firstItem() }}-{{ $recorders->lastItem() }} of {{ $recorders->total() }} Records</h6> 
                </div>
                {{-- <div class="col-sm-auto">
                    <form class="d-inline-block mr-3">
                        <div class="input-group input-group-sm d-flex align-items-center"><small class="mr-1">Sort by:
                            </small>
                            <select class="custom-select" aria-label="Bulk actions">
                                <option selected="">Newest</option>
                                <option value="Refund">Oldest</option>
                                <option value="Refund">Highest Credits</option>
                                <option value="Refund">Lowest Credits</option>
                            </select>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
@endif
<div class="card mb-3">
    <div class="card-body p-0 overflow-hidden">
        <div class="row no-gutters">
            @if($recorders->total()>0)
                @foreach($recorders as $recorder)
                    <div class="col-12 p-3">
                        <div class="p-1">
                            <div class="row">
                                <div class="col-sm-5 col-md-4">
                                    <div class="position-relative h-sm-50">
                                        <a class="d-block h-50" href="{{ route('krecords.details',['recorder_id'=>$recorder->id]) }}">
                                            <img class="img-fluid fit-cover w-sm-50 h-sm-50 rounded absolute-sm-centered"
                                                src="{{ $recorder->cover_image }}" alt="" style="width:100%;"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h5 class="mt-3 mt-sm-0">
                                                <a class="text-dark fs-0 fs-lg-1" href="{{ route('krecords.details',['recorder_id'=>$recorder->id]) }}">{{$recorder->title}}</a>
                                            </h5>
                                            <p class="fs--1 mb-2 mb-md-3">
                                                <small class="mr-1">{{$tutor_types[$recorder->type]}}: </small>
                                                <img src="@if($recorder->user){{$recorder->user->image}} @endif" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> @if($recorder->user){{$recorder->user->first_name}} @endif</p>
                                            <ul class="list-unstyled d-none d-lg-block">
                                                <li>@if($recorder->cat) {{$recorder->cat->name}} @endif</li>
                                                <li><span> <font style="color: #3f3f3f;">Schedule:</font> </span> 
                                                    <span> <font style="color: #3f3f3f;">
                                                        @if($recorder->schedules)
                                                            @foreach($recorder->schedules as $schedule)
                                                                {{$schedule->day}} ({{($schedule->start_time) ? $schedule->start_time->format('h:i A'): ""}} - {{($schedule->end_time) ? $schedule->end_time->format('h:i A'):""}}),
                                                            @endforeach
                                                        @endif
                                                    </font> </span>
                                                </li>
                                                <li class="text-success">{!!$recorder->short_descriptions!!}</li>
                                                <li>
                                                    <button class="btn btn-warning rounded-capsule mr-1 mb-1" type="button"
                                                        href="#!">
                                                        <span class="fas fa-skull-crossbones ml-1"></span> Recorder Not
                                                        Available
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-between flex-column">
                                            <div>
                                                <h4 class="fs-1 fs-md-2 text-warning mb-0">${{$recorder->fee}}</h4>
                                                <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">{{($recorder->fee_type=="1")? "Per Hour":"Flat Fee" }} </small></p>
                                                <div class="mb-2 mt-3">
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
                                                    <span class="ml-1">(@if($recorder->rating){{$recorder->rating->total_rating}}@else{{0}}@endif)</span>
                                                </div>
                                            </div>
                                            <div class="mt-md-2">
                                                @if($recorder->fav_recorder)
                                                <a class="btn btn-sm btn-outline-secondary border-300 d-lg-block mt-2 mr-2 mr-lg-0 tutorLike active" href="#" data-id="{{$recorder->id}}">
                                                    <span class="fa fa-heart"></span>
                                                    <span class="ml-2 d-none d-md-inline-block" style="color: #ffffff;">Remove Favorite</span>
                                                </a>
                                                @else
                                                <a class="btn btn-sm btn-outline-secondary border-300 d-lg-block mt-2 mr-2 mr-lg-0 tutorLike" href="#" data-id="{{$recorder->id}}">
                                                    <span class="ace-icon far fa-heart"></span>
                                                    <span class="ml-2 d-none d-md-inline-block">Save Favorite</span>
                                                </a>
                                                @endif
                                                <a class="btn btn-sm btn-success d-lg-block mt-2" href="{{ route('krecords.details',['recorder_id'=>$recorder->id]) }}">
                                                    <span class="fas fa-eye"> </span>
                                                    <span class="ml-2 d-none d-md-inline-block">
                                                        <font style="color: #ffffff;">Recorder Details</font>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-sm-12 text-center" style="padding-top: 10px;">No search result found !</div>
            @endif

            

            {{-- <div class="col-12 p-3 bg-100">
                <div class="p-1">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100">
                                <div class="item h-100">
                                    <a class="d-block h-sm-100"
                                        href="{{ url('k_screen/recording/record_details') }}"><img
                                            class="rounded h-100 w-100 fit-cover"
                                            src="{{ asset('public/user-dash/k_screen/recordings/3.jpg') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1"
                                            href="{{ url('k_screen/recording/record_details') }}">Oracle DBA 11g/12c -
                                            Database Administration for Junior DBA</a></h5>
                                    <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Tutor: </small><img
                                            src="{{ asset('public/user-dash/images/users/profiles/24.jpg')}}" width="25px"
                                            height="25px" class="rounded-circle img-border box-shadow-1"
                                            alt="Card image"> Tony</p>
                                    <ul class="list-unstyled d-none d-lg-block">
                                        <li>
                                            <span>
                                                <font style="color: #3f3f3f;">Schedule:</font>
                                            </span> <span>
                                                <font style="color: #3f3f3f;">M ( 7 - 9 am ), T ( 2 - 6 pm ), W ( 4 - 6
                                                    am ) </font>
                                            </span>
                                        </li>
                                        <li>
                                            <span>Learn to become an Oracle Database Administrator ( DBA ) in 6 weeks
                                                and get paid job as a junior DBA.</span>
                                        </li>
                                        <li>
                                            <button class="btn btn-success rounded-capsule mr-1 mb-1" type="button"
                                                href="#!" data-toggle="modal" data-target="#recordModal">
                                                <span class="fas fa-handshake"></span> Open Recording Session
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between flex-column">
                                    <div>
                                        <h4 class="fs-1 fs-md-2 text-warning mb-0">75 credits</h4>
                                        <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Per hour </small></p>
                                        <div class="mb-2 mt-3"><span class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span class="ml-1">(8)</span>
                                        </div>

                                    </div>
                                    <div class="mt-md-2"><a
                                            class="btn btn-sm btn-outline-secondary border-300 d-lg-block mt-2 mr-2 mr-lg-0"
                                            href="#!"><span class="far fa-heart"></span><span
                                                class="ml-2 d-none d-md-inline-block">Save Recorder</span></a><a
                                            class="btn btn-sm btn-success d-lg-block mt-2"
                                            href="{{ url('k_screen/recording/record_details') }}"><span
                                                class="fas fa-eye"> </span><span class="ml-2 d-none d-md-inline-block">
                                                <font style="color: #ffffff;">Record Details</font>
                                            </span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3">
                <div class="p-1">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100"><a class="d-block h-100"
                                    href="{{ url('k_screen/recording/record_details') }}"><img
                                        class="img-fluid fit-cover w-sm-100 h-sm-100 rounded absolute-sm-centered"
                                        src="{{ asset('public/user-dash/k_screen/recordings/5.jpg') }}" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1"
                                            href="{{ url('k_screen/recording/record_details') }}">Oracle DBA 11g/12c -
                                            Database Administration for Junior DBA</a></h5>
                                    <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Recorder: </small><img
                                            src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" width="25px"
                                            height="25px" class="rounded-circle img-border box-shadow-1"
                                            alt="Card image"> Shaheed</p>
                                    <ul class="list-unstyled d-none d-lg-block">
                                        <li><span>
                                                <font style="color: #3f3f3f;">Schedule:</font>
                                            </span> <span>
                                                <font style="color: #3f3f3f;">T ( 7 - 9 am ), Th ( 10 - 12 am ) </font>
                                            </span></li>

                                        <li><span>Learn to become an Oracle Database Administrator ( DBA ) in 6 weeks
                                                and get paid job as a junior DBA.</span></li>
                                        <li>
                                            <button class="btn btn-danger rounded-capsule mr-1 mb-1" type="button"
                                                href="#!"><span class="fas fa-ban"></span> Recording in Session
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between flex-column">
                                    <div>
                                        <h4 class="fs-1 fs-md-2 text-warning mb-0">75 credits</h4>
                                        <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Flat Fee </small></p>
                                        <div class="mb-2 mt-3"><span class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span class="ml-1">(8)</span>
                                        </div>

                                    </div>
                                    <div class="mt-md-2"><a
                                            class="btn btn-sm btn-outline-secondary border-300 d-lg-block mt-2 mr-2 mr-lg-0"
                                            href="#!"><span class="far fa-heart"></span><span
                                                class="ml-2 d-none d-md-inline-block">Save Recorder</span></a><a
                                            class="btn btn-sm btn-success d-lg-block mt-2"
                                            href="{{ url('k_screen/recording/record_details') }}"><span
                                                class="fas fa-eye"> </span><span class="ml-2 d-none d-md-inline-block">
                                                <font style="color: #ffffff;">Recorder Details</font>
                                            </span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3 bg-100">
                <div class="p-1">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100"><a class="d-block h-100"
                                    href="{{ url('k_screen/recording/record_details') }}"><img
                                        class="img-fluid fit-cover w-sm-100 h-sm-100 rounded absolute-sm-centered"
                                        src="{{ asset('public/user-dash/k_screen/recordings/4.jpg') }}" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1"
                                            href="{{ url('k_screen/recording/record_details') }}">Oracle DBA 11g/12c -
                                            Database Administration for Junior DBA</a></h5>
                                    <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Recorder: </small><img
                                            src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" width="25px"
                                            height="25px" class="rounded-circle img-border box-shadow-1"
                                            alt="Card image"> Michael</p>
                                    <ul class="list-unstyled d-none d-lg-block">
                                        <li><span>
                                                <font style="color: #3f3f3f;">Schedule:</font>
                                            </span> <span>
                                                <font style="color: #3f3f3f;">M ( 7 - 9 am ), T ( 4 - 9 am ), W ( 2 - 4
                                                    am ),Th ( 7 - 9 pm ),Fri ( 7 - 9 am ),Sat ( 2 - 9 am ), Sun ( 2 - 12
                                                    am )</font>
                                            </span></li>

                                        <li><span>Learn to become an Oracle Database Administrator ( DBA ) in 6 weeks
                                                and get paid job as a junior DBA.</span></li>
                                        <li>
                                            <button class="btn btn-warning rounded-capsule mr-1 mb-1" type="button"
                                                href="#!">
                                                <span class="fas fa-skull-crossbones ml-1"></span> Recorder Not
                                                Available
                                            </button>
                                    </ul>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between flex-column">
                                    <div>
                                        <h4 class="fs-1 fs-md-2 text-warning mb-0">75 credits</h4>
                                        <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Per 15 minutes </small></p>
                                        <div class="mb-2 mt-3"><span class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span class="ml-1">(8)</span>
                                        </div>

                                    </div>
                                    <div class="mt-md-2"><a
                                            class="btn btn-sm btn-outline-secondary border-300 d-lg-block mt-2 mr-2 mr-lg-0"
                                            href="#!"><span class="far fa-heart"></span><span
                                                class="ml-2 d-none d-md-inline-block">Save Recorder</span></a><a
                                            class="btn btn-sm btn-success d-lg-block mt-2"
                                            href="{{ url('k_screen/recording/record_details') }}"><span
                                                class="fas fa-eye"> </span><span class="ml-2 d-none d-md-inline-block">
                                                <font style="color: #ffffff;">Recorder Details</font>
                                            </span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="card-footer border-top d-flex justify-content-center">
        <div>
            {{ $recorders->links() }}
        </div>
    </div>
</div>
@endsection
@section('additional-js')
<script type="text/javascript">
    $(document).ready(function(){
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
                        currObj.removeClass('active');
                        currObj.html('<i class="ace-icon far fa-heart"></i><span class="ml-2 d-none d-md-inline-block">Save Favorite</span>');
                    }else{
                        currObj.addClass('active');
                        currObj.html('<i class="ace-icon fa fa-heart"></i><span class="ml-2 d-none d-md-inline-block" style="color: #ffffff;">Remove Favorite</span>');
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