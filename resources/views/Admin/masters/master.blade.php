<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!--  
        Document Title
        =============================================
        -->
        <title>Kunnec Admin | @yield('title') </title>
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <link href="{{ asset('public/assets/images/favicon.png')}}" type="image/x-icon" rel="icon">
        <!--  
        Stylesheets
        ============================================
        -->
        <!-- Default stylesheets-->
        <link href="{{ asset('public/assets/admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('public/assets/admin_assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('public/assets/admin_assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <link href="{{ asset('public/assets/admin_assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('public/assets/admin_assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
         <link href="{{ asset('public/assets/admin_assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <!-- bootstrap-datetimepicker -->

        <link href="{{ asset('public/assets/admin_assets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
        <link href="{{ asset('public/assets/admin_assets/css/custom.min.css')}}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('public/assets/admin_assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

        <link href="{{ asset('public/assets/admin_assets/css/view_style.css')}}" rel="stylesheet">
        <link href="{{ asset('public/assets/admin_assets/vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet" type="text/css" />
        @stack('page-scripts')
    </head>
    <body class="nav-md">
        <div class="loader_html">
            <div class="ajax-loader">
                <div class="loading">Loading...</div>
            </div>
        </div>
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                  <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="" class="site_title text-center"><img style="max-width: 100%;max-height: 100%;" src="{{ asset('public/images/K_Logo6.png')}}" alt=""/><span></span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    {{--
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('public/assets/admin_assets/images/img.jpg') }}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ Auth::guard('admin')->user()->name }}</h2>
                        </div>
                    </div>
                    --}}
                    <!-- /menu profile quick info -->
                    <br/>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <!-- <h3>General</h3> -->
                            <ul class="nav side-menu">                                
                                <li><a href="{{ route('admin.users') }}"><i class="fa fa-users"></i> Users</a></li>
                                <li><a href="{{ route('admin.jobCats') }}"><i class="fa fa-list-alt "></i> Job Category</a></li>
                                <!-- <li><a href="{{ route('admin.jobSubCats') }}"><i class="fa fa-list-alt"></i> Job Sub Category</a></li> -->
                                <li><a href="{{ route('admin.jobs') }}"><i class="fa fa-tasks"></i> Jobs</a></li>
                                <li><a href="{{ route('admin.events') }}"><i class="fa fa-calendar"></i> Events</a></li>
                                <li><a href="{{ route('admin.posts') }}"><i class="fa fa-calendar"></i> Posts</a></li>           
                                <li><a href="{{ route('admin.recordCats') }}"><i class="fa fa-list-alt"></i>Screen Category</a></li>           
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                      <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin.logout') }}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                      </a>
                    </div>
                    <!-- /menu footer buttons -->
                  </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    @if(Auth::guard('admin')->check())
                                        {{ Auth::guard('admin')->user()->name }}
                                    @endif
                                    <span class=" fa fa-angle-down"></span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <!-- <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                      <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                      </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li> -->
                                    <li><a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                  </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
	            <!-- page content -->
                <div class="right_col" role="main">
                    <div class="page-title">
                        <div class="title_left">
                            <h3> @yield('page_title') </h3>
                        </div>
                    </div>
                    @yield('content')
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                         <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>  
        <!-- jQuery -->
        <script src="{{ asset('public/assets/admin_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('public/assets/admin_assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
        
        <script src="{{ asset('public/assets/admin_assets/vendors/moment/min/moment.min.js')}}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/switchery/dist/switchery.min.js')}}"></script>
       
        <!-- Custom Theme Scripts -->
        <script src="{{ asset('public/assets/admin_assets/js/custom.min.js')}}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('public/assets/admin_assets/vendors/ckeditor/js/sample.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/assets/admin_assets/vendors/pnotify/dist/pnotify.js')}}"></script>
        <!-- iCheck -->
        <script type="text/javascript" src="{{ asset('public/assets/admin_assets/vendors/iCheck/icheck.min.js')}}"></script>
        <script type="text/javascript" language="javascript">
            
            $(function(){
                if($("#editor").length){
                    CKEDITOR.replace('editor',{});
                }if($("#short_desc").length){
                    CKEDITOR.replace('short_desc',{});
                }if($("#protection").length){
                    CKEDITOR.replace('protection',{});
                }if($("#about").length){
                    CKEDITOR.replace('about',{});
                }if($("#challenge").length){
                    CKEDITOR.replace('challenge',{});
                }if($("#impact").length){
                    CKEDITOR.replace('impact',{});
                }if($("#solutions").length){
                    CKEDITOR.replace('solutions',{});
                }
            });
            $(document).ready(function(){
                $('.ui-pnotify').remove();
                $(document).on("click",'.deleteFile',function(){
                    $(this).parent().html("");
                });
            });
        </script>
        @stack('footer-scripts') 
    </body>
</html>