@extends('layouts.user')
 @section('title', 'Trax')
@section('additional-css')

@endsection
@section('content')

<div class="row">
    <div class="col">
        <iframe style="width:100%; height:1000px; border: none;" id="AudioMass" src="../trax/index.html"></iframe>
    </div>
</div>

@endsection
@section('additional-js')
@endsection