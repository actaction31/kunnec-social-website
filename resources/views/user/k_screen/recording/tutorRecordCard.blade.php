@if($recorders)
    @foreach ($recorders as $new_tutor)
    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-3 p-0" style="margin-bottom: 0.5rem;">
        <div class="card">
            <div class="card-img-top">
                <span class="badge badge-pill badge-warning position-absolute r-0 t-0 mt-2 mr-2 z-index-2">New
                    Rated</span>
            </div>
            <a href="{{ route('krecords.details', ['recorder_id'=>$new_tutor->id]) }}">
            <img class="img-fluid" src="{{ $new_tutor->cover_image }}" style="width:100%;" alt="Card image cap">
            </a>
            <div class="card-body">
                <h6 class="fs-9">
                    <strong>
                        <a href="{{ route('krecords.details', ['recorder_id'=>$new_tutor->id]) }}"
                            style="font-size: 1.0rem; color: #009900;">{{$new_tutor->title}}
                        </a>
                    </strong>
                </h6>
                <p class="fs--1 mb-3"><a class="text-500" href="#!">@if($new_tutor->cat) {{$new_tutor->cat->name}} @endif</a></p>
                <div class="media align-items-center">
                    <div class="avatar avatar-m">
                        <img class="rounded-circle" src="@if($new_tutor->user){{$new_tutor->user->image}} @endif">
                    </div>
                    <div class="media-body ml-2">
                        <h5 class="mb-0 fs-0">@if($new_tutor->user){{$new_tutor->user->first_name}} @endif</h5>
                    </div>
                </div>
                <p class="fs--1 mb-1">Price {{($new_tutor->fee_type=="1")? "Per Hour":"Flat Fee" }}: <strong class="text-danger">${{$new_tutor->fee}}</strong></p>
            </div>
            <div class="d-flex align-items-center justify-content-between px-3">
                <div>
                    @if($new_tutor->rating)
                        @for($i=1;$i<=5;$i++)
                            @if($i<=$new_tutor->rating->avg_rating)
                                <span class="fa fa-star text-warning"></span>
                            @elseif(($i-0.5) <= $new_tutor->rating->avg_rating)
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
                    <span class="ml-1">(@if($new_tutor->rating){{$new_tutor->rating->total_rating}} @else 0 @endif)</span>
                </div>
                <div>
                    <a class="btn btn-sm btn-falcon-default mr-2 tutorLike" href="#" data-id="{{$new_tutor->id}}" title="Save Recorder">
                        @if($new_tutor->fav_recorder)
                        <span class="fa fa-heart"></span>
                        @else
                        <i class="ace-icon far fa-heart"></i>
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endif