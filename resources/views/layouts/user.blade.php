<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('profiletitle') @yield('title') </title>
    <link href="{{ asset('public/images/favicon.ico')}}" type="image/x-icon" rel="icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/datepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/home_navsb.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/shop_card.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/datepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/bootstrap-multiselect.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-dash/css/home.css')}}">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('public/emoji-picker-main/lib/css/emoji.css')}}" rel="stylesheet"> -->
    @yield('css/js_schedule')
    @yield('css/account')
    @yield('css/social')
    @yield('css/profile')
    @yield('css/messages')
    @yield('css/notification')
    @yield('css/store')
    @yield('css/tracking')
    @yield('css/course')
    @yield('css/vid')
    @yield('css/pod_card')
    @yield('css/task')
    @yield('css/post')
    <style type="text/css">
        .text-pre-line {
            white-space: pre-line!important;
        }
        .break {
            word-wrap: break-word;
            word-break: break-word;
        }
        
        .VIpgJd-ZVi9od-ORHb-OEVmcd{
            display: none;
        }
    </style>
	<!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit()  {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <!-- google translator -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <!-- GOOGLE Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107694954-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-107694954-1');
    </script>
</head>

<body>
    <div class="loader_html">
        <div class="ajax-loader">
            <div class="loading">Loading...</div>
        </div>
    </div>
    
    <!-- Course Modal-->
    <div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000000">Are you sure you want to purchase :</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h5>Oracle DBA 11g/12c - Database Administration for Junior DBA</h5>
                    <p class="fs--1">Learn to become an Oracle Database Administrator (DBA) in 6 weeks and get a well paid job as a Junior DBA.</p>
				    <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Created by: </small><img src="{{ asset('public/user-dash/images/users/profiles/5.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</p>
                    <h4 class="d-flex align-items-center"><span class="text-warning mr-2">400 Credits</span><span class="mr-1 fs--1 text-500"></h4>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-sm" type="button"><a href="{{ url('k_course/course_room') }}">Yes</a>
                    </button>
                    <button class="btn btn-danger btn-sm" type="button"  data-dismiss="modal">No
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview Course Modal -->        
    <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000000">Accomplish Communication Correcly :</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls>
                        <source src="{{ asset('public/user-dash/k_course/videos/mad.mp4')}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </source>
                    </video>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-sm" type="button"  data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Exit Course Modal -->
    <div class="modal fade" id="exit_courseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000000">Are you sure you want to exit?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Oracle DBA 11g/12c - Database Administration for Junior DBA</h5>
                    <p class="fs--1">Learn to become an Oracle Database Administrator (DBA) in 6 weeks and get a well paid job as a Junior DBA.</p>
                    <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Created by: </small><img src="{{ asset('public/user-dash/images/users/profiles/5.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</p>
                    <h4 class="d-flex align-items-center"><span class="text-warning mr-2">400 Credits</span><span class="mr-1 fs--1 text-500"></h4>
                    <h6 class="d-flex align-items-center"><span class="text-success mr-2">Please Comment and Rate on my details page.</span></h6>
                    <h6 class="d-flex align-items-center"><span class="text-dark mr-2">Thank You for your time.</span></h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-sm" type="button"><a href="{{ url('k_course/course_details') }}">Yes</a></button>
                    <button class="btn btn-danger btn-sm" type="button"  data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tutor Modal -->
    <div class="modal fade" id="tutorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000000">Are you sure you want to start session :</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span class="font-weight-light" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Oracle DBA 11g/12c - Database Administration for Junior DBA</h5>
                    <p class="fs--1">Learn to become an Oracle Database Administrator (DBA) in 6 weeks and get a well paid job as a Junior DBA.</p>
				    <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Tutor: </small><img src="{{ asset('public/user-dash/images/users/profiles/5.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</p>
                    <h4 class="d-flex align-items-center"><span class="text-warning mr-2">400 Credits</span><span class="mr-1 fs--1 text-500"> per 15 mins.</h4>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-sm" type="button">
                        <a href="{{ url('k_screen/tutors/tutors_room') }}">Yes</a>
                    </button>
                    <button class="btn btn-danger btn-sm" type="button"  data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Message Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle"> Kunnec Message</h2>
                    <span><img class="mx-auto d-block" src="{{ asset('public/user-dash/images/K_Logo6.png')}}" alt="" width="100" /></span>
                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title" id="exampleModalLongTitle"> Navigate to Kunnec Message</h5>
                    <video width="100%" controls><source src="{{ asset('public/promo_vids/Getting Messages.mp4')}}" type="video/mp4"></video>
                    <h5 class="modal-title" id="exampleModalLongTitle"> Kunnec Message Tutorial</h5>
                    <video width="100%" controls><source src="{{ asset('public/promo_vids/Kunnec Message.mp4')}}" type="video/mp4"></video>
                    <div class="modal-footer nav justify-content-center">
                        <button type="button" class="btn btn-success close-modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Show Modal Modal -->
    <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000000">Are you sure you want to enter the show :</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h5>Oracle DBA 11g/12c - Database Administration for Junior DBA</h5>
                    <p class="fs--1">Learn to become an Oracle Database Administrator (DBA) in 6 weeks and get a well paid job as a Junior DBA.</p>
		            <p class="fs--1 mb-2 mb-md-3"><small class="mr-1"></small>
                        <img src="{{ asset('public/user-dash/images/users/profiles/4.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina
                    </p>
                    <h4 class="d-flex align-items-center"><span class="text-warning mr-2">400 Credits</span><span class="mr-1 fs--1 text-500"> per 15 mins.</h4>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-sm" type="button"><a href="{{ url('k_live/live_show') }}">Yes</a></button>
                    <button class="btn btn-danger btn-sm" type="button"  data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
                </div>
                <div class="modal-body">
                    <div id="testmodal" style="padding: 5px 20px;">
                        <form id="antoform" class="form-horizontal calender" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary antosubmit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
                </div>
                <div class="modal-body">
                    <div id="testmodal2" style="padding: 5px 20px;">
                        <form id="antoform2" class="form-horizontal calender" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title2" name="title2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->

    <!-- Delete modal -->
    <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="delete_modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete_modalLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this ?
                </div>
                <input type="hidden" id="del_url" value="">
                <input type="hidden" id="del_id" value="">
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button> -->
                    <button class="btn btn-danger" url="" row-id="" id="deleteYes" data-dismiss="modal">Yes</a>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Delete Modal -->
    <!-- Delete Account Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/if_image.png') }}" alt="" width="100" /></span>
                    <h5 class="modal-title" id="deleteModalLabel">Delete My Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you for certain you want to delete your account. Please download all your data that you want to keep before proceeding. After downloading your data, come back to delete your account and click yes or if you don't want to delete your account, click no.
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button> -->
                    <a class="btn btn-danger" href="{{route('user.deleteAccount')}}">Yes</a>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Delete Modal -->

    <!-- Delete Course Modal -->
    <div class="modal fade" id="deleteCourseModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/if_image.png') }}" alt="" width="100" /></span>
                    <h5 class="modal-title" id="deleteModalLabel">Delete Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you for certain you want to delete your account. Please download all your data that you want to keep before proceeding. After downloading your data, come back to delete your account and click yes or if you don't want to delete your account, click no.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Delete Course Modal -->

    <!-- Delete Video Modal -->
    <div class="modal fade" id="deleteVideoModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/if_image.png') }}" alt="" width="100" /></span>
                    <h5 class="modal-title" id="deleteModalLabel">Delete Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you for certain you want to delete this video, click yes or if you don't want to delete your video, click no.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Delete Video Modal -->

    <!-- Delete Book Modal -->
    <div class="modal fade" id="deleteBookModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/if_image.png') }}" alt="" width="100" /></span>
                    <h5 class="modal-title" id="deleteModalLabel">Delete Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you for certain you want to delete this book, click yes or if you don't want to delete your book, click no.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Join Modal -->
    <div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="joinModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/if_image.png') }}" alt="" width="100" /></span>
                    <h5 class="modal-title" id="deleteModalLabel">Join for Monthly Fee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    The price is $5.99 a month for {{Auth::user()->username}} shows. Are you certain you would like to join?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Join Modal -->

     <!-- Start of Snap Modal1 -->
    <div class="modal fade" id="snapModal1" tabindex="-1" role="dialog" aria-labelledby="snapModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #009900; ">
                    <div class="row">
                        <div class="col">
                            <img  src="{{ asset('public/user-dash/p_img/pic5.png') }}" alt="..." class="rounded-circle" width="50px;" height="50px;"><span class="middle"  style="color: #ffffff;"> {{Auth::user()->username}}</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <!--
                    <span class="p-2">
                        <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:16px;">
                            <i class="fas fa-globe" style="color: #FA8D0A"></i>  My Kunnec
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Kunnec to You</button>
                            <button class="dropdown-item" type="button">Kunnec Shop</button>
                            <button class="dropdown-item" type="button">Kunnec Pod</button>
                            <button class="dropdown-item" type="button">Kunnec Screen</button>
                            <button class="dropdown-item" type="button">Kunnec Show</button>
                            <button class="dropdown-item" type="button">Kunnec Course</button>
                            <button class="dropdown-item" type="button">Kunnec Vid</button>
                            <button class="dropdown-item" type="button">Kunnec Music</button>
                            <button class="dropdown-item" type="button">Kunnec Books</button>
                         </div>
                    </span> -->
                    <span class="p-2">
                        <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> <i class="ace-icon fa fa-plus-circle bigger-120"></i> Kunnec To &nbsp;&nbsp;&nbsp<span1 class="badge badge-success"> 24</span1></button>
                    </span>
                    <span class="p-2">
                    <a href="{{ route('messages') }}"><button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> <i class="far fa-comments"></i> Message</button></a>
                    </span>
                    <div class="box-info full">
                        <!-- Tab comments and popular posts -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#snap" data-toggle="tab"><i class="fa fa-heart"></i> Likes  &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger">{{$common->chatCount}}</span1></a>
                            </li>
                            <li><a href="#comments" data-toggle="tab" ><i class="fa fa-comments"></i> Comments &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 12</span1></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="snap">
                                <div class="scroll-widget">
                                    <figure class="snip2139">
                                        <blockquote>Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.
                                            <div class="arrow"></div>
                                        </blockquote>
                                        <img src="{{ asset('public/user-dash/snaps/pic1.png')}}" alt="sample3" width="400px" height="375px"/>
                                    </figure>	
                                </div>
                            </div><!-- End div .tab-pane -->
    	  
                            <!-- Comment  Tab -->
                            <div class="tab-pane animated fadeInRight" id="comments">
                                <!-- Begin scroll wrappper -->
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 325px;">
                                    <div class="scroll-widget12" style="overflow: auto; width: auto; height: 325px;">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/User_for_snippets.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                    <h6 class="media-heading">
                                                        <a href="#fakelink">John Doe
                                                        </a> <small>Just now</small>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Agent 007</a> <small>Yesterday at 04:00 AM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/Twitter_bird_icon.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Twitter man</a> <small>January 17, 2014 05:35 PM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Agent 007</a> <small>Yesterday at 04:00 AM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/Twitter_bird_icon.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Twitter man</a> <small>January 17, 2014 05:35 PM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; background: rgb(134, 134, 134);">
                                    </div>
                                    <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);">
                                    </div>
                                </div><!-- End div .scroll-widget -->
                                <div class="box-footer">
                                    <form class="d-flex align-items-center border-top border-200 pt-3">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />
                                </div>
                                <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                            </form>
                                </div>
                            </div><!-- End div .tab-pane -->
                        </div><!-- End div .tab-content -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Close Snap
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start of Snap Album Modal -->
    <div class="modal fade" id="snapModal2" tabindex="-1" role="dialog" aria-labelledby="snapModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #009900; ">
                    <div class="row">
                        <div class="col">
                            <img  src="{{ asset('public/user-dash/p_img/pic5.png') }}" alt="..." class="rounded-circle" width="50px;" height="50px;"><span class="middle"  style="color: #ffffff;"> {{Auth::user()->username}}</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <!--
                    <span class="p-2">
                        <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:16px;">
                            <i class="fas fa-globe" style="color: #FA8D0A"></i>  My Kunnec
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Kunnec to You</button>
                            <button class="dropdown-item" type="button">Kunnec Shop</button>
                            <button class="dropdown-item" type="button">Kunnec Pod</button>
                            <button class="dropdown-item" type="button">Kunnec Screen</button>
                            <button class="dropdown-item" type="button">Kunnec Show</button>
                            <button class="dropdown-item" type="button">Kunnec Course</button>
                            <button class="dropdown-item" type="button">Kunnec Vid</button>
                            <button class="dropdown-item" type="button">Kunnec Music</button>
                            <button class="dropdown-item" type="button">Kunnec Books</button>
                         </div>
                    </span>
                    -->
                    <span class="p-2">
                        <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> 
                            <i class="ace-icon fa fa-plus-circle bigger-120"></i> Kunnec To &nbsp;&nbsp;&nbsp<span1 class="badge badge-success"> 24</span1></button>
                    </span>
                    <span class="p-2">
                        <a href="{{ route('messages') }}">
                            <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> <i class="far fa-comments"></i> Message</button>
                        </a>
                    </span>
                    <div class="box-info full">
                        <!-- Tab comments and popular posts -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#snap" data-toggle="tab">
                                    <i class="fa fa-heart"></i> Likes  &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 25</span1>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="snap">
                                <div class="scroll-widget">
                                    <figure class="snip2139">
                                        <blockquote>Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.
                                            <div class="arrow"></div>
                                        </blockquote>
                                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                                            <!--Slides-->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="view">
                                                        <img src="{{ asset('public/user-dash/snaps/pic10.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="First slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img  src="{{ asset('public/user-dash/snaps/pic2.png')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Second slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img  src="{{ asset('public/user-dash/snaps/pic11.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Third slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img src="{{ asset('public/user-dash/snaps/pic12.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Third slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img  src="{{ asset('public/user-dash/snaps/pic13.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Third slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img src="{{ asset('public/user-dash/snaps/pic14.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Third slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Controls-->
                                            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                            <!--/.Controls-->
                                        </div>
                                    </figure>	
                                </div>
                            </div><!-- End div .tab-pane -->
                            
                            </div>
                            <!-- Comment  Tab -->
                            <div class="tab-pane animated fadeInRight pt-3" id="comments">
                            <span><a href="#comments" data-toggle="tab" ><i class="fa fa-comments"></i> Comments &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 12</span1></a></span>
                            </li>
                                <!-- Begin scroll wrappper -->
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 325px;">
                                    <div class="scroll-widget12" style="overflow: auto; width: auto; height: 325px;">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/User_for_snippets.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                    <h6 class="media-heading">
                                                        <a href="#fakelink">John Doe
                                                        </a> <small>Just now</small>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Agent 007</a> <small>Yesterday at 04:00 AM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/Twitter_bird_icon.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Twitter man</a> <small>January 17, 2014 05:35 PM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Agent 007</a> <small>Yesterday at 04:00 AM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/Twitter_bird_icon.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Twitter man</a> <small>January 17, 2014 05:35 PM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; background: rgb(134, 134, 134);">
                                    </div>
                                    <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);">
                                    </div>
                                </div><!-- End div .scroll-widget -->
                                <div class="box-footer">
                                    <form class="d-flex align-items-center border-top border-200 pt-3">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />
                                </div>
                                <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                            </form>
                                </div>
                            </div><!-- End div .tab-pane -->
                        </div><!-- End div .tab-content -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Close Snap
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start of copied Snap Album Modal -->
    <div class="modal fade" id="snapModal3" tabindex="-1" role="dialog" aria-labelledby="snapModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #009900; ">
                    <div class="row">
                        <div class="col">
                            <img  src="{{ asset('public/user-dash/p_img/pic5.png') }}" alt="..." class="rounded-circle" width="50px;" height="50px;"><span class="middle"  style="color: #ffffff;"> {{Auth::user()->username}}</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <!--
                    <span class="p-2">
                        <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:16px;">
                            <i class="fas fa-globe" style="color: #FA8D0A"></i>  My Kunnec
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Kunnec to You</button>
                            <button class="dropdown-item" type="button">Kunnec Shop</button>
                            <button class="dropdown-item" type="button">Kunnec Pod</button>
                            <button class="dropdown-item" type="button">Kunnec Screen</button>
                            <button class="dropdown-item" type="button">Kunnec Show</button>
                            <button class="dropdown-item" type="button">Kunnec Course</button>
                            <button class="dropdown-item" type="button">Kunnec Vid</button>
                            <button class="dropdown-item" type="button">Kunnec Music</button>
                            <button class="dropdown-item" type="button">Kunnec Books</button>
                         </div>
                    </span>
                    -->
                    <span class="p-2">
                        <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> 
                            <i class="ace-icon fa fa-plus-circle bigger-120"></i> Kunnec To &nbsp;&nbsp;&nbsp<span1 class="badge badge-success"> 24</span1></button>
                    </span>
                    <span class="p-2">
                        <a href="{{ route('messages') }}">
                            <button type="button" class="btn btn-outline-success btn-sm" style="border-radius:16px;"> <i class="far fa-comments"></i> Message</button>
                        </a>
                    </span>
                    <div class="box-info full">
                        <!-- Tab comments and popular posts -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#snap" data-toggle="tab">
                                    <i class="fa fa-heart"></i> Likes  &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 25</span1>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="snap">
                                <div class="scroll-widget">
                                    <figure class="snip2139">
                                        <blockquote>Sometimes I think the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.
                                            <div class="arrow"></div>
                                        </blockquote>
                                        <div id="carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel">
                                            <!--Slides-->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="view">
                                                        <img src="{{ asset('public/user-dash/snaps/pic6.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="First slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img  src="{{ asset('public/user-dash/snaps/pic4.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Second slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img  src="{{ asset('public/user-dash/snaps/pic5.png')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Third slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img src="{{ asset('public/user-dash/snaps/pic7.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Third slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img  src="{{ asset('public/user-dash/snaps/pic8.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Third slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <!--Mask color-->
                                                    <div class="view">
                                                        <img src="{{ asset('public/user-dash/snaps/pic9.jpg')}}" alt="sample3" width="400px" height="375px"
                                                        alt="Third slide">
                                                        <div class="mask rgba-black-light">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Controls-->
                                            <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                            <!--/.Controls-->
                                        </div>
                                    </figure>	
                                </div>
                            </div><!-- End div .tab-pane -->
                            
                            </div>
                            <!-- Comment  Tab -->
                            <div class="tab-pane animated fadeInRight pt-3" id="comments">
                            <span><a href="#comments" data-toggle="tab" ><i class="fa fa-comments"></i> Comments &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 12</span1></a></span>
                            </li>
                                <!-- Begin scroll wrappper -->
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 325px;">
                                    <div class="scroll-widget12" style="overflow: auto; width: auto; height: 325px;">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/User_for_snippets.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                    <h6 class="media-heading">
                                                        <a href="#fakelink">John Doe
                                                        </a> <small>Just now</small>
                                                    </h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Agent 007</a> <small>Yesterday at 04:00 AM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/Twitter_bird_icon.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Twitter man</a> <small>January 17, 2014 05:35 PM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Agent 007</a> <small>Yesterday at 04:00 AM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                <img class="media-object" src="https://bootdey.com/img/Content/Twitter_bird_icon.png" alt="Avatar" style="width: 40px;">
                                                </a>
                                                <div class="media-body">
                                                <h6 class="media-heading"><a href="#fakelink">Twitter man</a> <small>January 17, 2014 05:35 PM</small></h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; background: rgb(134, 134, 134);">
                                    </div>
                                    <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);">
                                    </div>
                                </div><!-- End div .scroll-widget -->
                                <div class="box-footer">
                                    <form class="d-flex align-items-center border-top border-200 pt-3">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/sabrina.jpg')}}" alt="" />
                                </div>
                                <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                            </form>
                                </div>
                            </div><!-- End div .tab-pane -->
                        </div><!-- End div .tab-content -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Close Snap
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Modal -->
    <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
    	            <h5 class="modal-title" id="bookModalLabel">Are you sure you want to purchase this book?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
    			    <h5>The Worst President in History</h5>
    				<div class="row">
                        <div class="col-sm">
                            <img class="img-fluid fit-cover w-sm-50 h-sm-50 rounded absolute-sm-centered" src="{{ asset('public/user-dash/k_book/book_covers/barack.jpg')}}" width="150px" height="150px" alt="" />
    	                </div>
                        <div class="col-sm">
                            <h4 class="d-flex align-items-center"><span class="text-warning mr-2">75 Credits</span><span class="mr-1 fs--1 text-500"></h4>
                            <a class="fs--2 mb-3 d-inline-block text-decoration-none" href="#review" data-tab-target="#review" data-fancyscroll data-offset="80"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1 text-600">(8)</span></a><br>
                            <small class="text-muted"> Category:</small><small class="text-green d-inline" style="color:#009900;"> Fiction</small><br>
    						<small class="text-muted"> Pages:</small><small class="text-green d-inline" style="color:#009900;"> 274</small><br>
    	                    <p class="fs--1 mb-1"> <span>Language: </span><strong>English</strong></p>
                        </div>
                    </div>
    	            <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Created by: </small><img src="{{ asset('public/user-dash/images/users/profiles/15.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                    <button type="button" class="btn btn-success"><a href="{{ url('k_book/book_viewer') }}">YES</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <!-- Book Audio Modal -->
    <div class="modal fade" id="audioModal" tabindex="-1" role="dialog" aria-labelledby="audioModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="audioModalLabel">Are you sure you want to purchase this audio book?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
    			    <h5>The Worst President in History</h5>
    				<div class="row">
                        <div class="col-sm">
                            <img class="img-fluid fit-cover w-sm-50 h-sm-50 rounded absolute-sm-centered" src="{{ asset('public/user-dash/k_book/book_covers/barack.jpg')}}" width="150px" height="150px" alt="" />
    	                </div>
                        <div class="col-sm">
                            <h4 class="d-flex align-items-center"><span class="text-warning mr-2">120 Credits</span><span class="mr-1 fs--1 text-500"></h4>
                            <a class="fs--2 mb-3 d-inline-block text-decoration-none" href="#review" data-tab-target="#review" data-fancyscroll data-offset="80"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1 text-600">(8)</span></a><br>
                            <small class="text-muted"> Category:</small><small class="text-green d-inline" style="color:#009900;"> Fiction</small><br>
    						<small class="text-muted"> Length: </small><small class="text-green d-inline" style="color:#009900;"></i><small class="text-green"> 12 chapters </small> / <small class="text-green"> 11 hours</small></small>
    				        <p class="fs--1 mb-1"> <span>Language: </span><strong>English</strong></p>
                        </div>
                    </div>
    	            <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Created by: </small><img src="{{ asset('public/user-dash/images/users/profiles/15.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</p>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                <button type="button" class="btn btn-success"><a href="{{ url('k_book/book_audio') }}">YES</a></button>
            </div>
        </div>
      </div>
    </div>
    <!-- End of Modal -->

    <!-- Delete Account Modal -->
    <div class="modal fade" id="sgModal" tabindex="-1" role="dialog" aria-labelledby="sgModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/if_image.png') }}" alt="" width="100" /></span>
                    <h5 class="modal-title" id="sgModalLabel">Delete My Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you for certain you want to delete your account. Please download all your data that you want to keep before proceeding. After downloading your data, come back to delete your account and click yes or if you don't want to delete your account, click no.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Size Guide Modal -->

    <!-- Delete AccountSong Modal -->
    <div class="modal fade" id="deleteSongModal" tabindex="-1" role="dialog" aria-labelledby="deleteSongModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/if_image.png') }}" alt="" width="100" /></span>
                    <h5 class="modal-title" id="deleteSongModalLabel">Delete My Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you for certain you want to delete your song. To delete your song, click yes or if you don't want to delete your song, click no.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Account Song Modal -->

    <!-- Delete Kpod Modal -->
    <div class="modal fade" id="deleteKpodModal" tabindex="-1" role="dialog" aria-labelledby="deleteKpodModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><img class="mx-auto d-block" src="{{ asset('public/images/if_image.png') }}" alt="" width="100" /></span>
                    <h5 class="modal-title" id="deleteKpodModalLabel">Delete Kpod Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you for certain you want to delete your Kpod. To delete your Kpod, click yes or if you don't want to delete your Kpod, click no.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <!-- Add Note Modal -->
    <div class="modal fade" id="NoteModal" tabindex="-1" role="dialog" aria-labelledby="NoteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <h5 class="modal-title1" id="NoteModalLabel">New Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputTitle1" aria-describedby="titleHelp" placeholder="Title of Note">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Text Area for Note"></textarea>
                        </div>
                    </div>
                <div class="modal-footer1">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Create Note</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <!-- Add Project Modal 
    <div class="modal fade" id="ProjectModal" tabindex="-1" role="dialog" aria-labelledby="ProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog"  style="max-width: 80%;" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <h5 class="modal-title1" id="ProjectModalLabel">New Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <h5 class="modal-title" id="ProjectModalLabel">Setup</h5>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputProject1" aria-describedby="titleHelp" placeholder="Name of Project">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="Project_description" rows="3" placeholder="Project Description"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <h5 class="modal-title" id="ProjectModalLabel">Add Team Members</h5>
                                <div class="alert alert-danger" role="alert">
                                    Only your Kunnec's can be added!!
                                </div> 
                                <div class="form-group">
                                    <select class="form-control" multiple="multiple" name="team" id="team">
                                        <option value="1">Mansa</option>
                                        <option value="2">Adease</option>
                                        <option value="3">Admine</option>
                                        <option value="4">Dennis</option>
                                        <option value="5">Kevin</option>
                                        <option value="6">Smith</option>
                                        <option value="7">DKSmith</option>
                                        <option value="8">DK</option>
                                    </select>
                                </div>                   
                            </div>
                        </div>
                        
                        <hr style="12">
                        <h5 class="modal-title" id="ProjectModalLabel">Project Timeline</h5>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" data-toggle="datepicker" placeholder="Start Date">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" data-toggle="datepicker1" placeholder="Due Date">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer1">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Create Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <!-- Add List Modal -->
    <div class="modal fade" id="ListModal" tabindex="-1" role="dialog" aria-labelledby="ListModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <h5 class="modal-title1" id="ListModalLabel">New Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="ListCheck" aria-describedby="ListHelp" placeholder="What do you have to do?">
                        </div>
                        <hr style="12">
                        <small id="emailHelp" class="form-text text-muted pb-2">Date and time to be notified if item is not completed.</small>
                        <div class="col-md-12 mb-2">
                            <div class="row">
                                <div class="col-1 mt-1">
                                    <span><i class="fas fa-calendar fa-2x"></i></span>
                                </div>
                                <div class="col-5">
                                    <input type="text" class="form-control" data-toggle="datepicker"  placeholder="Set the Date"/>
                                </div>
                                <div class="col-1 mt-1">
                                    <span><i class="fas fa-clock fa-2x"></i></span>
                                </div>
                                <div class="col-5">
                                    <input type="text" class="form-control" data-toggle="datepicker"  placeholder="Set the time"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer1">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Add Item</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <!-- Add Post Modal -->
    <div class="modal fade" id="PostModal" tabindex="-1" role="dialog" aria-labelledby="PostModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 80%;" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <h5 class="modal-title1" id="PostModalLabel">New Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <h5 class="modal-title" id="ProjectModalLabel">Post</h5>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputProject1" aria-describedby="titleHelp" placeholder="Title of Post">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="FormControlSelectPost">
                                        <option value="" disabled selected>Type of Post</option>
                                        <option value="1">Personal</option>
                                        <option value="2">Company</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="FormControlSelectPost">
                                        <option value="" disabled selected> Post time ...</option>
                                        <option value="1">This Post</option>
                                        <option value="2">Full-time</option>
                                        <option value="3">Part-time</option>
                                        <option value="4">Remote</option>
                                        <option value="5">Internship</option>
                                        <option value="6">Freelance</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="FormControlSelectPost">
                                        <option value="" disabled selected> Payment ...</option>
                                        <option value="1">Flat Fee</option>
                                        <option value="2">Hourly</option>
                                        <option value="3">Job completion</option>
                                        <option value="4">No Payment</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="Project_description" rows="3" placeholder="Post Description"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <h5 class="modal-title" id="ProjectModalLabel">Location</h5>
                                <div class="form-group">
                                    <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                        <option value="" disabled selected >Select Language ...</option>
                                        <option value="Afrikanns">Afrikanns</option>
                                        <option value="Albanian">Albanian</option>
                                        <option value="Albanian">Amharic</option>
                                        <option value="Arabic">Arabic</option>
                                        <option value="Armenian">Armenian</option>
                                        <option value="Basque">Basque</option>
                                        <option value="Albanian">Belarusian</option>
                                        <option value="Bengali">Bengali</option>
                                        <option value="Albanian">Bosnian</option>
                                        <option value="Bulgarian">Bulgarian</option>
                                        <option value="Catalan">Catalan</option>
                                        <option value="Cambodian">Cambodian</option>
                                        <option value="Albanian">Cebuano</option>
                                        <option value="Albanian">Chichwea</option>
                                        <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                        <option value="Albanian">Corsican</option>
                                        <option value="Croation">Croation</option>
                                        <option value="Czech">Czech</option>
                                        <option value="Danish">Danish</option>
                                        <option value="Dutch">Dutch</option>
                                        <option value="English">English</option>
                                        <option value="Estonian">Estonian</option>
                                        <option value="Albanian">Filipino</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finnish">Finnish</option>
                                        <option value="French">French</option>
                                        <option value="Albanian">Gallician</option>
                                        <option value="Georgian">Georgian</option>
                                        <option value="German">German</option>
                                        <option value="Greek">Greek</option>
                                        <option value="Gujarati">Gujarati</option>
                                        <option value="Albanian">Hausa</option>
                                        <option value="Albanian">Cebuano</option>
                                        <option value="Hebrew">Hawaiian</option>
                                        <option value="Albanian">Hebrew</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Albanian">Hmong</option>
                                        <option value="Hungarian">Hungarian</option>
                                        <option value="Icelandic">Icelandic</option>
                                        <option value="Albanian">Igbo</option>
                                        <option value="Indonesian">Indonesian</option>
                                        <option value="Irish">Irish</option>
                                        <option value="Italian">Italian</option>
                                        <option value="Japanese">Japanese</option>
                                        <option value="Javanese">Javanese</option>
                                        <option value="Albanian">Kannada</option>
                                        <option value="Albanian">Kazakh</option>
                                        <option value="Albanian">Khmer</option>
                                        <option value="Korean">Korean</option>
                                        <option value="Albanian">Kurdish</option>
                                        <option value="Albanian">Kyrgyz</option>
                                        <option value="Albanian">Lao</option>
                                        <option value="Latin">Latin</option>
                                        <option value="Latvian">Latvian</option>
                                        <option value="Lithuanian">Lithuanian</option>
                                        <option value="Albanian">Luxembourgish</option>
                                        <option value="Macedonian">Macedonian</option>
                                        <option value="Albanian">Malagasy</option>
                                        <option value="Malay">Malay</option>
                                        <option value="Malayalam">Malayalam</option>
                                        <option value="Maltese">Maltese</option>
                                        <option value="Maori">Maori</option>
                                        <option value="Marathi">Marathi</option>
                                        <option value="Mongolian">Mongolian</option>
                                        <option value="Albanian">Myammar</option>
                                        <option value="Nepali">Nepali</option>
                                        <option value="Norwegian">Norwegian</option>
                                        <option value="Albanian">Pashto</option>
                                        <option value="Persian">Persian</option>
                                        <option value="Polish">Polish</option>
                                        <option value="Portuguese">Portuguese</option>
                                        <option value="Punjabi">Punjabi</option>
                                        <option value="Quechua">Quechua</option>
                                        <option value="Romanian">Romanian</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Samoan">Samoan</option>
                                        <option value="Albanian">Scots Gaelic</option>
                                        <option value="Serbian">Serbian</option>
                                        <option value="Albanian">Sesotho</option>
                                        <option value="Albanian">Shona</option>
                                        <option value="Albanian">Sinhala</option>
                                        <option value="Slovak">Slovak</option>
                                        <option value="Slovenian">Slovenian</option>
                                        <option value="Albanian">Somali</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Albanian">Sundanese</option>
                                        <option value="Swahili">Swahili</option>
                                        <option value="Swedish ">Swedish </option>
                                        <option value="Albanian">Tajik</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="Tatar">Tatar</option>
                                        <option value="Telugu">Telugu</option>
                                        <option value="Thai">Thai</option>
                                        <option value="Tibetan">Tibetan</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Turkish">Turkish</option>
                                        <option value="Ukranian">Ukranian</option>
                                        <option value="Urdu">Urdu</option>
                                        <option value="Uzbek">Uzbek</option>
                                        <option value="Vietnamese">Vietnamese</option>
                                        <option value="Welsh">Welsh</option>
                                        <option value="Xhosa">Xhosa</option>
                                        <option value="Albanian">Yiddish</option>
                                        <option value="Albanian">Yoruba</option>
                                        <option value="Albanian">Zulu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" id="card-holder-category" name="customSelectCategory" required="required">
                                        <option value="" disabled selected >Post Category ...</option>
                                        <optgroup label="Accounting" >
                                            <option>Finance Basics</option>
                                            <option>Financial Accounting</option>
                                            <option>Bookkeeping</option>
                                            <option>Risk Assessment</option>
                                            <option>Auditing</option>
                                            <option>Taxes</option>
                                        </optgroup>
                                        <optgroup label="Apple" >
                                            <option>Mac OS</option>
                                            <option>Mac Basics</option>
                                        </optgroup>
                                        <optgroup label="Business" >
                                            <option>Advertising</option>
                                            <option>Business Plan</option>
                                            <option>Business Management</option>
                                            <option>Branding</option>
                                            <option>Contracts</option>
                                            <option>Customer Service</option>
                                            <option>Investing</option>
                                            <option>Intellectual Property</option>
                                            <option>Negotiations</option>
                                            <option>Marketing</option>
                                            <option>Patents</option>
                                            <option>Product Management</option>
                                            <option>Risk Management</option>
                                            <option>Sales</option>
                                            <option>Six Sigma</option>
                                            <option>Six Sigma Black Belt</option>
                                            <option>Six Sigma Green Belt</option>
                                            <option>Six Sigma Yellow Belt</option>
                                            <option>Start-Ups</option>
                                            <option>Trademarks</option>
                                            <option>Quality Management</option>
                                        </optgroup>
                                        <optgroup label="Crypto">
                                            <option>Bitcoin</option>
                                            <option>Blockchain</option>
                                            <option>Crytocurrency</option>
                                        </optgroup>
                                        <optgroup label="Developer">
                                            <option>Access</option>
                                            <option>Data Analysis</option>
                                            <option>SQL</option>
                                            <option>MySQL</option>
                                            <option>Excel</option>
                                            <option>Word</option>
                                            <option>Python</option>
                                            <option>Css</option>
                                            <option>Bootstrap</option>
                                            <option>PHP</option>
                                            <option>Java</option>
                                            <option>JQuery</option>
                                            <option>Javascript</option>
                                            <option>Power Point</option>
                                            <option>Programming</option>
                                            <option>Cyber Security</option>
                                            <option>Network Sercurity</option>
                                            <option>Linux</option>
                                            <option>SQL</option>
                                            <option>Windows</option>
                                            <option>Shell</option>
                                            <option>Javascript</option>
                                            <option>Power Point</option>
                                        </optgroup>
                                        <optgroup label="Design">
                                            <option>Photoshop</option>
                                            <option>Drawing</option>
                                            <option>Illustrator</option>
                                            <option>InDesign</option>
                                            <option>Dreamweaver</option>
                                            <option>Logo Design</option>
                                            <option>Graphic Design</option>
                                            <option>Autocad</option>
                                            <option>PHP</option>
                                            <option>JQuery</option>
                                            <option>Javascript</option>
                                            <option>Power Point</option>
                                        </optgroup>
                                        <optgroup label="Games">
                                            <option>Poker</option>
                                            <option>Chess</option>
                                            <option>Card Games</option>
                                            <option>On-Line Gaming</option>
                                            <option>Designing online Games</option>
                                        </optgroup>
                                        <optgroup label="Home Improvement">
                                            <option>Decorating</option>
                                            <option>Wiring</option>
                                            <option>Drywall</option>
                                            <option>Piping</option>
                                            <option>Gardening</option>
                                        </optgroup>
                                        <optgroup label="Lifestyle" >
                                            <option>Skin Care</option>
                                            <option>Cosmetics</option>
                                            <option>Nail Design</option>
                                            <option>Hairstyle</option>
                                            <option>Weight Lifting</option>
                                            <option>Nutrition</option>
                                            <option>Yoga</option>
                                            <option>Mental Health</option>
                                            <option>Self Defense</option>
                                            <option>Meditation</option>
                                            <option>Weight Loss</option>
                                            <option>Fasting</option>
                                            <option>Vegan Diet</option>
                                            <option>Psychics</option>
                                            <option>Tarot</option>
                                        </optgroup>
                                        <optgroup label="Language">
                                            <option>English</option>
                                            <option>Spanish</option>
                                            <option>French</option>
                                            <option>Italian</option>
                                            <option>Russian</option>
                                            <option>Hebrew</option>
                                        </optgroup>
                                        <optgroup label="Media" >
                                            <option>Journalism</option>
                                            <option>Podcast</option>
                                            <option>Screenwriting</option>
                                            <option>After Effects</option>
                                            <option>Writing Editing</option>
                                        </optgroup>
                                        <optgroup label="Music">
                                            <option>Pro Tools</option>
                                            <option>Cubase</option>
                                            <option>Logic Pro</option>
                                            <option>Albeton live</option>
                                            <option>Dreamweaver</option>
                                            <option>Gararge Band</option>
                                            <option>Presonus</option>
                                            <option>Songwriting</option>
                                            <option>Reading music</option>
                                            <option>Guitar</option>
                                            <option>Acoustic Guitar</option>
                                            <option>Guitar Chords</option>
                                            <option>Piano Chords</option>
                                            <option>Voice Training</option>
                                            <option>Singing</option>
                                            <option>Breathing techniques</option>
                                            <option>Publishing</option>
                                            <option>Mechanical Royalties</option>
                                        </optgroup>
                                        <optgroup label="Presentations" >
                                            <option>Leadership</option>
                                            <option>Public Speaking</option>
                                            <option>Presentations</option>
                                        </optgroup>
                                        <optgroup label="Real Estate" >
                                            <option>Construction</option>
                                            <option>Mortgage</option>
                                            <option>Buying a Home</option>
                                            <option>Interior Design</option>
                                            <option>Architecture</option>
                                            <option>PReal Estate Marketing</option>
                                        </optgroup>
                                        <optgroup label="Video" >
                                            <option>Video Editing</option>
                                            <option>Voice Over</option>
                                            <option>Film Making</option>
                                            <option>Cinematography</option>
                                            <option>Lighting</option>
                                            <option>Camera Movement & Placement</option>
                                        </optgroup>
                                        <optgroup label="Writing" >
                                            <option>Novels</option>
                                            <option>Storytelling</option>
                                            <option>Fiction</option>
                                            <option>Character Development</option>
                                            <option>Non-Fiction</option>
                                            <option>Writing Editing</option>
                                        </optgroup>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                        <option value="" diabled selected>Select Country ...</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France Metropolitan</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St. Helena">St. Helena</option>
                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                        <option value="" disabled selected >Select State ...</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France Metropolitan</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St. Helena">St. Helena</option>
                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                        <option value="" disabled selected>Select City ...</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France Metropolitan</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St. Helena">St. Helena</option>
                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>               
                            </div>
                        </div>
                        
                        <div class="modal-footer1">
                            <button type="button" class="btn1 btn-light" data-dismiss="modal">Create Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

    <!-- Kunnec to Me Interview Modal -->
    <div class="modal fade" id="interviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000000">Are you sure you want to enter the Interview :</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="avatar avatar-3xl mr-3 justify-content-center">
                                <img class="img-thumbnail img-fluid rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/1.jpg')}}" alt="" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <h5 class="card-title">{{Auth::user()->username}}</h5>
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6 class="card-text text-muted"> Posted : {{ date('m-d-Y') }}</h6>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <h5 class="card-title">Special title treatment</h5>
                            <hr class="style12">
                            <p class="card-text">You will help Kunnec build next-generation web applications like Kunnec to Me, Kunnec to You, Kunnec Show, and the Kunnec Books and Kunnec Vid. As a Front End Engineer at Kunnec, you will specialize in building responsive and elegant web UIs with AJAX and similar technologies. You may design or work on frameworks for building scalable frontend applications. We are looking for engineers who are passionate about and have experience building leading-edge user experience, including dynamic consumer experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn1 btn-success btn-sm" type="button"><a href="{{ url('k_me/k2me_interview') }}">Yes</a></button>
                    <button class="btn1 btn-danger btn-sm" type="button"  data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Kunnec to Me Interview Modal -->
    <div class="modal fade" id="K2mePostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #ffffff">Do you want to post ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="avatar avatar-3xl mr-3 justify-content-center">
                                <img class="img-thumbnail img-fluid rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/1.jpg')}}" alt="" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <h5 class="card-title">{{Auth::user()->username}}</h5>
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6 class="card-text text-muted"> Posted : {{ date('m-d-Y') }}</h6>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <h5 class="card-title">Special title treatment</h5>
                            <hr class="style12">
                            <p class="card-text">You will help Kunnec build next-generation web applications like Kunnec to Me, Kunnec to You, Kunnec Show, and the Kunnec Books and Kunnec Vid. As a Front End Engineer at Kunnec, you will specialize in building responsive and elegant web UIs with AJAX and similar technologies. You may design or work on frameworks for building scalable frontend applications. We are looking for engineers who are passionate about and have experience building leading-edge user experience, including dynamic consumer experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer1 d-flex justify-content-center">
                <small class="text-white"> Post duration is 7 days and 10 credits will be deducted from your credit balance or your post will be deleted.</small>
                    <button type="button" class="btn1 btn-danger" style="margin-top: -2px;">
                    <a href="{{ url('k_me/k2me_post') }}" style="color: #ffffff; font-size: 12px;">Post</a>
                </button>
                </div>
            </div>
        </div>
    </div>

    

     <!-- Start Wrapper -->
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" >
            <div class="sidebar-header">
                <a href="{{ url('dashboard') }}">
                    <img src="{{ asset('public/images/K_Logo6.png') }}" height="40" width="60"/>
                </a>
            </div>
            <div class="sidebar-account-area">
                <div class="row" style="margin: 0px;">
                    <div class="col-4">
                        <a href="{{route('profile')}}">
                        <img src="{{Auth::user()->image}}" width="60" height="60" class="rounded-circle img-border box-shadow-1" alt="user image" style="object-fit: cover;">
                        </a> 
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-sm mt-3">
                                <h4><a href="{{route('profile')}}" style="font-size: inherit;color: #ffffff;text-transform: capitalize;">{{Auth::user()->username}}</a></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <a  href="{{ route('edit_profile',['tab'=>'settings']) }}">
                                    <small style="color:#FFFFFF;">Edit Profile </small>
                                </a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
            <ul class="list-unstyled components">
                <li>
                    
                </li>
                <li>
                    <a href="#kunnecSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-globe" style="color: #FA8D0A"></i> Kunnec
                    </a>
                    <ul class="collapse list-unstyled" id="kunnecSubmenu">
                        <li>
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fas fa-users"></i> Social
                            </a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="{{ route('social.home') }}">
                                        <i class="fas fa-home"></i> Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('social/profile') }}">
                                        <i class="fas fa-user"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('edit_profile',['tab'=>'settings']) }}">
                                        <i class="fas fa-id-card"></i> Edit Profile 
                                    </a>
                                </li>
                                                      
                                <li>
                                    <a href="{{ route('users.mayKnow') }}"><i class="fas fa-question-circle"></i> You May Know</a>
                                </li>
                            </ul>
                            <li>
                                <a href="#kunnectomeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-glass-cheers"></i> Events</a>
                                <ul class="collapse list-unstyled" id="kunnectomeSubmenu">
                                    <li>
                                        <a href="{{ route('events.home') }}"><i class="fas fa-home"></i></i> Events Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('events.list') }}"><i class="fas fa-cocktail"></i></i> My Events</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('events.add') }}"><i class="fas fa-glass-martini-alt"></i> Create an Event</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('events.invites') }}"><i class="fas fa-glass-cheers"></i> Event Invites</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#kunnectome" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-laptop"></i> Kunnec Job
                                </a>
                                <ul class="collapse list-unstyled" id="kunnectome">
                                    <li>
                                        <a href="{{ route('k2me.jobsHome') }}" class="text-capitalize"><i class="fas fa-home"></i> Home </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('k2me.addJobPost') }}" class="text-capitalize"><i class="fas fa-sticky-note"></i> Create a Post</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('k2me.myJobs') }}" class="text-capitalize"><i class="fas fa-list"></i> My Post List</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#kunnectoyou" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user"></i> Kunnec to You
                                </a>
                                <ul class="collapse list-unstyled" id="kunnectoyou">
                                    <li>
                                        <a href="{{route('k2u.home')}}" class="text-capitalize"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('k2u.profile')}}" class="text-capitalize"><i class="fas fa-user"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{route('k2u.settings',['tab'=>'setup'])}}" class="text-capitalize"><i class="fas fa-tools"></i>  Settings</a>
                                    </li>          
                                </ul>
                            </li>
                            <li class="ksceen_menu">
                                <a href="#kunnecrecordSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                    <i class="fas fa-microphone"></i> Kunnec Screen
                                </a>
                                <ul class="collapse list-unstyled" id="kunnecrecordSubmenu">
                                    <li>
                                        <a href="{{ route('krecords.home') }}"><i class="fas fa-home"></i> Screen Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('krecords.settings',['tab'=>'setup']) }}"><i class="fas fa-tools"></i> Settings</a>
                                    </li>
                                </ul>
                            </li>
                            <!--
                            <li>
                                <a href="#kunnecspot" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-phone-volume"></i> Kunnec Spot
                                </a>
                                <ul class="collapse list-unstyled" id="kunnecspot">
                                    <li>
                                        <a href="{{ url('k_spot/k_spot') }}" class="text-capitalize"><i class="fas fa-home"></i> Setup Spot </a>
                                    </li>
                                   
                                </ul>
                            </li>-->
                            <li>
                                <a href="{{ url('k_spot/k_spot') }}" class="text-capitalize"><i class="fas fa-phone-volume"></i> Kunnec Spot </a>
                            </li>
                            
                            
                            <!-- ADD LATER 
                            <li>
                                <a href="#kunnecshop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-shopping-cart"></i> Kunnec Shop
                                </a>
                                <ul class="collapse list-unstyled" id="kunnecshop">
                                    <li>
                                        <a href="{{ url('k_shop/shop') }}" class="text-capitalize"><i class="fas fa-home"></i> Shop Home </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('k_shop/shop_mystore') }}" class="text-capitalize"><i class="fas fa-store"></i> My Store </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('k_shop/shop_cart') }}" class="text-capitalize"><i class="fas fa-shopping-cart"></i> Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('k_shop/shop_wlist') }}" class="text-capitalize"><i class="fas fa-heart"></i> Wish List </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('k_shop/shop_orders') }}" class="text-capitalize"><i class="fas fa-shopping-basket"></i> Orders </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('k_shop/shop_settings') }}" class="text-capitalize"><i class="fas fa-tools"></i> Settings </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize"> Create Add </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#kunneccourseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-graduation-cap"></i> Kunnec Courses
                                </a>
                                <ul class="collapse list-unstyled" id="kunneccourseSubmenu">
                                    <li>
                                        <a href="{{ url('k_course/course') }}"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li>
                                    <a href="{{ url('k_course/course_settings') }}"><i class="fas fa-tools"></i> Settings</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#kunnecteachSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-tv"></i>
                                    Kunnec Screen
                                </a>
                                <ul class="collapse list-unstyled" id="kunnecteachSubmenu">
                                    <li>
                                        <a href="#kunnectutorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-chalkboard-teacher"></i>
                                            Tutors
                                        </a>
                                        <ul class="collapse list-unstyled" id="kunnectutorSubmenu">
                                            <li>
                                                <a href="{{ url('k_screen/tutors/tutors') }}"><i class="fas fa-home"></i> Tutor Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('k_screen/tutors/tutors_settings') }}"><i class="fas fa-tools"></i> Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#kunnecrecordSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
                                            <i class="fas fa-microphone"></i> Recording
                                        </a>
                                        <ul class="collapse list-unstyled" id="kunnecrecordSubmenu">
                                            <li>
                                            <a href="{{ url('k_screen/recording/record') }}"><i class="fas fa-home"></i> Record Home</a>
                                            </li>
                                            <li>
                                            <a href="{{ url('k_screen/recording/record_settings') }}"><i class="fas fa-tools"></i> Settings</a>
                                            </li>
                                        </ul>
                                    </li>       
                                </ul>
                            </li>
                            
                            <!-- Add Section Later
                            <li>
                                <a href="#kunnecshowSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-film"></i> Kunnec Show</a>
                                <ul class="collapse list-unstyled" id="kunnecshowSubmenu">
                                    <li>
                                        <a href="{{ url('k_live/live') }}"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li>
                                    <a href="{{ url('k_live/live_settings') }}"><i class="fas fa-tools"></i> Settings</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#kunnecshareSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-window-restore" aria-hidden="true"></i> Kunnec Share</a>
                                <ul class="collapse list-unstyled" id="kunnecshareSubmenu">
                                    <li>
                                        <a href="{{ url('k_live/live') }}"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li>
                                    <a href="{{ url('k_live/live_settings') }}"><i class="fas fa-tools"></i> Settings</a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a href="#kunnecvidaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-video"> </i> Kunnec Show
                                </a>
                                <ul class="collapse list-unstyled" id="kunnecvidaccountSubmenu">
                                    <li>
                                        <!-- <a href="{{ url('k_vid/vid') }}"><i class="fas fa-home"></i> Home</a>
                                        <a href="https://show.kunnec.com" target="_blank" ><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <!-- <li>
                                        <a href="{{ url('k_vid/vid_settings') }}"><i class="fas fa-tools"></i> Settings </a>
                                    </li>     
                                </ul>
                            </li>-->
                            <li>
                                <!-- <a href="{{ url('k_vid/vid') }}"><i class="fas fa-home"></i> Home</a> -->
                                <a href="https://show.kunnec.com" target="_blank" ><i class="fas fa-video"></i> Kunnec Show</a>
                            </li>
                            
                            <!-- Add Section Later 
                            <li>
                                <a href="#kunnecbooksaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-book"></i> 
                                    Kunnec Books
                                </a>
                                <ul class="collapse list-unstyled" id="kunnecbooksaccountSubmenu">
                                    <li>
                                        <a href="{{ url('k_book/books') }}"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('k_book/book_settings') }}"><i class="fas fa-tools"></i> Settings </a>
                                    </li>     
                                </ul>
                            </li>
                            <li>
                                <a href="#kunnecMusicaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-music" aria-hidden="true"></i>
                                    Kunnec Music
                                </a>
                                <ul class="collapse list-unstyled" id="kunnecMusicaccountSubmenu">
                                    <li>
                                        <a href="{{ url('k_music/music') }}"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('k_music/music_settings') }}"><i class="fas fa-tools"></i> Settings </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#kunnecPodaccountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-podcast" aria-hidden="true"></i>
                                    Kunnec Kpod
                                </a>
                                <ul class="collapse list-unstyled" id="kunnecPodaccountSubmenu">
                                    <li>
                                        <a href="{{ url('k_pod/Kpod') }}"><i class="fas fa-home"></i>  Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('k_pod/Kpod_settings') }}"><i class="fas fa-tools"></i> Settings </a>
                                    </li>
                                </ul>
                            </li> 
                            
                            -->
                        </li>
                    </ul>
                </li>
               
                            
               <li>
                    <a href="#accountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-wallet"></i> Account
                    </a>
                    <ul class="collapse list-unstyled {{ request()->is('account/*') ? 'show' : '' }}" id="accountSubmenu">
                        <li>
                            <a href="{{ route('account',['tab'=>'information']) }}" class="{{ request()->is('account/account') ? 'active' : '' }}">
                                <i class="fas fa-user-edit"></i> Settings
                            </a>
                        </li>
                        <!--
                        <li>
                             <a href="#creditSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-coins"></i> Credits <span class="badge badge-danger"> Balance: <span style="color: #FFFFFF;"> 24 </span></span></a>

                            <ul class="collapse list-unstyled" id="creditSubmenu">
                                <li>
                                    <a href="{{ url('account/account_credits') }}" class="{{ request()->is('account/account_credits') ? 'active' : '' }}"><i class="fas fa-cart-plus"></i> Purchase Credits</a>
                                </li>
                                <li>
                                    <a href="{{ url('account/account_credithistory') }}" class="{{ request()->is('account/account_credithistory') ? 'active' : '' }}"><i class="fas fa-history"></i> Credit History</a>
                                </li>
                                
                            </ul>
                        </li>
                        -->
                        <li>
                            <a href="{{ url('account/account_creditsummary') }}" class="{{ request()->is('account/account_creditsummary') ? 'active' : '' }}"><i class="fas fa-hand-holding-usd"></i> Payment <span class="badge badge-warning"> Balance: $356 <span style="color: #FFFFFF;">  </span></span></a>
                        </li>
                        <!--
                        <li>
                            <a href="#adsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-ad"></i> K-Ads 
                                <span class="badge badge-danger"> Balance: 12 <span style="color: #FFFFFF;"> </span></span>
                            </a>
                            <ul class="collapse list-unstyled" id="adsSubmenu">
                                <li>
                                    <a href="{{ url('ads/about') }}"><i class="fas fa-bolt"></i> About</a>
                                </li>
                                <li>
                                    <a href="{{ url('ads/setup') }}"><i class="fas fa-tools"></i> Setup</a>
                                </li>
                                <li>
                                    <a href="{{ url('ads/balance') }}"><i class="fas fa-balance-scale"></i> Balance</a>
                                </li>
                            </ul>
                        </li>
                        -->
                    </ul>
                </li>
                
                <li>
                    <a href="{{ route('messages') }}">
                        <i class="fas fa-comments"></i> Messages &nbsp;&nbsp; @if($common->chatCount)<span1 class="badge badge-danger"> {{$common->chatCount}}</span1>@endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('notifications',['notify_type'=>'account']) }}">
                        <i class="fas fa-bell"></i> Notifications &nbsp;&nbsp; @if($common->notifyCount) <span1 class="badge badge-danger"> {{$common->notifyCount}}</span1>@endif
                    </a>
                </li>
                <li>
                    <a href="{{ url('photo-editor') }}">
                        <i class="fas fa-camera"></i> Photo Editor
                    </a>
                </li>
                <!-- Add Section later 
                <li>
                    <a href="{{ url('k_store/store') }}">
                        <i class="fas fa-store"></i> Kunnec Store
                    </a>
                </li>
                
                
                <li>
                    <a href="{{ url('k_task/task') }}"><i class="fas fa-pencil-alt"></i> My Tasks
                    </a>
                </li>
                <li>
                    <a href="{{ url('k_store/store') }}">
                        <i class="fas fa-store"></i> Kunnec Store
                    </a>
                </li>
                -->
                
                
                 <!-- Add Section later  
                <li>
                    <a href="{{ url('trax/daw') }}">
                        <i class="fas fa-stream"></i> Trax
                    </a>
                </li>
                -->
                
                
                <li>
                    <a href="{{ route('logout') }}"><i class="fas fa-times-circle"></i> Sign-Out
                    </a>
                </li> 
                <li>
                    <ul class="list-unstyled CTAs">
                        <li>
                            <p>Translate below</p>
                            <div id="google_translate_element"></div>
                        </li>
                    </ul>
                </li>      
            </ul>
        </nav>
        <!-- End sidebar content-->
        <!-- Page Content Holder -->
        <div id="content"> 
            <nav class="navbar navbar-expand-lg navbar-custom" style="background-color: #009900;">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <form style="margin-bottom: 0px;">
                        <input type="search" placeholder="Search" id="searchProfile">
                        <div class="search_result" id="ajax_search">
                                        
                        </div>
                    </form>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FFFFFF; color: #009900; border-color: #009900;">
                        <i class="fas fa-align-justify"></i>
                    </button> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                           <a href="{{ route('account',['tab'=>'plan']) }}" style="font-size:20px; color: #ffffff;"> Account Days:
                                                <i  data-toggle="tooltip" data-placement="bottom" style="color: #FFFFFF;"></i> 
                                                <span1 class="badge badge-warning"> 9 </span1>
                                            </a> |
                                            &nbsp;
                                            <a href="{{ route('notifications',['notify_type'=>'account']) }}" style="font-size:20px; color: #ffffff;">
                                            <i class="fas fa-bell" data-toggle="tooltip" data-placement="bottom" title="Notifications" style="color: #FFFFFF;"></i>  @if($common->notifyCount) <span1 class="badge badge-danger"> {{$common->notifyCount}}</span1>@endif </a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('messages') }}" style="font-size:20px; color: #ffffff;"><i class="fas fa-comments" data-toggle="tooltip" data-placement="bottom" title="Messages"></i> 
                                            @if($common->chatCount)<span1 class="badge badge-danger"> {{$common->chatCount}}</span1>@endif</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <!-- This only appears ( if statement) when the admin posts new news about Kunnec and once the user closes the announcement, it does not appear again on the other pages 
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading"><i class="fas fa-gem"></i>
                    Kunnec Announcements:
                </h4>
                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                 <hr>
                <p class="mb-0">Thank you {{Auth::user()->username}}, your time and interest is greatly appreciated by Kunnec.com </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
                   
            
            @yield('content')
        <!-- End offset Content -->
        </div>
    </div>
