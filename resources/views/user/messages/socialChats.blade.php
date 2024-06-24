@extends('layouts.user')
@section('title', 'Kunnec Messages')
@section('css/messages')
<link href="{{ asset('public/user-dash/css/messages.css') }}" rel="stylesheet"></link>
<link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/chatStyle.css')}}">
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    /*tinymce.init({
    selector: "#mytextarea",
    plugins: "emoticons",
    toolbar: "emoticons",
    toolbar_location: "bottom",
    menubar: false
  });*/
</script>
<style type="text/css">
    .story-day-header{
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        text-align: center;
        background-color: #f4f5fb;
    }
    .separator {
        width: 100%;
        position: absolute;
        border-bottom: 1px solid #ddd;
    }
    .separator_date{
        background: #f4f5fb;
        z-index: 1;
        padding: 5px 10px;
    }
    .chat_li:hover {
        background-color: white;
    }
    .story-menu {
        float: right;
        background-color: #fff;
        border-radius: 50%;
        width: 25px;
        text-align: center;
        box-shadow: 0 1px 5px rgb(0 0 0 / 20%);
        cursor: pointer;
    }
    .msg_menu{
        float: right;
    }
    span.editLabel {
        font-size: 10px;
    }
    .reply_box {
        position: absolute;
        bottom: 60px;
        background-color: #fff;
        padding: 10px 20px;
        margin-left: 30.5px;
        width: calc(100% - 115px);
        border: 1px solid #ddd;
        border-bottom:0px; 
        z-index: 1;
    }
    .msg_user {
        font-size: 11px;
        color: #b3adad;
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
    }
    .chat_user{
        font-size: 11px;
        color: #b3adad;
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
    }
    .close_box{
        position: absolute;
        right: 20px;
        font-size: 16px;
        cursor: pointer;
    }
</style>
@endsection
@section('content')
<!-- Page header start -->
<div class="card pb-2 page_header" style=" background-color: #009900;margin-bottom: 0px;">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <h5 class="title" style="color:#ffffff;margin-top: 18px;"><i class="far fa-comments"></i> Kunnec Messages</h5> 
        <button class="btn btn-lg btn-success rounded-capsule mr-1 mb-1" type="button" href="#!" data-toggle="modal" data-target="#messageModal">
            Kunnec Message Tutorial!
        </button>
        @include('user.messages.messagePageHead')
    </div>
    
</div>
<!-- <form method="post">
    <textarea id="mytextarea">ASCII art is great, but...</textarea>
</form> -->

    <!-- Content wrapper start -->
<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card m-0">
                @if(!$chatRooms->isEmpty())
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-12" id="chatRooms">
                        <div class="users-container" id="contactsBlock">
                            

                            <ul class="users contacts">
                                @foreach($chatRooms as $chat_room)
                                    @php
                                        if($chat_room->follow_userid==Auth::user()->id){
                                            $sender_user=$chat_room->sender_user;
                                            $receiver_user=$chat_room->receiver_user;
                                            $chat_room->setRelation('receiver_user',$sender_user);
                                            $chat_room->setRelation('sender_user',$receiver_user);
                                        }
                                    @endphp
                                <li class="person contact @if($chat_room->id==$chatRoom->id) active @endif" room-id="{{$chat_room->id}}" room-data="{{ json_encode($chat_room) }}" chat-url="{{route('messages',['room_id'=>$chat_room->id])}}">
                                    <div class="user">
                                        <img src="{{$chat_room->receiver_user->image}}" alt="Retail Admin">
                                        <span class="status offline status_{{$chat_room->receiver_user->id}}" id="status_{{$chat_room->receiver_user->id}}"></span>
                                    </div>
                                    <p class="name-time">
                                        <span class="name">{{$chat_room->receiver_user->first_name}}</span>
                                        <span class="time">@if($chat_room->last_msg){{$chat_room->last_msg->created_at->format('m/d/Y')}} @endif</span>
                                    </p>
                                    @if($chat_room->uread_chat_count>0)<span1 class="badge badge-danger">{{$chat_room->uread_chat_count}}</span1>@endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-12" id="messageBlock">
                        <div class="selected-user chat_header">
                            <span class="back_btn" id="back_btn"><i class="fas fa-arrow-left"></i></span>
                            <span>To: <span class="name" id="chat_title">{{$chatRoom->receiver_user->first_name}}</span></span>
                            <input type="hidden" id="room_data" value="{{ json_encode($chatRoom) }}" chat-url="{{route('messages',['room_id'=>$chatRoom->id])}}">
                        </div>
                        <div class="chat-container">
                            <div class="inner_loader">
                                <div class="ajax-loader">
                                    <div class="loading">Loading...</div>
                                </div>
                            </div>
                            <ul class="chat-box chatContainerScroll chat_messages" id="room_chats">
                                @include('user.messages.chatMessagesView')
                            </ul>
                            <div class="status_block">
                            <span class="typing_status typing_{{$chatRoom->receiver_user->id}}" style="display: none;">{{$chatRoom->receiver_user->first_name}} is typing.....</span>
                            </div>
                            <div class="form-group mt-3 messageInputBlock" style="position: relative;float: left;width: 100%;    margin-bottom: 7px;">
                                <div class="reply_box" style="display: none;">
                                    <i class="fa close_box" style="position: absolute;right: 20px;">&#xf00d;</i>
                                    <div class="reply_chat_text"></div>
                                    <div class="msg_user"></div>
                                </div>
                                <label for="attachFile" style="float: left;margin: 0px;">
                                    <i class="fa fa-paperclip" aria-hidden="true" id="paperclipIcon"></i>
                                    <input type="file" id="attachFile" style="display: none" name="attachFile">
                                </label>
                                <!-- <button class="emoji-picker-icon"></button> -->
                                <img class="emoji-picker-icon" width="32" src="{{ asset('public/user-dash/images/emoji_icon.png')}}">
                                <textarea class="form-control uk-textarea" rows="2" placeholder="Type your message here..." id="messageInput" data-emojiable="true"></textarea>
                                <button class="btn sendMsgBtn" type="button">Send</button>
                                <input type="hidden" id="edit_msg_id" value="">
                                <input type="hidden" id="reply_chat_id" value="">
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="row no-gutters  justify-content-center">
                    <div class="col-lg-6 text-center" style="margin: 20%;">
                        <h3>You Need to Have Kunnec's to send or receive messages.</h3>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
@section('additional-js')
<script>
    $(document).ready(function(){
        
    });
</script>
@endsection
 