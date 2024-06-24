@extends('layouts.user')
@section('title', 'Kunnec Job List')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
@include('user.k_me.jobFilters')
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h4 class="border-bottom border-gray pb-2 mb-0">@if($job_cat) {{$job_cat->name}} @endif @if($job_subcat) {{$job_subcat->name}} @endif</h4>
    @if($allJobs->total()>0 && $allJobs->total()>$allJobs->lastItem())
        <div class="pagi_row text-center">  
            <div class="page_counts"> 
                Results: {{ $allJobs->firstItem() }}
                - {{ $allJobs->lastItem() }}
                of 
                {{ $allJobs->total() }}
            </div>
            <div class="vehi_pagination" style="display: inline-block;"> 
                {{ $allJobs->links() }}
            </div>
        </div>
        <hr class="style12">
    @endif
    @if($allJobs->total()>0)
        @foreach($jobByDates as $jobDate=>$jobs)
            <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray">
                <h6 class="border-bottom border-gray pb-2 mb-0"> {{ $jobDate }}</h6>
                @if($jobs)
                @foreach($jobs as $job)
                    <div class="row alert alert-success" alert-dismissible fade show role="alert" style="margin-left:0px;margin-right:0px;">
                        <div class="col-10" style="padding:0px;">
                            <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{$job->user->image}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                            {{$job->title}}
                        </div>
                        <div class="col" style="padding:0px;text-align: right;">
                            <a href="{{ route('k2me.jobDetails',['job_id'=>$job->id]) }}" class="btn1 btn-success" style="color: #ffffff; font-size: 12px;">View Post</a>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        @endforeach
    @else
        No Job Found!
    @endif
    @if($allJobs->total()>0 && $allJobs->total()>$allJobs->lastItem())
        <div class="pagi_row text-center">  
            <div class="page_counts"> 
                Results: {{ $allJobs->firstItem() }}
                - {{ $allJobs->lastItem() }}
                of 
                {{ $allJobs->total() }}
            </div>
            <div class="vehi_pagination" style="display: inline-block;"> 
                {{ $allJobs->links() }}
            </div>
        </div>
        <hr class="style12">
    @endif
</div>

@endsection
@section('additional-js')
@endsection