@extends('layouts.user')
@section('title', 'Kunnec To You')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/masonry.css') }}" rel="stylesheet"></link>
@endsection
@section('content')

@include('user.k_you.profileFilters')   
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <section>
        <div class="container">
            <div class="row no-gutters">
                <div class="filtering col-sm-12 text-center">
                    <span data-filter="*" class="active">All</span>
                    @if($cats)
                        @foreach($cats as $cat)
                            @if($cat->is_show=='1')
                                <span data-filter=".{{str_replace(' ','_',$cat->name)}}" class="">{{$cat->name}}</span>    
                            @endif
                        @endforeach
                    @endif
                    {{-- <span data-filter=".singer" class="">Singer</span>
                    <span data-filter=".rapper" class="">Rapper</span>
                    <span data-filter=".producer" class="">Producer</span>
                    <span data-filter=".engineer" class="">Engineer</span> --}}
                </div>
                <div class="col-12 text-center w-100">
                    <div class="grid form-row gallery text-center">
                        @if($profiles->total()>0)
                            @foreach($profiles as $profile)
                                <div class="col-lg-4 col-sm-6 mb-2 grid-item {{str_replace(' ','_',$profile->job_category->name)}}">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-image">
                                            <img src="{{$profile->user->image}}" alt="..." />
                                        </div>
                                        <a href="{{ route('k2u.profile',['user_id'=>$profile->user_id]) }}">
                                            <div class="portfolio-overlay">
                                                <div class="portfolio-content">
                                                    <h4> {{$profile->user->first_name}}</h4>
                                                    <p>[{{$profile->job_category->name}}]</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach 
                        @else
                            <div class="media text-muted pt-3 text-center">
                                No Record Found
                            </div>
                        @endif 
                    </div>
                    <div class="pagi_row">  
                        <div class="page_counts"> 
                            Results: {{ $profiles->firstItem() }}
                            - {{ $profiles->lastItem() }}
                            of 
                            {{ $profiles->total() }}
                        </div>
                        <div class="vehi_pagination"> 
                            {{ $profiles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
@section('additional-js')
<script type="text/javascript" src="{{ asset('public/user-dash/js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/user-dash/js/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/user-dash/js/k2u.masonry.js') }}"></script>

@endsection