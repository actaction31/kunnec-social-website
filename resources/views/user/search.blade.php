@extends('layouts.user')
@section('title', 'Social Search')
@section('additional-css')
@endsection
@section('content')

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Search Results</h6>
    @include('user.searchHtml')
</div>
@endsection
@section('additional-js')
@endsection