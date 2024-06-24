@extends('layouts.app')
@section('title', 'Page Expired')
@section('additional-css')
@endsection
@section('content')
<div class="main-wrapper">
    <div class="container">
        <div style="background-color: #fff;padding: 20px;text-align: center;">
        The page has expired due to inactivity.
        <br /><br />
        <a href="{{ url()->previous() }}" style="text-decoration: none;color: #fff;margin: auto;" class="btn btn-success">Click Here To Refresh</a>
        </div>
    </div>
</div>
@endsection