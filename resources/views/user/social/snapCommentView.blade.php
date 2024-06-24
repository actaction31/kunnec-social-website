@if($comment)
    <li class="media">
        <a class="pull-left" href="#fakelink">
        <img class="media-object" src="{{$comment->user->image}}" alt="Avatar" style="width: 40px;">
        </a>
        <div class="media-body">
            <h6 class="media-heading">
                <a href="{{route('profile',['user_id'=>Crypt::encrypt($comment->user_id)])}}">{{$comment->user->first_name}} {{$comment->user->last_name}}
                </a> <small>{{$comment->created_at->diffForHumans()}}</small>
            </h6>
            {{$comment->comment}}
        </div>
    </li>
@endif