</div>
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user-dash/js/sbt.js') }}"></script>
    <script src="{{ asset('public/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/libs/@fortawesome/all.min.js') }}"></script>
    
    <!-- <script type="text/javascript" src="{{ asset('public/user-dash/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js')}}"></script> -->

    <script type="text/javascript" src="{{ asset('public/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap-3.4.1.min.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('public/user-dash/js/datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user-dash/js/bootstrap-multiselect.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/emoji/vanillaEmojiPicker.js') }}"></script>
    <script src="{{ asset('public/assets/front/plugins/ckeditor_input/ckeditor.js') }}"></script>
    <script src="{{ asset('public/assets/front/plugins/ckeditor_input/js/sample.js') }}"></script>
    <script>
        $(function(){
            if($("#descriptions").length){
                CKEDITOR.replace('descriptions',{});
            }
        });
        new EmojiPicker({
            trigger: [
                {
                    selector: '.emoji-picker-icon',
                    insertInto: '#messageInput'
                }
            ],
            closeButton: true,
            //specialButtons: green
        });

    </script>
    <!-- <script src="{{ asset('public/emoji-picker-main/lib/js/config.js')}}"></script>
    <script src="{{ asset('public/emoji-picker-main/lib/js/util.js')}}"></script>
    <script src="{{ asset('public/emoji-picker-main/lib/js/jquery.emojiarea.js')}}"></script>
    <script src="{{ asset('public/emoji-picker-main/lib/js/emoji-picker.js')}}"></script> -->
    
    <!-- <script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: "{{ asset('public/emoji-picker-main/lib/img')}}",
          popupButtonClasses: 'fa fa-smile'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
    </script> -->
    <script>
    $(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
      });
    });
  </script>
  <script>
    $(function() {
      $('[data-toggle="datepicker1"]').datepicker({
        autoHide: true,
        zIndex: 2048,
      });
    });
  </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#team').multiselect();
    });
