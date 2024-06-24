@extends('layouts.user')
 @section('title', 'Shop Notifications')
@section('css/notification')
<link href="{{ asset('public/user-dash/css/notification.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
  <!-- Page header start -->
  <div class="card p-2" style=" background-color: #009900;">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <h5 class="title" style="color:#ffffff;"><i class="far fa-bell"></i> Kunnec Shop</h5>
        <div class="row">
            <div class="col">
            <div class="d-inline pb-4">
                    <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:16px;">
                    <i class="far fa-bell" style="color: #FA8D0A"></i>  My Kunnec Notifications
                    &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 15</span1></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('notifications/notifications') }}" style="font-size:12px;">
                                <i class="fas fa-wallet"></i> Kunnec Account &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('notifications/notifications_social') }}" style="font-size:12px;">
                                <i class="fas fa-wallet"></i> Kunnec Social &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('notifications/notifications_me') }}" style="font-size:12px;">
                                <i class="fas fa-user"></i> Kunnec to Me &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button"> 
                            <a href="{{ url('notifications/notifications_pod') }}" style="font-size:12px;">
                                <i class="fas fa-podcast"></i> Kunnec Pod &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button"> 
                            <a href="{{ url('notifications/notifications_show') }}" style="font-size:12px;">
                                <i class="fas fa-film"></i> Kunnec Show &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('notifications/notifications_course') }}" style="font-size:12px;"> 
                                <i class="fas fa-graduation-cap "></i> Kunnec Course &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button"> 
                            <a href="{{ url('notifications/notifications_vid') }}" style="font-size:12px;"> 
                                <i class="fas fa-video"></i> Kunnec Vid &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button">
                            <a href="{{ url('notifications/notifications_music') }}" style="font-size:12px;"> 
                                <i class="fas fa-music"></i> Kunnec Music &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                        <button class="dropdown-item" type="button"> 
                            <a href="{{ url('notifications/notifications_books') }}" style="font-size:12px;"> 
                                <i class="fas fa-book"></i> Kunnec Books &nbsp;&nbsp;&nbsp<span1 class="badge badge-danger"> 2</span1>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">K-Ads</h6>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>     
</div>

<!-- Posts only last 30 days , then they delete -->
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Kunnec Shop Posts</h6>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Full Name</strong><span class="font-italic">23 mins ago.</p></span>
            </div>
            <span class="d-block"> You may like :</span>
            <div class="row">
                <div class="col-sm-2 text-center">
                    Laptop
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/1.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $24.95</p>
                    <hr>
                </div>
                <div class="col-sm-2 text-center">
                    Apple Desktop
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/2.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $234.95</p>
                    <hr>
                </div>
                <div class="col-sm-2 text-center">
                    Google Tablet
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/4.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $123.95</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Full Name</strong><span class="font-italic">6 days ago.</p></span>
            </div>
            <span class="d-block"> You may like :</span>
            <div class="row">
                <div class="col-sm-2 text-center">
                    Laptop
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/1.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $24.95</p>
                    <hr>
                </div>
                
                <div class="col-sm-2 text-center">
                    Google Tablet
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/4.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $123.95</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Full Name</strong><span class="font-italic">17 hours ago.</p></span>
            </div>
            <span class="d-block"> You may like :</span>
            <div class="row">
                <div class="col-sm-2 text-center">
                    Laptop
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/1.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $24.95</p>
                    <hr>
                </div>
                <div class="col-sm-2 text-center">
                    Apple Desktop
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/2.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $234.95</p>
                    <hr>
                </div>
                <div class="col-sm-2 text-center">
                    Google Tablet
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/4.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $123.95</p>
                    <hr>
                </div>
                <div class="col-sm-2 text-center">
                   Watch
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/5.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $24.95</p>
                    <hr>
                </div>
                <div class="col-sm-2 text-center">
                    G-mouse
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/6.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $234.95</p>
                    <hr>
                </div>
                <div class="col-sm-2 text-center">
                    Nikon Camera
                    <p>
                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/assets/img/products/7.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                    </p>
                    <p class="mb-0"><strong class="text-gray-dark">Price:</strong> $123.95</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
  
</div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">K-Ads</h6>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>
    <div class="media text-muted pt-3">
        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
    </div>     
</div>

@endsection
@section('additional-js')
@endsection