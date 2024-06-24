@if($chats)
@if($chats->total()>0)
    @foreach ($chats->reverse() as $chat)
        @if($chat->sender_id==Auth::user()->id)
        <li class="chat-right">
            <div class="chat-text">
                @if($chat->msg_type=='img') 
                    <a href="{{$chat->chat_content}}" target="_blank"><img class="chat_img" src="{{$chat->chat_content}}"></a>
                @elseif($chat->msg_type=='text')
                    {!! utf8_decode($chat->chat_content) !!}
                @else
                    <a href="{{ $chat->chat_content }}" download="" style="color: #fff;font-size: 14px;"><i class="fa fa-file" aria-hidden="true" style="font-size: 50px;display: block;"></i>{{ basename($chat->chat_content) }}</a>
                @endif
                <div class="chat-hour">{{$chat->created_at->timezone(Auth::user()->timezone)->format('h:i A')}} &nbsp;<span class="fa fa-check-circle"></span></div>
            </div>
            <div class="chat-avatar">
                <img class="user_img" src="{{$chatRoom->sender_user->image}}" style="object-fit: cover;">
                <div class="chat-name">{{$chatRoom->sender_user->first_name}}</div>
            </div>
        </li>
        @else
        <li class="chat-left">
            <div class="chat-avatar">
                <img class="user_img" src="{{$chatRoom->receiver_user->image}}" alt="Retail Admin">
                <div class="chat-name">{{$chatRoom->receiver_user->first_name}}</div>
            </div>
            <div class="chat-text">
                @if($chat->msg_type=='img') 
                    <a href="{{$chat->chat_content}}" target="_blank"><img class="chat_img" src="{{$chat->chat_content}}"></a> 
                @elseif($chat->msg_type=='text') 
                    {!! utf8_decode($chat->chat_content) !!} 
                @else
                    <a href="{{ $chat->chat_content }}" download="" style="font-size: 14px;"><i class="fa fa-file" aria-hidden="true" style="font-size: 50px;display: block;"></i>
                        {{ basename($chat->chat_content) }}</a>
                @endif
            </div>
            <div class="chat-hour">{{$chat->created_at->timezone(Auth::user()->timezone)->format('H:i A')}} &nbsp;<span class="fa fa-check-circle"></span></div>
        </li>
        @endif
    @endforeach
@endif
@endif  
