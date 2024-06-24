@extends('layouts.user')
@section('title', 'Kunnec Jobs List')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')

@include('user.k_me.jobFilters')
<div class="my-3 p-3 bg-white rounded shadow-sm">
    @if(session()->has('success'))
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="alert alert-success">
                    <strong>{{ session('success') }}</strong>
                </div>
            </div>
        </div>
    @endif
    <h4 class="border-bottom border-gray pb-2 mb-0">My Uploaded Posts</h4>
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
            <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray" >
                <h6 class="border-bottom border-gray pb-2 mb-0"> {{ $jobDate }}</h6>
                <!-- Posting's Today section -->
                @if($jobs)
                    @foreach($jobs as $job)
                    <div class="alert alert-success row" alert-dismissible fade show role="alert" id="delete_{{$job->id}}" style="margin-left:0px;margin-right:0px;">
                        <div class="col-12 col-sm-5 col-md-7 col-lg-7 col-xl-8" style="padding:0px;">
                            <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{$job->user->image}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                            {{$job->title}} 
                        </div>
                        <div class="col-12 col-sm-7 col-md-5 col-lg-5 col-xl-4" style="padding:0px;text-align: right;">
                            @if(!$job->is_expired) Post ends in {{$job->job_days }} days. @else Post has been expired! @endif <br>
                            <a href="{{ route('k2me.jobApplicants',['job_id'=>$job->id]) }}" class="btn1 btn-primary" style="color: #ffffff; font-size: 12px;">Applicants <span class="badge"  style="color: #ffffff;">{{$job->jobapplicants_count}}</span></a>
                            <a href="{{ route('k2me.jobDetails',['job_id'=>$job->id]) }}" class="btn1 btn-kunnec" style="color: #ffffff; font-size: 12px;">View Post</a>
                            <a href="#" class="deleteItem btn1 btn-danger" data-id="{{$job->id}}" data-url="{{ route('k2me.delete') }}" style="color: #ffffff; font-size: 12px;">Delete</a>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        @endforeach
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
    @endif
</div>

@endsection
@section('additional-js')
<script type="text/javascript">
   
</script>
@endsection