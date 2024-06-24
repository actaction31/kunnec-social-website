@extends('layouts.user')
@section('title', 'Kunnec Jobs')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')

@include('user.k_me.jobFilters')    
<div class="card-body">
    <div class="row">
        <div class="col-sm">
            <header class="section-header text-left">
                <h2>How it works</h2>
            </header>
            <p class="lead"> Search through posted opportunities by Kunnec's in our community and kunnec to them. Use the above search filter to get specific kunnecs or use the categories below .</p>
        </div>
        <div class="col-sm">
            <div class="float-right top-0 end-0">
                <img class="center-block" src="{{ asset('public/user-dash/k_2me/images/magnify.jpg')}}" width="160" height="160" style="    object-fit: contain;" alt="how it works">
            </div>
         </div>
    </div>
    <hr class="style12" style="color: #009900;">
    <div class="row justify-content-md-center">
        @if($cats)
            @foreach($cats as $cat)
                <div class="col-6 col-sm-4  col-md-3 col-lg-3 col-xl-2 catBlock">
                    <a href="{{ route('k2me.jobs',['cat_id'=>$cat->id]) }}" class="cat_link">
                        <button type="button" class="btn2 btn-kunnec catBtn"><i class="{{$cat->icon}}"></i> {{$cat->name}}</button>
                    </a>
                </div>
                {{--
                @if($cat->subcats)
                    @foreach($cat->subcats as $subcat)
                        <div class="col-6 col-sm-4  col-md-3 col-lg-3 col-xl-2 catBlock">
                            <a href="{{ route('k2me.jobs',['cat_id'=>$cat->id,'subcat_id'=>$subcat->id]) }}" class="cat_link">
                                <button type="button" class="btn2 btn-kunnec catBtn"><i class="{{$subcat->icon}}"></i> {{$subcat->name}}</button>
                            </a>
                        </div>
                    @endforeach
                @endif --}}
            @endforeach
        @endif
    </div>
    {{-- 
    <div class="row justify-content-md-center">
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-calculator"></i> Accounting
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-address-book"></i> Admin
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-pencil-ruler"></i> Art
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-pencil-ruler"></i> Architecture
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-beer"></i> Beverage
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-business-time"></i> Business
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-concierge-bell"></i> Customer
            </button>
        </a>
    </div>
    <div class="row justify-content-md-center">
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-drafting-compass"></i> Design
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-user-graduate"></i> Education
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-ruler-combined"></i> Engineering
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-piggy-bank"></i> Finance
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-utensils"></i> Food
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-university"></i> Government
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-stethoscope"></i> Health
            </button>
        </a>
    </div>
    <div class="row justify-content-md-center">
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-dove"></i> HR
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-hotel"></i> Hotel
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-user-graduate"></i> Labor
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-ruler-combined"></i> Legal
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-hammer"></i> Manufacturing
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-highlighter"></i> Marketing
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-photo-video"></i> Media
            </button>
        </a>
    </div>
    <div class="row justify-content-md-center">
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-ambulance"></i> Medical
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-university"></i> Mgmt
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-headphones"></i> Music
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-heart"></i> Non-Profit
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-clipboard"></i> Office
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-wind"></i> Promotions
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-keyboard"></i> Programming
            </button>
        </a>
        
    </div>
    <div class="row justify-content-md-center">
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-city"></i> Real Estate
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-tags"></i> Retail
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-cash-register"></i> Sales
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-cut"></i> Salon | Barber
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-spa"></i> Spas
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-share-alt"></i> Sys Network
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-heartbeat"></i> Tech Support
            </button>
        </a>
    </div>
    <div class="row justify-content-md-center">
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-car"></i> Transportation
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-tv"></i> TV
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-film"></i> Film
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-video"></i> Video
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-broadcast-tower"></i> Web
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-pencil-alt"></i> Writing
            </button>
        </a>
        <a href="{{ url('k_me/k2me_list') }}">
            <button type="button" class="btn2 btn-kunnec"><i class="fas fa-bicycle"></i> Fitness
            </button>
        </a>
    </div> 
    --}}
</div>


@endsection
@section('additional-js')
@endsection