</script>
    {{-- <script type="text/javascript" src="{{ asset('public/user-dash/js/cal_event.js') }}"></script> --}}
    
    <script src="{{ asset('public/user-dash/assets/lib/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('public/user-dash/assets/lib/ckeditor/js/sample.js') }}"></script>
    
    <script>
        $(function(){
            if($("#about_me").length){
                CKEDITOR.replace('about_me',{});
            }
        });
        
        var getStatesUrl = "{{ route('get.states.by.country') }}"+"/";
        var getCitiesUrl = "{{ route('get.cities.by.states') }}"+"/";
        var oldState = "";
        var oldCity = "";
        var oldCountry = "";
        var oldGender = "";
        var oldPlan = "";
        var oldDOB = ""
    </script>
    @yield('additional-js')
    <script src="{{ asset('public/js/pages/signup.js') }}"></script>

    @yield('js/world')
    @yield('js/imgprv.js')
    @yield('js/task.js')
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on("keyup click", '#searchProfile', function(event){
                event.preventDefault();
                var search_key=$(this).val();
                searchProfile("{{ route('profileSearch') }}",{'q':search_key});
            });
            $(document).on("click", '.postComtBtn', function(event){
                var post_id=$(this).attr('data-id');
                var inputObj=$(".cmtInput_"+post_id);
                postComment(inputObj);
            });

            $(document).on("keydown",'.postCommentInput',function(event){
                if(event.which == 13){
                    postComment($(this));
                }
            });
            $(document).on("click", '.snapComtBtn', function(event){
                var id=$(this).attr('data-id');
                var inputObj=$(".snapCmtInput_"+id);
                snapComment(inputObj);
            });

            $(document).on("keydown",'.snapCommentInput',function(event){
                if(event.which == 13){
                    snapComment($(this));
                }
            });


            $(document).on("change", '#images', function(event){
                var post_files=$(".post_files .row");
                post_files.html('');
                $(this.files).each(function(){
                    var mimeType=this['type'];
                    
                    var reader = new FileReader();
                    reader.readAsDataURL(this);
                    reader.onload = function(e){
                        var html='<div class="col-lg-4 file_block"><video width="100%" controls="" class="selected_file"><source src="'+e.target.result+'" type="video/mp4"></video></div>';
                        if(mimeType.split('/')[0] === 'image'){
                            html='<div class="col-lg-4 file_block"><img src="'+e.target.result+'" class="selected_file"></div>';
                        }
                        console.log(e);
                        post_files.append(html);
                    }
                });
            });
            $("#cover_image").change(function(){
                if(this.files && this.files[0]){
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#cover_uploaded').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
            
            $(document).on("change", '#snapImgs', function(event){
                var snapSelFiles=$(".snapSelFiles .row");
                snapSelFiles.html('');
                $(this.files).each(function(){
                    var mimeType=this['type'];
                    
                    var reader = new FileReader();
                    reader.readAsDataURL(this);
                    reader.onload = function(e){
                        var html='<div class="col-lg-6 file_block"><video width="100%" controls="" class="selected_file"><source src="'+e.target.result+'" type="video/mp4"></video></div>';
                        if(mimeType.split('/')[0] === 'image'){
                            html='<div class="col-lg-6 file_block"><img src="'+e.target.result+'" class="selected_file"></div>';
                        }
                        console.log(e);
                        snapSelFiles.append(html);
                    }
                });
            });
            window.preview = function (input,obj_id="#icon_img") {
                if (input.files && input.files[0]) {
                    $(obj_id).html('');
                    $(input.files).each(function () {
                        var reader = new FileReader();
                        reader.readAsDataURL(this);
                        reader.onload = function (e) {
                            $(obj_id).append("<img class='side_img' src='" + e.target.result + "'>");
                        }
                    });
                }
            }
            $(document).on("click", '.pstatus', function(event){
                event.preventDefault();
                $("#postStatus").val($(this).text());
            });
            var tab_url=$(".hwstabs").attr('tab-url');
            console.log(tab_url);
            $(document).on('click', '.hwstabs .nav-tabs li a', function() {
                var tab=$(this).attr('href');
                tab=$(tab).attr('id');
                window.history.pushState('page2', 'Title', tab_url+"/"+tab);
            });

            $(document).on('click', '.disableMsg', function(){
                $(".msgClickRespo").show();
            });
            $(document).on('click', '.delete_post', function(){
                var url=$(this).attr('url');
                var row_id=$(this).attr('row-id');
                $("#del_url").val(url);
                $("#del_id").val(row_id);
            });
            $(document).on('click', '#deleteYes', function() {
                var url=$("#del_url").val();
                var row_id=$("#del_id").val();
                if(url){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url : url,
                        method: 'POST',
                        data: {'id':row_id},
                    }).done(function (data){
                        console.log(data);
                        $(".delete_"+row_id).remove();
                    }).fail(function () {
                        window.href="";
                    }); 
                }
            });
            $(document).on('click', '.postLike', function(e) {
                e.preventDefault();
                var currObj=$(this);
                var post_id=$(this).attr('data-id');
                var url="{{ route('post.like') }}";
                var likeImg="{{ asset('public/user-dash/images/illustrations/like-active.png')}}";
                var unLikeImg="{{ asset('public/user-dash/images/illustrations/like-inactive.png')}}";
                if(url){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url : url,
                        method: 'POST',
                        data: {'post_id':post_id},
                    }).done(function (data){
                        var currImg=currObj.children('img').attr('src');

                        if(currImg==likeImg){
                            currObj.children('img').attr('src',unLikeImg);
                        }else{
                            currObj.children('img').attr('src',likeImg);
                        }
                        console.log(data);
                    }).fail(function () {
                        window.href="";
                    }); 
                }
            });
            $(document).on('click', '.snapLike', function(e) {
                e.preventDefault();
                var currObj=$(this);
                currObj.prop('disabled', true);
                var snap_id=$(this).attr('data-id');
                var url="{{ route('snap.like') }}";
                var currCount=$("#sanpLikeCount_"+snap_id).text();
                currCount=parseInt(currCount);
                if(url){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url : url,
                        method: 'POST',
                        data: {'snap_id':snap_id},
                    }).done(function (data){
                        if(currObj.children('svg').attr('data-prefix')=='fa'){
                            currObj.html('<i class="ace-icon far fa-heart"></i>');
                            $("#sanpLikeCount_"+snap_id).text(currCount-1);
                        }else{
                            currObj.html('<i class="ace-icon fa fa-heart"></i>');
                            $("#sanpLikeCount_"+snap_id).text(currCount+1);
                        }
                        currObj.prop('disabled', false);
                        console.log(data);
                    }).fail(function () {
                        window.href="";
                    }); 
                }
            });

            $(document).on('click', '.deletePostFile', function(e) {
                e.preventDefault();
                var currObj=$(this);
                var post_id=$(this).attr('post-id');
                var file_id=$(this).attr('file-id');
                var url="{{ route('postFile.delete') }}";
                
                if(url){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url : url,
                        method: 'POST',
                        data: {'post_id':post_id,'file_id':file_id},
                    }).done(function (data){
                        console.log(data);
                        $(".delete_"+file_id).remove();
                    }).fail(function () {
                        window.href="";
                    }); 
                }
            });
        });
        $(document).mouseup(function(e) {
            var container = $("#ajax_search");
            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });
        function postComment(inputObj){
            //var inputObj=$(this);
            var pageurl="{{ route('post.createComment') }}";
            var post_id=inputObj.attr('data-id');
            var comment=inputObj.val();
            comment=comment.trim();
            
            var commentData={post_id:post_id , comment:comment};
            if(comment){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : pageurl,
                    method:'POST',
                    data:commentData,
                }).done(function (data){
                    inputObj.val('');
                    console.log(data);
                    $("#cmtBlock_"+post_id).prepend(data);
                }).fail(function (){
                    
                });
            }else{
                console.log("plz enter comment");
            }
        }
        function snapComment(inputObj){
            //var inputObj=$(this);
            var pageurl="{{ route('snap.createComment') }}";
            var snap_id=inputObj.attr('data-id');
            var comment=inputObj.val();
            comment=comment.trim();
            
            var commentData={snap_id:snap_id,comment:comment};
            if(comment){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : pageurl,
                    method:'POST',
                    data:commentData,
                }).done(function (data){
                    inputObj.val('');
                    console.log(data);
                    $("#snapCmtBlock_"+snap_id).prepend(data);
                }).fail(function (){
                    
                });
            }else{
                console.log("plz enter comment");
            }
        }
        function searchProfile(url,data=null){
            var out_put=$("#ajax_search");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : url,
                method: 'get',
                data: data,
            }).done(function (data){
                $("#ajax_search").show();
                out_put.html(data);
            }).fail(function () {
                window.href="";
            });  
        }
        function readImgURL(input,imgId) {
            if(input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(imgId).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        window.preview = function (input,obj_id){
            if (input.files && input.files[0]) {
                //$(obj_id).html('');
                $(input.files).each(function () {
                    var reader = new FileReader();
                    reader.readAsDataURL(this);
                    reader.onload = function (e) {
                        $(obj_id).attr('src', e.target.result);
                    }
                });
            }
        }
    </script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    <script type="text/javascript">
        var messageInput=$("#messageInput");
        var room_chats=$("#room_chats");
        var file_path="";
        var last_chat_id=0;
        var chat_row_id=0;
        var curr_room_id="";
        $(document).ready(function(){
            /* if (typeof (currRoomData) != "undefined" && currRoomData) {
                try{
                    currRoomData = JSON.parse(currRoomData);
                }catch (e) {
                    //return false;
                }
            } */
            
            $(document).on('click', '.edit_msg',function(){
                $(".reply_box").hide();
                var chat_id=$(this).attr('id');
                var msg_id=$(this).attr('msg-id');
                $("#edit_msg_id").val(msg_id);
                $("#reply_chat_id").val('')
                var old_msg=$(".msgtext_"+msg_id).text();
                messageInput.val(old_msg.trim());
            });
            $(document).on('click','.quote_msg',function(){
                var chat_id=$(this).attr('id');
                var msg_id=$(this).attr('msg-id');
                var msg_type=$(this).attr('msg-type');
                $("#edit_msg_id").val("");
                $("#reply_chat_id").val(msg_id);
                messageInput.val("");
                $(".reply_box").show();
                var msg_user=$(".chat_"+msg_id+" .sender_name").text();
                var reply_msg=$(".msgtext_"+msg_id).html();
                $(".reply_chat_text").html(reply_msg);
                $(".msg_user").text(msg_user);
                msgData.reply.msg_type=msg_type;
                if(msg_type!="text"){
                    var url=$(".msgtext_"+msg_id+" a").attr('href');
                    msgData.reply.chat_content=url;
                }else{
                    msgData.reply.chat_content=reply_msg;
                }
                msgData.reply.sender_user.first_name=msg_user;
            });
            $(document).on('click', '.close_box',function(){
                $("#edit_msg_id").val("");
                $("#reply_chat_id").val("");
                $(".reply_box").hide();
            });

            var uploadUrl="{{route('social.uploadFiles')}}";
            $("#attachFile").change(function(){
                $(".loader_html").show();
                var attachFile = $('#attachFile').prop('files')[0];
                var formData = new FormData();
                formData.append('attachFile', attachFile);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : uploadUrl,
                    //dataType: 'json',
                    method:'POST',
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                }).done(function (data){
                    console.log(data);
                    if(data.file_url!=""){
                        $(".loader_html").hide();
                        //msgData.chat_content=data.file_data.file_url;
                        msgData.msg_type=data.file_data.type;
                        msgData.file_path=data.file_data.file_path;
                        sendMessage(data.file_data.file_url);
                    }
                }).fail(function () {
                    //window.location.href="";
                });
            });

            $(".videoPlay").on('canplay', function () {
                $(this).mouseenter(function () {
                    $(this).get(0).play();
                }).mouseleave(function () {
                    $(this).get(0).pause();
                })
            });



            $(document).on("click", '.deleteItem', function(event){ 
                var id=$(this).attr('data-id');
                var deleteObj=$("#delete_"+id);
                var url=$(this).attr('data-url');
                var data={'id':id};
                if(confirm("Are You sure want to delete this?")){
                    $(".loader_html").show();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url : url,
                        method: 'POST',
                        data: data,
                    }).done(function (data){
                        if(data.success==1){
                            deleteObj.remove(); 
                        }
                        $(".loader_html").hide();
                    }).fail(function () {
                        $(".loader_html").hide();
                        console.log("Somehing went wrong please try again!");
                    });   
                }
            });
        });
        @if(Auth::check())
            var user_id={{ Auth::user()->id }};
            var fileModel={file:"",formate:"text"};
            var msgData={
                last_chat_id:0,
                msg_id:0,
                file_path:"",
                chat_content:"",
                sender_id:0,
                receiver_id:0,
                date:new Date(),
                fileModel:fileModel,
                msg_type:"text",
                chat_id:"",
                reply_chat_id:"",
                room_id:"",
                token:"",
                reply:{
                    file_path:"",
                    chat_content:"",
                    sender_id:0,
                    receiver_id:0,
                    date:new Date(),
                    msg_type:"text",
                    receiver_user:{
                        id:0,
                        first_name:"",
                    },
                    sender_user:{
                        id:0,
                        first_name:""
                    },
                },
                receiver_user:{
                    id:0,
                    first_name:"",

                },
                sender_user:{
                    id:0,
                    first_name:""
                },
            };
           
            var userslist=[];
            function setRoomData(room_data){
                if (typeof(room_data)!= "undefined" && room_data) {
                    try {
                        room_data = JSON.parse(room_data);
                    }catch (e) {
                      
                    }
                }
                if(room_data){
                    msgData['receiver_user']=room_data.receiver_user;
                    msgData['sender_user']=room_data.sender_user;
                    curr_room_id=msgData['room_id']=room_data.id;
                    setUserStatus(userslist,room_data.receiver_user.id);  
                }
                console.log(msgData);
                console.log("room_"+curr_room_id+"_"+Date.now());
            }

            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays*24*60*60*1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for(var i = 0; i <ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            
            var socket=null;
            var node_url="{{config('services.node_url')}}";
            if(node_url){
                try{
                    socket = io.connect(node_url);  
                }catch(e){
                    console.log(e);
                } 
            }   
            if(socket!=null){
                socket.on('connect', function(){
                    console.log('connected');
                    socket.emit('join',user_id);
                    socket.on('disconnect', function () {
                        console.log('disconnected');
                    });                
                });
                socket.on('message', function(messageContent){
                    var today = new Date();
                    //var msgDate = today.toLocaleString();
                    var msgDate = today.toLocaleTimeString();
                    var msgdata=messageContent.message;
                    if (typeof (msgdata) != "undefined" && msgdata) {
                        try {
                          msgdata = JSON.parse(msgdata);
                        }catch (e) {
                          //return false;
                        }
                    }
                    console.log("message event");
                    console.log(msgdata);
                    drawChatMsg(msgdata);
                    
                });
                socket.on('userslist',function(users){
                    userslist=users;
                    if(userslist){
                        console.log("userslist="+userslist);
                        for(var i=0;i<userslist.length;i++){
                            $(".status_"+userslist[i]).removeClass("status-offline");
                            $(".status_"+userslist[i]).addClass("status-online");
                            
                            $(".status_"+userslist[i]).removeClass("offline");
                            $(".status_"+userslist[i]).addClass("online");
                        }
                    }
                });

                socket.on('online', function(status){
                    console.log(status);
                    var statusId=status.userid;
                    setUserStatus(userslist,statusId);                   
                });
                socket.on('user_typing', function(typeData){
                    console.log(typeData);
                    var recever_id=typeData.recever;
                    var room_id=typeData.room_id;
                    if(typeData.status==1){
                        $(".typing_"+recever_id).show(); 
                    }else{
                        $(".typing_"+recever_id).hide(); 
                    }
                });
                var canPublish = true;
                var throttleTime = 2000; //0.2 seconds
                var clearTimerId;
                $("#messageInput").on('keyup', function(event){
                    clearTimeout(clearTimerId);
                    if(event.which!=13){
                        if(canPublish) {
                            socket.emit('typing',msgData.room_id,user_id,1);
                            canPublish = false;
                        }
                        clearTimerId = setTimeout(function() {
                            canPublish = true;
                            socket.emit('typing',msgData.room_id,user_id,0);
                        },throttleTime);
                    }else{
                        clearTimerId = setTimeout(function() {
                            canPublish = true;
                            socket.emit('typing',msgData.room_id,user_id,0);
                        },throttleTime);
                    }
                });  
            }
            function setUserStatus(userslist,receiver){
                console.log(userslist);
                console.log("receiver="+receiver);
                console.log(userslist.indexOf(receiver));
                $("#status_"+receiver).removeClass("online");
                $("#status_"+receiver).addClass("offline");
                if(userslist.indexOf(receiver)>-1) {
                    $("#status_"+receiver).removeClass("offline");
                    $("#status_"+receiver).addClass("online");
                }
            }
            function getOnlineStatus(userslist,receiver){
                if(userslist.indexOf(receiver)>-1) {
                    return 1;
                }else{
                    return 0;
                }
            }
            function addMessage(chatData){
                pageurl="{{ route('social.addMessage') }}";
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url : pageurl,
                    method:'POST',
                    data:chatData,
                }).done(function (data){
                    console.log(data);
                    last_chat_id=data.chat_id;
                    /* $(".nodeChat_"+chat_row_id).attr('id',last_chat_id);
                    $(".nodeMsgText_"+chat_row_id).addClass("msgtext_"+last_chat_id);
                    $(".nodeChatli_"+chat_row_id).addClass("chat_"+last_chat_id); 
                    chat_row_id++; */               
                }).fail(function (){
                    
                });
            }
            function sendMessage(chat_content=""){
                var msg=messageInput.val();
                var chat_id=$("#edit_msg_id").val();
                var reply_chat_id=$("#reply_chat_id").val();
                var msgId=curr_room_id+"_"+Date.now();
                if(chat_id){
                    msgId=chat_id;
                }
                //alert(msg);
                if(chat_content!=""){
                    msg=chat_content;
                }
                msg=msg.trim();
                msgData.chat_content=msg;
                msgData.chat_id=chat_id;
                msgData.reply_chat_id=reply_chat_id;
                msgData.msg_id=msgId;

                var is_online=getOnlineStatus(userslist,msgData.receiver_user.id);
                if(msg!=""){
                    
                    var chatData={
                        room_id       : msgData.room_id,
                        receiver_id   : msgData.receiver_user.id,
                        sender_id     : msgData.sender_user.id,
                        chat_content  : msgData.chat_content,
                        msg_type      : msgData.msg_type,
                        is_online     : is_online,
                        chat_id        : chat_id,
                        msg_id        : msgId,
                        reply_chat_id : reply_chat_id,
                    };
                    addMessage(chatData);
                    if(socket.connected){
                        msgData.chat_content=encodeURI(msgData.chat_content);
                        var msgJson=JSON.stringify(msgData);
                        socket.emit('messagedetection',msgJson,"web");
                    }else{
                        drawChatMsg(msgData);
                    }
                    messageInput.val('');
                    $("#edit_msg_id").val('')
                    $("#reply_chat_id").val('')
                    //$(".msgtext_"+msg_id).html(msg);
                    $(".reply_box").hide();
                    $(".chat_messages").stop().animate({ scrollTop: $(".chat_messages")[0].scrollHeight}, 1000);
                }else{
                    console.log(msg+"==emoji");
                }
            }
            function drawChatMsg(msgdata){
                var msgDate =  new Date().toLocaleTimeString();
                if(curr_room_id==msgdata.room_id){
                    setUserStatus(userslist,msgdata.receiver_user.id);
                    var userImg=msgdata.sender_user.image;
                    var userName=msgdata.sender_user.first_name;
                    var msg_id=msgdata.msg_id;
                    if(msgdata.sender_user.id==user_id){
                    }
                    var msghtml="";
                    msghtml+='<li class="chat-left chat_li chat_'+msg_id+'"><div class="chat-avatar"><img class="user_img" src="'+userImg+'" alt="Retail Admin"></div><div class="chat-text"><div class="chat-name"><div class="sender_name">'+userName+'</div><div class="chat-hour">'+msgDate+' &nbsp;<span class="fa fa-check-circle"></span></div>';
                    msghtml+='<div class="msg_menu"><div  id="dropdownMenu2" class="story-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="up-icon"><i class="fas fa-ellipsis-h"></i></div></div><div class="dropdown-menu" aria-labelledby="dropdownMenu2">';
                    if(msgdata.sender_user.id==user_id){
                        msghtml+='<button class="dropdown-item edit_msg" msg-id="'+msg_id+'" id="" type="button"> <i class="fas fa-pencil-alt"></i>   Edit Message</button>';
                    }
                    msghtml+='<button class="dropdown-item quote_msg" msg-id="'+msg_id+'" id="" type="button" msg-type="'+msgdata.msg_type+'"> <i class="fas fa-reply"></i>  Reply Message</button></div></div></div><div class="chat_content">';
                    if(msgdata.reply_chat_id){
                        msghtml+='<div class="reply_chat"><div class="replychat_text">';
                            if(msgdata.reply.msg_type=='img'){
                                msghtml+='<a href="'+msgdata.reply.chat_content+'" target="_blank"><img src="'+msgdata.reply.chat_content+'" class="chat_img"></a>';
                            }else if(msgdata.reply.msg_type=='text'){
                                msghtml+=decodeURI(msgdata.reply.chat_content);
                            }else{
                                msghtml+='<a href="'+msgdata.reply.chat_content+'" download="" style="color: #fff;font-size: 14px;"><i class="fa fa-file" aria-hidden="true" style="font-size: 50px;display: block;"></i>'+msgdata.reply.chat_content+'</a>';
                            }
                        msghtml+='</div><div class="chat_user">'+msgdata.reply.sender_user.first_name+',</div></div>';
                    }
                    msghtml+='<div class="msgtext_'+msg_id+'" style="float: left;">';
                    if(msgdata.msg_type=='img'){
                        msghtml+='<a href="'+msgdata.file_path+'/'+msgdata.chat_content+'" target="_blank"><img src="'+msgdata.file_path+'/'+msgdata.chat_content+'" class="chat_img"></a>';
                    }else if(msgdata.msg_type=='text'){
                        msghtml+=decodeURI(msgdata.chat_content);
                    }else{
                        msghtml+='<a href="'+msgdata.file_path+'/'+msgdata.chat_content+'" download="" style="color: #fff;font-size: 14px;"><i class="fa fa-file" aria-hidden="true" style="font-size: 50px;display: block;"></i>'+msgdata.chat_content+'</a>';
                    }
                    msghtml+='</div></div></div></li>';
                    
                    console.log("node chat content="+msgdata.chat_content);
                    console.log("msgdata.msg_id="+msgdata.msg_id);
                    if(msgdata.chat_id){
                        $(".msgtext_"+msgdata.msg_id).html(decodeURI(msgdata.chat_content));
                    }else{
                        $('#room_chats').append(msghtml);
                    }
                    $("#room_chats").stop().animate({ scrollTop: $("#room_chats")[0].scrollHeight}, 1000);
                }
            }
            function getChats(chaturl) {
                if(chaturl){
                    room_chats.html("");
                    $(".inner_loader").show();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url : chaturl,
                        dataType: 'json',
                        method:'GET',
                        //data:{room_id:room_id}
                    }).done(function (data) {
                        room_chats.html(data);
                        //room_chats.animate({ scrollTop: $(document).height() }, "fast");
                        room_chats.stop().animate({ scrollTop: room_chats[0].scrollHeight},"fast",function(){$(".inner_loader").hide();});
                        //if(screen_w<=767){
                            setChatLayout();
                        //}
                        window.history.pushState('page2', 'Title', chaturl);
                        
                    }).fail(function () {
                        window.location.href="";
                    });
                }
            }
            
        @endif
    </script>
    <script>
        document.getElementById(":1.container").style.display = "none"; //hides the frame
    </script>
    <script src="{{ asset('public/user-dash/js/chat.js') }}"></script>
</body>
</html>
