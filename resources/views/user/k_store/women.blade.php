@extends('layouts.user')
 @section('title', 'Women')
 @section('css/store')

<link href="{{ asset('user-dash/css/store.css') }}" rel="stylesheet"></link>

@endsection
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
        <h5 class="mb-0" style="color:#FFFFFF;"><img src="{{ asset('images/K_Logo6.png') }}" height="40" width="60"/> Women</h5>
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
        <h5 class="h5">Tops </h5>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="{{ url('k_store/details') }}">
                            <img class="pic-1" src="{{ asset('user-dash/k_store/spaghetti top.jpg') }}">
                        </a>
                    </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{ url('k_store/details') }}">Spaghetti Strap</a></h3>
                    <div class="price">$20.00
                    </div>
                </div>
                <ul class="social">
                    <li><a href="{{ url('k_store/details') }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="{{ url('k_store/details') }}">
                        <img class="pic-1" src="{{ asset('user-dash/k_store/vneck.jpeg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{ url('k_store/details') }}">V-Neck</a></h3>
                    <div class="price">$8.00
                        <span>$12.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="{{ url('k_store/details') }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="{{ url('k_store/details') }}">
                        <img class="pic-1" src="{{ asset('user-dash/k_store/black tshirt.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{ url('k_store/details') }}">Regular Top</a></h3>
                    <div class="price">$11.00
                        <span>$14.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="{{ url('k_store/details') }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="{{ url('k_store/details') }}">
                        <img class="pic-1" src="{{ asset('user-dash/k_store/long_sleeve.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{ url('k_store/details') }}">Long Sleeve</a></h3>
                    <div class="price">$11.00
                        <span>$14.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="{{ url('k_store/details') }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <hr class="style12">

    <div class="card-body fs--1">
        <h5 class="h5">Sets </h5>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="{{ url('k_store/details') }}">
                             <img class="pic-1" src="{{ asset('user-dash/k_store/cbr crop top.jpg') }}">
                        </a>
                    </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{ url('k_store/details') }}">Crop Jog</a></h3>
                    <div class="price">$20.00
                    </div>
                </div>
                <ul class="social">
                    <li><a href="{{ url('k_store/details') }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="{{ url('k_store/details') }}">
                        <img class="pic-1" src="{{ asset('user-dash/k_store/light purple -wholesale.png') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{ url('k_store/details') }}">Jogger</a></h3>
                    <div class="price">$8.00
                        <span>$12.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="{{ url('k_store/details') }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="{{ url('k_store/details') }}">
                        <img class="pic-1" src="{{ asset('user-dash/k_store/chicc jogger.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{ url('k_store/details') }}">Zip Jog</a></h3>
                    <div class="price">$11.00
                        <span>$14.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="{{ url('k_store/details') }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="{{ url('k_store/details') }}">
                        <img class="pic-1" src="{{ asset('user-dash/k_store/casual.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="{{ url('k_store/details') }}">Casual Pocket </a></h3>
                    <div class="price">$11.00
                        <span>$14.00</span>
                    </div>
                </div>
                <ul class="social">
                    <li><a href="{{ url('k_store/details') }}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
  


@endsection
@section('additional-js')

@endsection