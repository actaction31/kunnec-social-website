@extends('layouts.user')
 @section('title', 'Kunnec Store')
@section('additional-css')
@endsection
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
        <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('images/K_Logo6.png') }}" height="40" width="60"/> Store</h5>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                           <a href="{{ url('k_store/men') }}" style="font-size:20px; color: #ffffff;"> Men
                                <i  data-toggle="tooltip" data-placement="bottom" style="color: #FFFFFF;"></i> 
                            </a> |
                            &nbsp;
                            <a href="{{ url('k_store/women') }}" style="font-size:20px; color: #ffffff;"> Women
                                <i  data-toggle="tooltip" data-placement="bottom" style="color: #FFFFFF;"></i> 
                            </a> |
                            &nbsp;
                            <a href="{{ url('k_store/boy') }}" style="font-size:20px; color: #ffffff;"> Boys
                                <i  data-toggle="tooltip" data-placement="bottom" style="color: #FFFFFF;"></i> 
                            </a> |
                            &nbsp;
                            <a href="{{ url('k_store/girl') }}" style="font-size:20px; color: #ffffff;"> Girls
                                <i  data-toggle="tooltip" data-placement="bottom" style="color: #FFFFFF;"></i> 
                            </a> |
                            &nbsp;
                            <a href="{{ url('k_store/accessories') }}" style="font-size:20px; color: #ffffff;"> Accessories
                                <i  data-toggle="tooltip" data-placement="bottom" style="color: #FFFFFF;"></i> 
                            </a> |
                            &nbsp;
                            <a href="{{ url('notifications/notifications') }}" style="font-size:20px; color: #ffffff;">
                            <i class="fas fa-heart" data-toggle="tooltip" data-placement="bottom" title="Wish List" style="color: #FFFFFF;"></i> 
                            <span1 class="badge badge-danger"> 15</span1></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="{{ url('messages/messages') }}" style="font-size:20px; color: #ffffff;"><i class="fas fa-shopping-cart" data-toggle="tooltip" data-placement="bottom" title="Cart"></i> 
                            <span1 class="badge badge-danger"> 24</span1></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="card-body fs--1">
        <div class="row">
            <div class="col-sm-6 p-2 ">
            <img src="{{ asset('images/main_fashio.jpg') }}" height="520" width="520"/>
            </div>
            <div class="col-sm-6 ">
                 <div class="row" > 
                    <div class="col p-2">
                        <img src="{{ asset('images/men-fashion.jpg') }}" height="250" width="245"/>
                    </div>
                    <div class="col p-2">
                        <a href="{{ url('k_store/women') }}" ><img src="{{ asset('images/women-fashion.jpg') }}" height="250" width="245"/></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-2">
                        <img src="{{ asset('images/boy-fashion.jpg') }}" height="250" width="245"/>
                    </div>
                    <div class="col p-2">
                        <img src="{{ asset('images/girl-fashion.jpg') }}" height="250" width="245"/>
                    </div>
                </div>
            </div>
        </div>

        <hr class="style1">

        <div class="card-body">
            <h5 class="fs-md-2 text-success mb-0 d-flex align-items-center mb-3"> Top Purchased</h5>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="border rounded h-100 d-flex flex-column justify-content-between pb-3">
                        <div class="overflow-hidden">
                            <div class="position-relative rounded-top overflow-hidden"><a class="d-block" href="../e-commerce/product-details.html"><img class="img-fluid rounded-top" src="{{ asset('images/products/4.jpg') }}" alt="" /></a>
                            </div>
                            <div class="p-3">
                                <h5 class="fs-0">
                                    <a class="text-dark" href="../e-commerce/product-details.html">Kunnec Baseball Shirt</a>
                                </h5>
                                <p class="fs--1 mb-3"><a class="text-500" href="#!">Mens</a></p>
                                <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $25.00</h5>
                                <p class="fs--1 mb-1">Shipping Cost: <strong>$10</strong></p>
                                <p class="fs--1 mb-1">Stock:  <span class="badge badge-pill badge-success z-index-2">Available</span></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3">
                            <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="ml-1">(8)</span>
                            </div>
                            <div><a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a><a class="btn btn-sm btn-falcon-default" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Cart"><span class="fas fa-cart-plus"></span></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="border rounded h-100 d-flex flex-column justify-content-between pb-3">
                            <div class="overflow-hidden">
                                <div class="position-relative rounded-top overflow-hidden"><a class="d-block" href="../e-commerce/product-details.html"><img class="img-fluid rounded-top" src="{{ asset('images/products/1-2.jpg') }}" alt="" /></a>
                                </div>
                                <div class="p-3">
                                    <h5 class="fs-0"><a class="text-dark" href="../e-commerce/product-details.html">Kunnec Sport Shirt</a></h5>
                                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Womens</a></p>
                                    <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $35
                                    </h5>
                                    <p class="fs--1 mb-1">Shipping Cost: <strong>$10</strong></p>
                                    <p class="fs--1 mb-1">Stock: <span class="badge badge-pill badge-success z-index-2">Available</span>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between px-3">
                                <div><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="fa fa-star text-300"></span><span class="fa fa-star text-300"></span><span class="ml-1">(14)</span>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a><a class="btn btn-sm btn-falcon-default" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Cart"><span class="fas fa-cart-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="border rounded h-100 d-flex flex-column justify-content-between pb-3">
                            <div class="overflow-hidden">
                                <div class="position-relative rounded-top overflow-hidden"><a class="d-block" href="../e-commerce/product-details.html"><img class="img-fluid rounded-top" src="{{ asset('images/products/5.jpg') }}" alt="" /></a>
                                </div>
                                <div class="p-3">
                                    <h5 class="fs-0"><a class="text-dark" href="../e-commerce/product-details.html">Kunnec Sweatshirt</a></h5>
                                    <p class="fs--1 mb-3"><a class="text-500" href="#!">Womens</a></p>
                                    <h5 class="fs-md-2 text-warning mb-0 d-flex align-items-center mb-3"> $35
                                    </h5>
                                    <p class="fs--1 mb-1">Shipping Cost: <strong>$10</strong></p>
                                    <p class="fs--1 mb-1">Stock:  <span class="badge badge-pill badge-danger z-index-2">Out of Stock</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between px-3">
                                <div>
                                    <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="ml-1">(13)</span>
                                </div>
                                <div>
                                    <a class="btn btn-sm btn-falcon-default mr-2" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><span class="far fa-heart"></span></a><a class="btn btn-sm btn-falcon-default" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Cart"><span class="fas fa-cart-plus"></span>
                                    </a>
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
@endsection