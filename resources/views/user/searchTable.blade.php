
@if($profiles->total()>0)
    @foreach($profiles as $profile)
        <div class="media text-muted pt-3">
            <a class="media" href="{{route('profile',['user_id'=>Crypt::encrypt($profile->id)])}}" style="font-size: inherit;color: inherit;">
                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{$profile->image}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32" style="object-fit: cover;"><title>Placeholder</title>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">{{$profile->first_name}} {{$profile->last_name}}</strong>
                        @if(!in_array($profile->id, $followsIds))
                        <a href="{{route('social.followRequest',['follow_user_id'=>$profile->id])}}"  class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                            <i class="fas fa-user-plus"></i> Kunnec To &nbsp;&nbsp;&nbsp
                        </a>
                        @else 
                        <a href="{{route('social.followRequest',['follow_user_id'=>$profile->id,'action'=>'reject'])}}" class="btn btn-outline-danger btn-sm " style="border-radius:16px;    display: block;">
                            <svg class="svg-inline--fa fa-times-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg> DisKunnec
                        </a>  
                        @endif
                    </div>
                    <span class="d-block">@ {{$profile->username}}</span>
                </div>
            </a>
        </div>
    @endforeach
@else
    <div class="media text-muted">
        No search result        
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
        {{ $profiles->appends($_GET)->links() }}
    </div>
</div>