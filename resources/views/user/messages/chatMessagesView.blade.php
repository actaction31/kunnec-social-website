@if($chats)
@if($chats->total()>0)
@php $last_date=""; @endphp
@foreach ($chats->reverse() as $chat)
@if($last_date!=$chat->created_at->format('D, M d'))
<div class="story-day-header">
    <div class="separator"></div>
    <span class="separator_date">{{$chat->created_at->format('D, M d')}}</span>
</div>
@endif
<li class="chat-left chat_li chat_{{$chat->msg_id}}">
    <div class="chat-avatar">
        <img class="user_img"
            src="@if($chat->sender_id==Auth::user()->id) {{$chatRoom->sender_user->image}} @else {{$chatRoom->receiver_user->image}} @endif"
            alt="Retail Admin">
    </div>
    <div class="chat-text">
        <div class="chat-name">
            <div class="sender_name">@if($chat->sender_id==Auth::user()->id) {{$chatRoom->sender_user->first_name}} @else
            {{$chatRoom->receiver_user->first_name}} @endif</div>
            <div class="chat-hour">
                {{$chat->created_at->timezone(Auth::user()->timezone)->format('H:i A')}} &nbsp;<span
                    class="fa fa-check-circle"></span>
            </div>
            <div class="msg_menu">
                <div  id="dropdownMenu2" class="story-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="up-icon">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    @if($chat->sender_id==Auth::user()->id)
                        <button class="dropdown-item edit_msg" msg-id="{{$chat->msg_id}}" id="{{$chat->id}}" type="button"> <i class="fas fa-pencil-alt"></i>   Edit Message</button>
                    @endif
                    <button class="dropdown-item quote_msg" msg-id="{{$chat->msg_id}}" id="{{$chat->id}}" type="button" msg-type="{{$chat->msg_type}}"> <i class="fas fa-reply"></i>  Reply Message</button>
                </div>
            </div>
            
        </div>
        <div class="chat_content ">
            @if($chat->reply)
                <div class="reply_chat">
                    <div class="replychat_text">
                        @if($chat->reply->msg_type=='img')
                            <a href="{{$chat->reply->chat_content}}" target="_blank"><img class="chat_img" src="{{$chat->reply->chat_content}}"></a>
                        @elseif($chat->reply->msg_type=='text')
                            {!! utf8_decode($chat->reply->chat_content) !!}
                        @else
                            <a href="{{ $chat->reply->chat_content }}" download="" style="font-size: 14px;"><i class="fa fa-file"
                                aria-hidden="true" style="font-size: 50px;display: block;"></i>
                            {{ basename($chat->reply->chat_content) }}</a>
                        @endif
                    </div>
                    <div class="chat_user">@if($chat->reply->sender_id==Auth::user()->id) {{$chatRoom->sender_user->first_name}} @else
                        {{$chatRoom->receiver_user->first_name}} @endif, {{$chat->reply->created_at->timezone(Auth::user()->timezone)->format('d-m-Y')}}</div>
                </div>
            @endif
            <div class="msgtext_{{$chat->msg_id}}" style="float: left;">
            @if($chat->msg_type=='img')
                <a href="{{$chat->chat_content}}" target="_blank"><img class="chat_img" src="{{$chat->chat_content}}"></a>
            @elseif($chat->msg_type=='text')
                {!! utf8_decode($chat->chat_content) !!}
            @else
                <a href="{{ $chat->chat_content }}" download="" style="font-size: 14px;"><i class="fa fa-file"
                    aria-hidden="true" style="font-size: 50px;display: block;"></i>
                {{ basename($chat->chat_content) }}</a>
            @endif
            </div>
            @if($chat->is_edit)<span class="editLabel">(edited)</span>@endif
        </div>
    </div>
</li>
@php $last_date=$chat->created_at->format('D, M d'); @endphp
@endforeach
@endif
@endif