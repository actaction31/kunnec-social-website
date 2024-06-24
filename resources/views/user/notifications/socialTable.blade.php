@if($followRequests->total()>0)
    @foreach($followRequests as $followRequest)
        <div class="media text-muted pt-3">
            <a href="{{route('profile',['user_id'=>Crypt::encrypt($followRequest->id)])}}">
            <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{$followRequest->image}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32" style="object-fit: cover;"><title>Placeholder</title>
            </a>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">{{$followRequest->first_name}}</strong>
                    <div class="action_links">
                        <a href="{{route('social.followRequest',['follow_user_id'=>$followRequest->id,'action'=>'accept'])}}" class="btn btn-outline-success btn-sm" style="border-radius:16px;">
                            <i class="fas fa-user-plus"></i> Accept Request
                        </a>
                        <a href="{{route('social.followRequest',['follow_user_id'=>$followRequest->id,'action'=>'reject'])}}" class="btn btn-outline-danger btn-sm " style="border-radius:16px;">
                            <i class="fas fa-times-circle"></i> Delete Request
                        </a>
                    </div>
                </div>
                <span class="d-block">@ {{$followRequest->username}}</span>
            </div>
        </div>
    @endforeach
@else
    <div class="media text-muted">
        No request found!        
    </div>
@endif 
@if($followRequests->total()>0)
<div class="pagi_row">  
    <div class="page_counts"> 
        Results: {{ $followRequests->firstItem() }}
        - {{ $followRequests->lastItem() }}
        of 
        {{ $followRequests->total() }}
    </div>
    <div class="vehi_pagination"> 
        {{ $followRequests->appends($_GET)->links() }}
    </div>
</div>
@endif