@extends('layouts.user')
@section('title', 'Page Not Found')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card m-0">
                <div class="row no-gutters  justify-content-center">
                    <div class="col-lg-6 text-center" style="margin: 20%;">
                        <h3>This page doesn't exist</h3>
                        <p>Visit our <a href="{{route('landing')}}">home page</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-js')
@endsection