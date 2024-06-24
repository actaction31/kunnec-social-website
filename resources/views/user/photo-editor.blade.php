@extends('layouts.user')
 @section('title', 'Photo Editor')
@section('additional-css')
@endsection
@section('content')

<div class="row">
    <div class="col text-center" style="color:#009900;">
        Use the top toolbar in the Photo Editor to make adjustments.  
	</div>
</div>
<div class="row">
    <div class="col">
        <iframe style="width:100%; height:1000px; border: none;" id="miniPaint" src="{{ asset('public/paint/index.html')}}"></iframe>
    </div>
</div>

@endsection
@section('additional-js')
@endsection