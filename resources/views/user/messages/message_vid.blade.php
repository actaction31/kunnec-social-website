@extends('layouts.user')
 @section('title', 'Vid Messages')
@section('css/messages')
<link href="{{ asset('public/user-dash/css/messages.css') }}" rel="stylesheet"></link>
@endsection
@section('content')


    <!-- Page header start -->
<div class="card p-2" style=" background-color: #009900;">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <h5 class="title" style="color:#ffffff;"><i class="far fa-comments"></i> Kunnec Vid</h5>
        <div class="row">
            <div class="col">
                <div class="d-inline pb-4">
                    <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:16px;">
                    <i class="far fa-comments" style="color: #FA8D0A"></i>  My Kunnec Messages
                    &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 24</span1></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">
                            <a href="{{ url('messages/messages') }}" style="font-size:12px;">
                                <i class="fas fa-users"></i> Kunnec Social  &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('messages/message_me') }}" style="font-size:12px;">
                                <i class="fas fa-user"></i> Kunnec to Me &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('messages/message_you') }}" style="font-size:12px;">
                                <i class="fas fa-user-friends"></i> Kunnec to You &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('messages/message_shop') }}" style="font-size:12px;">
                            <i class="fas fa-shopping-basket"></i> Kunnec Shop &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button"> 
                            <a href="{{ url('messages/message_pod') }}" style="font-size:12px;">
                                <i class="fas fa-podcast"></i> Kunnec Pod &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button"> 
                            <a href="{{ url('messages/message_screen') }}" style="font-size:12px;">
                                <i class="fas fa-tv"></i> Kunnec Screen &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button"> 
                            <a href="{{ url('messages/message_show') }}" style="font-size:12px;">
                                <i class="fas fa-film"></i> Kunnec Show &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('messages/message_course') }}" style="font-size:12px;"> 
                                <i class="fas fa-graduation-cap "></i> Kunnec Course &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('messages/message_music') }}" style="font-size:12px;"> 
                                <i class="fas fa-music"></i> Kunnec Music &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button"> 
                            <a href="{{ url('messages/message_books') }}" style="font-size:12px;"> 
                                <i class="fas fa-book"></i> Kunnec Books &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Content wrapper start -->
<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card m-0">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                        <div class="users-container">
                            <div class="chat-search-box">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-info">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="users">
                                <li class="person" data-chat="person1">
                                    <div class="user">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                        <span class="status busy"></span>
                                    </div>
                                    <p class="name-time">
                                        <span class="name">Steve Bangalter</span>
                                        <span class="time">15/02/2019</span>
                                    </p>
                                </li>
                                <li class="person" data-chat="person1">
                                    <div class="user">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar1.png" alt="Retail Admin">
                                        <span class="status offline"></span>
                                    </div>
                                    <p class="name-time">
                                        <span class="name">Steve Bangalter</span>
                                        <span class="time">15/02/2019</span>
                                    </p>
                                </li>
                                <li class="person active-user" data-chat="person2">
                                    <div class="user">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar2.png" alt="Retail Admin">
                                        <span class="status away"></span>
                                    </div>
                                    <p class="name-time">
                                        <span class="name">Peter Gregor</span>
                                        <span class="time">12/02/2019</span>
                                    </p>
                                </li>
                                <li class="person" data-chat="person3">
                                    <div class="user">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                        <span class="status busy"></span>
                                    </div>
                                    <p class="name-time">
                                        <span class="name">Jessica Larson</span>
                                        <span class="time">11/02/2019</span>
                                    </p>
                                </li>
                                <li class="person" data-chat="person4">
                                    <div class="user">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
                                        <span class="status offline"></span>
                                    </div>
                                    <p class="name-time">
                                        <span class="name">Lisa Guerrero</span>
                                        <span class="time">08/02/2019</span>
                                    </p>
                                </li>
                                <li class="person" data-chat="person5">
                                    <div class="user">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                        <span class="status away"></span>
                                    </div>
                                    <p class="name-time">
                                        <span class="name">Michael Jordan</span>
                                        <span class="time">05/02/2019</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                        <div class="selected-user">
                            <span>To: <span class="name">Emily Russell</span></span>
                        </div>
                        <div class="chat-container">
                            <ul class="chat-box chatContainerScroll">
                                <li class="chat-left">
                                    <div class="chat-avatar">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                        <div class="chat-name">Russell</div>
                                    </div>
                                    <div class="chat-text">Hello, I'm Russell.
                                        <br>How can I help you today?</div>
                                    <div class="chat-hour">08:55 <span class="fa fa-check-circle"></span></div>
                                </li>
                                <li class="chat-right">
                                    <div class="chat-hour">08:56 <span class="fa fa-check-circle"></span></div>
                                    <div class="chat-text">Hi, Russell
                                        <br> I need more information about Developer Plan.</div>
                                    <div class="chat-avatar">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                        <div class="chat-name">Sam</div>
                                    </div>
                                </li>
                                <li class="chat-left">
                                    <div class="chat-avatar">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                        <div class="chat-name">Russell</div>
                                    </div>
                                    <div class="chat-text">Are we meeting today?
                                        <br>Project has been already finished and I have results to show you.</div>
                                    <div class="chat-hour">08:57 <span class="fa fa-check-circle"></span></div>
                                </li>
                                <li class="chat-right">
                                    <div class="chat-hour">08:59 <span class="fa fa-check-circle"></span></div>
                                    <div class="chat-text">Well I am not sure.
                                        <br>I have results to show you.</div>
                                    <div class="chat-avatar">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar5.png" alt="Retail Admin">
                                        <div class="chat-name">Joyse</div>
                                    </div>
                                </li>
                                <li class="chat-left">
                                    <div class="chat-avatar">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                        <div class="chat-name">Russell</div>
                                    </div>
                                    <div class="chat-text">The rest of the team is not here yet.
                                        <br>Maybe in an hour or so?</div>
                                    <div class="chat-hour">08:57 <span class="fa fa-check-circle"></span></div>
                                </li>
                                <li class="chat-right">
                                    <div class="chat-hour">08:59 <span class="fa fa-check-circle"></span></div>
                                    <div class="chat-text">Have you faced any problems at the last phase of the project?</div>
                                    <div class="chat-avatar">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar4.png" alt="Retail Admin">
                                        <div class="chat-name">Jin</div>
                                    </div>
                                </li>
                                <li class="chat-left">
                                    <div class="chat-avatar">
                                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                        <div class="chat-name">Russell</div>
                                    </div>
                                    <div class="chat-text">Actually everything was fine.
                                        <br>I'm very excited to show this to our team.</div>
                                    <div class="chat-hour">07:00 <span class="fa fa-check-circle"></span></div>
                                </li>
                            </ul>
                            <div class="form-group mt-3 mb-0">
                                <textarea id="mytextarea" class="form-control" rows="3" placeholder="Type your message here..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('additional-js')
@endsection