@if($comment)
    <div class="media mt-3">
        <div class="avatar avatar-xl">
            <a href="{{route('profile',['user_id'=>Crypt::encrypt($comment->user_id)])}}">
            <img class="rounded-circle" src="{{$comment->user->image}}" alt="" /></a>
        </div>
        <div class="media-body ml-2 fs--1">
                <p class="mb-1 bg-200 rounded-soft p-2">
                    <a class="font-weight-semi-bold" href="{{route('profile',['user_id'=>Crypt::encrypt($comment->user_id)])}}">{{$comment->user->first_name}} {{$comment->user->last_name}}</a> 
                    {{$comment->comment}}
                </p>
                <div class="px-2">
                <a href="#">Like</a> &bull; <a href="#">Reply</a> &bull; {{$comment->created_at->diffForHumans()}} 
            </div>
        </div>
    </div>
@endif