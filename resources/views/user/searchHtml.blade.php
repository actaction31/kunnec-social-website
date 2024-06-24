@if($profiles)
    @if($profiles->total()>0)
        @foreach($profiles as $profile)
            <div class="media text-muted pt-3">
                <a class="media" href="{{route('profile',['user_id'=>Crypt::encrypt($profile->id)])}}" style="font-size: inherit;color: inherit;display: contents;">
                    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{$profile->image}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32" style="object-fit: cover;"><title>Placeholder</title>
                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-gray-dark">{{$profile->first_name}} {{$profile->last_name}}</strong>
                            @if(!in_array($profile->id, $followsIds))
                            <a  href="{{route('social.followRequest',['follow_user_id'=>$profile->id])}}" class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                                <i class="fas fa-user-plus"></i> Kunnec To &nbsp;&nbsp;&nbsp
                            </a>
                            @endif
                        </div>
                        <span class="d-block">@ {{$profile->username}}</span>
                    </div>
                </a>
            </div>
        @endforeach
        <div class="media text-muted pt-3">
            <a href="{{route('search')}}?q={{$search_key}}" style="margin: auto;color: #009900;font-size: 16px;font-weight: bold;">View All</a>       
        </div>
    @else
        <div class="media text-muted">
            No search result        
        </div>
    @endif 
@else
    <div class="media text-muted">
        No search result        
    </div>
@endif