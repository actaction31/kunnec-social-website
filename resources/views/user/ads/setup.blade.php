@extends('layouts.user')
 @section('title', 'K-Ads Setup')
 @section('css/account')
 <link href="{{ asset('public/user-dash/css/account.css') }}" rel="stylesheet"></link>
 <style>
 
 #upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(0, 153, 0, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #009900;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.v_image-area {
    border: 2px dashed rgba(0, 153, 0, 0.7);
    padding: 1rem;
    position: relative;
}

.v_image-area::before {
    content: 'Uploaded video result';
    color: #009900;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.r_image-area {
    border: 2px dashed rgba(0, 153, 0, 0.7);
    padding: 1rem;
    position: relative;
}

.r_image-area::before {
    content: '';
    color: #009900;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}
 
 </style>
@endsection
@section('content')
<div class="card">
    <div id="user-profile-2" class="user-profile">
        <div class="tabbable">
            <!-- Start of tab buttons -->
            <ul class="nav nav-tabs padding-18">
                <li class="active">
                    <a data-toggle="tab" href="#billboard">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Upload Billboard Ad
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#banner">
                        <i class="green ace-icon fa fa-lock bigger-120"></i>
                       Upload Banner Ad
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#video">
                        <i class="green ace-icon fa fa-users bigger-120"></i>
                        Upload Video Ad
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#radio">
                        <i class="green ace-icon fa fa-history bigger-120"></i>
                        Upload Radio Ad
                    </a>
                </li>
            </ul>
            <!-- End of Tab Buttons -->
            
            <div class="tab-content no-border padding-24">
                <!-- Start of  Billboard Tab -->
                <div id="billboard" class="tab-pane in active">
                    <div class="card-body">
                        <h5 class="card-title">Billboard Ad will appear on the top of the Kunnec Vid main page.</h5>
                        <hr class="style12" color="#009900">
                        <div class="row">
                            
                            <div class="col-sm">
                                 <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                                <div class="image-area mt-4">
                                    <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="text-muted">Image size must be: 1050px X 400px</h6> 
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-success m-0 rounded-pill px-4"> 
                                            <i class="fas fa-cloud-upload-alt mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3 p-3 bg-white rounded shadow-sm">
                            <h6 class="border-bottom border-gray pb-2 mb-0">Billboard Ad list ( can upload 5 options) select the main Ad</h6>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>

                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>

                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <!-- /#End of Billboard Tab -->

                <!-- Start of  Banner Tab -->
                <div id="banner" class="tab-pane">
                    <div class="card-body">
                        <h5 class="card-title">Banner Ad will appear only during a Kunnec Vid's members video who is in the Share Program.</h5>
                        <hr class="style12" color="#009900">
                        <div class="row">
                            
                            <div class="col-sm">
                                 <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                                <div class="image-area mt-4">
                                    <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="text-muted">Image size must be: 1050px X 400px</h6> 
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-success m-0 rounded-pill px-4"> 
                                            <i class="fas fa-cloud-upload-alt mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3 p-3 bg-white rounded shadow-sm">
                            <h6 class="border-bottom border-gray pb-2 mb-0">Banner Ad list ( can upload 5 options) select the main Ad</h6>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>

                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>

                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <!-- /#End of Banner Tab -->

                <!-- /#Start of Video Tab -->
                <div id="video" class="tab-pane">
                    <div class="card-body">
                        <h5 class="card-title">Video Ad will appear only during a Kunnec Vid's members video who is in the Share Program.</h5>
                        <hr class="style12" color="#009900">
                        <div class="row">
                            
                            <div class="col-sm">
                                 <p class="font-italic text-white text-center">The video uploaded will be rendered inside the box below.</p>
                                <div class="v_image-area mt-4">
                                    <video id="v_imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" controls>
                                   </video>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="text-muted">Video size must be: 1050px X 400px</h6> 
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-success m-0 rounded-pill px-4"> 
                                            <i class="fas fa-cloud-upload-alt mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3 p-3 bg-white rounded shadow-sm">
                            <h6 class="border-bottom border-gray pb-2 mb-0">Video Ad list ( can upload 5 options) select the main Ad</h6>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>

                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>

                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <!-- /#End of Video Tab -->

                <!-- /#Start of Radio Tab -->
                <div id="radio" class="tab-pane">
                <div class="card-body">
                        <h5 class="card-title">Radio Ad will appear only during a Kunnec Radio's selected time slots .</h5>
                        <hr class="style12" color="#009900">
                        <div class="row">
                            
                            <div class="col-sm">
                                 <p class="font-italic text-white text-center">The radio ad uploaded will be rendered inside the box below.</p>
                                <div class="r_image-area mt-4">
                                   
                                   <audio id="r_imageResult" controls src="#">
                                         <code>audio</code> element.
                                    </audio>
                                </div>
                            </div>
                            <div class="col-sm">
                                <h6 class="text-muted">Radio size must be: 1050px X 400px</h6> 
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-success m-0 rounded-pill px-4"> 
                                            <i class="fas fa-cloud-upload-alt mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="my-3 p-3 bg-white rounded shadow-sm">
                            <h6 class="border-bottom border-gray pb-2 mb-0">Radio Ad list ( can upload 5 options) select the main Ad</h6>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/18.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>

                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/20.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>

                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
                            </div>
                            <div class="media text-muted pt-3">
                                <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/22.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title></img>
                                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <strong class="text-gray-dark">Date uploaded</strong>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label mr-2" for="exampleCheck1">Main Ad |</label>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                    <span class="d-block">Name of File</span>
                                </div>
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
<script>

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED Video NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}

</script>

<script>

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#r_imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED Radio Ad NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}

</script>

@endsection