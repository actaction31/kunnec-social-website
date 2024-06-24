@extends('layouts.user')
@section('title', 'Kunnec To You')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/masonry.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/K2u_list.css') }}" rel="stylesheet"></link>
<style type="text/css">
    .img-fluid {
        max-width: 100%;
        height: 180px;
        margin: auto;
        width: 100%;
        object-fit: cover;
    }
</style>
@endsection
@section('content')
@include('user.k_you.profileFilters')
<div class="card mb-3">
    <div class="card-body p-0 overflow-hidden">
        <div class="row mb-2">
            <div class="col">
        			<div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-sm-auto mb-2 mb-sm-0">
                                <h6 class="mb-0">Showing {{$profiles->total()}}</h6>
                            </div>
                            <div class="col-sm-auto">
                                <form class="d-inline-block mr-3">
                                    <div class="input-group input-group-sm d-flex align-items-center"><small class="mr-1">Sort by: </small>
                                        <select class="custom-select" aria-label="Bulk actions">
                                            <option selected="">Newest</option>
        						            <option value="Refund">Oldest</option>
        						            <option value="Refund">Highest Rated</option>
        						            <option value="Refund">Lowest Rated</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<hr class="style12">	
<div class="card mb-3">
    <div class="card-body p-0 overflow-hidden">
        <div class="row no-gutters">
            <hr class="style12">
            <div class="col-12 p-2">
                @if($profiles->total()>0)
                    @foreach($profiles as $profile)
                    <!-- Start of K2u Search -->
                    <div class="p-1">
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <div class="hovereffect">
                                    <img class="img-fluid" src="{{$profile->user->image}}" alt="Card image cap" >
                                    <div class="overlay">
                                        <h2>
                                            <p class="card-text d-inline" style="font-size:.9rem;">
                                            <small class="text-white">{{$profile->user->first_name}} </small>
                                            </p>
                                        </h2>
                                        <a class="info" href="{{ route('k2u.profile',['user_id'=>$profile->user_id]) }}">
                                            <button type="button" class="btn1 btn-kunnec">View</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="{{ route('k2u.profile',['user_id'=>$profile->user_id]) }}">
                                            <h5>{{$profile->user->first_name}}</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p  style="font-size: 14px;line-height: 14px;">{{$profile->job_category->name}}</p>
                                        <p style="font-size: 12px;line-height: 14px;">
                                            @if($profile->is_address){{$profile->address}},@endif
                                            @if($profile->user)
                                            @if($profile->user->loc_city){{$profile->user->loc_city->name}}@endif
                                            @if($profile->user->loc_state){{$profile->user->loc_state->name}}@endif 
                                            @if($profile->user->loc_country){{$profile->user->loc_country->name}}@endif
                                            @endif 
                                        </p>
                                        <p style="font-size: 12px;">@if($profile->is_phone){{$profile->phone}}@endif</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text-pre-line break">{!!$profile->short_aboutme!!}</div>
                                    </div>
                                </div>
                                <hr class="style12">
                                <div class="row">
                                    <ul class="nav justify-content-center">
                                        @if($profile->is_website)
                                        <li class="nav-item">
                                            <a class="nav-link active" href="@if($profile->user){{$profile->user->webiste}}@endif"><i class="fas fa-globe"></i><small> My Website</small></a>
                                        </li>
                                        @endif
                                        @if($profile->is_facebook)
                                        <li class="nav-item">
                                            <a class="nav-link" href="@if($profile->user){{$profile->user->facebook}}@endif"><i class="fab fa-facebook"></i><small> Facebook</small></a>
                                        </li>
                                        @endif
                                        @if($profile->is_linkedin)
                                        <li class="nav-item">
                                            <a class="nav-link" href="@if($profile->user){{$profile->user->linkedin}}@endif"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
                                        </li>
                                        @endif
                                        @if($profile->is_youtube)
                                        <li class="nav-item">
                                            <a class="nav-link" href="@if($profile->user){{$profile->user->youtube}}@endif"><i class="fab fa-youtube"></i><small> YouTube</small></a>
                                        </li>
                                        @endif
                                        @if($profile->is_patreon)
                                        <li class="nav-item">
                                            <a class="nav-link" href="@if($profile->user){{$profile->user->patreon}}@endif"><i class="fab fa-patreon"></i><small> Patreon</small></a>
                                        </li>
                                        @endif
                                        @if($profile->is_instagram)
                                        <li class="nav-item">
                                            <a class="nav-link" href="@if($profile->user){{$profile->user->instagram}}@endif"><i class="fab fa-instagram"></i><small> Instagram</small></a>
                                        </li>
                                        @endif
                                        @if($profile->is_twitter)
                                        <li class="nav-item">
                                            <a class="nav-link" href="@if($profile->user){{$profile->user->twitter}}@endif"><i class="fab fa-twitter"></i><small> Twitter</small></a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2 p-1">
                                <div class="row">
                                    <a href="{{ route('k2u.profile',['user_id'=>$profile->user_id]) }}">
                                        <button type="button" class="btn1 btn-outline-success">
                                            <i class="fas fa-eye fa-2x" data-toggle="tooltip" data-placement="top" title="View Me" ></i>
                                        </button>
                                    </a>
                                    <button type="button" class="btn1 btn-outline-danger saveFavorite @if($profile->user_fav) active @endif" profile-id="{{$profile->id}}" data-action="@if($profile->user_fav){{'unfavorite'}}@else{{'favorite'}}@endif">
                                        <i class="fas fa-heart fa-2x " data-toggle="tooltip" data-placement="top" title="Favorite" ></i>
                                    </button>
                                    <a href="{{ route('k2u.profile',['user_id'=>$profile->user_id,'redirect'=>'chat']) }}">
                                        <button type="button" class="btn1 btn-outline-success">
                                            <i class="fas fa-comments fa-2x" data-toggle="tooltip" data-placement="top" title="Message Me" ></i>
                                        </button>
                                    </a>
                                </div>
                                <hr class="style12">
                                <div class="row">
                                    <div class="rate">
                                        <!-- <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label> -->
                                        @if($profile->avg_rating)
                                            @for($i=1;$i<=5;$i++)
                                                <i class="list-inline-item fas fa-star fa-lg @if($i<=$profile->avg_rating->avg_rating) text-warning @endif"></i>
                                            @endfor
                                        @else
                                            <i class="list-inline-item fas fa-star fa-sm"></i>
                                            <i class="list-inline-item fas fa-star fa-sm"></i>
                                            <i class="list-inline-item fas fa-star fa-sm"></i>
                                            <i class="list-inline-item fas fa-star fa-sm"></i>
                                            <i class="list-inline-item fas fa-star fa-sm"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="style12">
                    </div>
                    <!-- End of K2u Search -->
                    @endforeach 
                @else
                    <div class="media text-muted pt-3 text-center">
                        No Record Found
                    </div>
                @endif
                <div class="pagi_row">  
                    <div class="page_counts"> 
                        Results: {{ $profiles->firstItem() }}
                        - {{ $profiles->lastItem() }}
                        of 
                        {{ $profiles->total() }}
                    </div>
                    <div class="vehi_pagination"> 
                        {{ $profiles->links() }}
                    </div>
                </div> 
			</div>

	    </div>
	</div>		 
	<!-- End of Page -->
</div>

@endsection
@section('additional-js')
<script type="text/javascript">
    $(document).ready(function(){
        $('.saveFavorite').on('click', function(){ 
            var btnObj=$(this);
            var data_action=btnObj.attr("data-action");
            $(".loader_html").show();  
            var profile_id=$(this).attr("profile-id");
            var url="{{ route('k2u.settings.addToFavourite') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : url,
                method: 'POST',
                data:{"profile_id":profile_id},
            }).done(function (res_data){
                $(".loader_html").hide();
                if(data_action=="favorite"){
                    btnObj.addClass("active");
                    btnObj.attr("data-action","unfavorite")
                }else{
                    btnObj.removeClass("active");
                    btnObj.attr("data-action","favorite")
                }
            }).fail(function () {
                $(".loader_html").hide();
                console.log("unable to get data!");
            });
        });
    });
</script>
@endsection