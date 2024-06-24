@extends('layouts.user')
 @section('title', 'Product Details')
@section('additional-css')

@endsection
@section('content')

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

<section class="mb-5">
    <div class="row pt-3">
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="box">
                <div class="row mx-1">
                    <div class="col-12 mb-0">
                        <figure class="view overlay rounded z-depth-1 main-img">
                            <a href="{{ asset('user-dash/k_store/cbr crop top.jpg') }}"
                                data-size="710x823">
                                <img src="{{ asset('user-dash/k_store/cbr crop top.jpg') }}"
                                class="img-fluid z-depth-1">
                            </a>
                        </figure>
                        <!--
                        <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                            data-size="710x823">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                            class="img-fluid z-depth-1">
                        </a>
                        </figure>
                        <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                            data-size="710x823">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                            class="img-fluid z-depth-1">
                        </a>
                        </figure>
                        <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                            data-size="710x823">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                        class="img-fluid z-depth-1">
                        </a>
                        </figure> -->
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <div class="view overlay rounded z-depth-1 gallery-item">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"class="img-fluid">
                                    <div class="mask rgba-white-slight"></div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="view overlay rounded z-depth-1 gallery-item">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                    class="img-fluid">
                                    <div class="mask rgba-white-slight"></div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="view overlay rounded z-depth-1 gallery-item">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                    class="img-fluid">
                                    <div class="mask rgba-white-slight"></div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="view overlay rounded z-depth-1 gallery-item">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                                        class="img-fluid">
                                <div class="mask rgba-white-slight"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h5>Crop Jogger</h5>
        <p class="mb-2 text-muted text-uppercase small">Shirts</p>
        <ul class="list-inline">
            <li class="list-inline-item"><i class="list-inline-item fas fa-star fa-sm text-warning"></i></li>
            <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
            <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
            <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
            <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
        </ul>

        <p><span class="mr-1"><strong>$12.99</strong></span></p>
        <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
        error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
        officia quis dolore quos sapiente tempore alias.</p>
        <div class="table-responsive">
            <table class="table table-sm table-borderless mb-0">
                <tbody>
                    <tr>
                        <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
                        <td>Shirt 5407X</td>
                    </tr>
                    <tr>
                        <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                        <td>Black</td>
                    </tr>
                    <tr>
                        <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                        <td>USA, Europe</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="table-responsive mb-2">
            <table class="table table-sm table-borderless">
                <tbody>
                    <tr>
                        <td class="pb-0">Select size
                            <div class="accordion border-x border-top rounded" id="accordionExample">
                                <div class="card shadow-none border-bottom">
                                    <div class="card-header py-0" id="headingTwo">
                                        <button class="btn btn-link text-decoration-none btn-block py-2 px-0 collapsed text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span><span class="font-weight-medium text-sans-serif text-900">See Size Guide</span></button>
                                    </div>
                                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body pt-2">
                                            <div class="pl-4">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">USA</th>
                                                            <th scope="col">UK</th>
                                                            <th scope="col">Eur</th>
                                                            <th scope="col">Jap</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>4</td>
                                                            <td>32</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>6</td>
                                                            <td>34</td>
                                                            <td>7</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td >8</td>
                                                            <td>36</td>
                                                            <td>9</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">8</th>
                                                            <td >10</td>
                                                            <td>38</td>
                                                            <td>11</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">10</th>
                                                            <td >12</td>
                                                            <td>40</td>
                                                            <td>13</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">12</th>
                                                            <td >14</td>
                                                            <td>42</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">14</th>
                                                            <td >16</td>
                                                            <td>42</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">16</th>
                                                            <td >18</td>
                                                            <td>44</td>
                                                            <td>17</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0">
                            <div class="def-number-input number-input safari_only mb-0">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                    class="minus"></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                    class="plus"></button>
                            </div>
                        </td>
                        <td>
                            <div class="mt-1">
                                <div class="form-check form-check-inline pl-0">
                                    <input type="radio" class="form-check-input" id="small" name="materialExampleRadios"
                                    checked>
                                    <label class="form-check-label small text-uppercase card-link-secondary"
                                    for="small">Small</label>
                                </div>
                                <div class="form-check form-check-inline pl-0">
                                    <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                                    <label class="form-check-label small text-uppercase card-link-secondary"
                                for="medium">Medium</label>
                                </div>
                                <div class="form-check form-check-inline pl-0">
                                    <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                                    <label class="form-check-label small text-uppercase card-link-secondary"
                                    for="large">Large</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-success btn-md mr-1 mb-2"><i
          class="fas fa-shopping-cart "></i> Add to cart</button>
    </div>
</div>

</section>
<!-- Classic tabs -->
<div class="classic-tabs border rounded px-4 pt-1">
    <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
        </li>
    </ul>
    <div class="tab-content" id="advancedTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <h5>Product Description</h5>
            <p class="small text-muted text-uppercase mb-2">Shirts</p>
            <ul class="list-inline">
                <li class="list-inline-item"><i class="list-inline-item fas fa-star fa-sm text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
            </ul>
            <h6>12.99 $</h6>
            <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
                error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
                officia quis dolore quos sapiente tempore alias.
            </p>
        </div>
        <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
            <h5>Additional Information</h5>
            <table class="table table-striped table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="row" class="w-150 dark-grey-text h6">Weight</th>
                        <td><em>0.3 kg</em></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="w-150 dark-grey-text h6">Dimensions</th>
                        <td><em>50 × 60 cm</em></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
            <h5><span>1</span> review for <span>Crop Jogger</span></h5>
            <div class="media mt-3 mb-4">
                <img class="d-flex mr-3 z-depth-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" width="62" alt="Generic placeholder image">
                <div class="media-body">
                    <div class="d-sm-flex justify-content-between">
                        <p class="mt-1 mb-2">
                            <strong>Marthasteward </strong><span>– </span><span>January 28, 2020</span>
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="list-inline-item fas fa-star fa-sm text-warning"></i></li>
                            <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                            <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                        </ul>
                    </div>
                    <p class="mb-0">Nice one, love it!</p>
                </div>
            </div>
            <hr>
            <h5 class="mt-4">Add a review</h5>
            <div class="my-3">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="list-inline-item fas fa-star fa-sm text-warning"></i></li>
                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                </ul>
            </div>
        <div>
        <!-- Your review -->
        <div class="md-form md-outline">
            <textarea id="form76" class="md-textarea form-control pr-6" rows="4"></textarea>
            <label for="form76">Your review</label>
        </div>
        
        <div class="text-right pb-2">
            <button type="button" class="btn btn-success">Add a review</button>
        </div>
    </div>
</div>

@endsection
@section('additional-js')   
@endsection