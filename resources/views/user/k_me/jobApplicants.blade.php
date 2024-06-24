@extends('layouts.user')
@section('title', 'Kunnec Job Applicants')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
@endsection
@section('content')

@include('user.k_me.jobFilters')
<div class="card">   
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h4 class="border-bottom border-gray pb-2 mb-0 t-t-c">@if($job) {{$job->title}} - Applicants @else My Applicants @endif</h4>
        @if($jobApplicants->total()>0 && $jobApplicants->total()>$jobApplicants->lastItem())
            <div class="pagi_row text-center">  
                <div class="page_counts"> 
                    Results: {{ $jobApplicants->firstItem() }}
                    - {{ $jobApplicants->lastItem() }}
                    of 
                    {{ $jobApplicants->total() }}
                </div>
                <div class="vehi_pagination" style="display: inline-block;"> 
                    {{ $jobApplicants->links() }}
                </div>
            </div>
            <hr class="style12">
        @endif
        
        @if($jobApplicants->total()>0)
            @foreach($jobApplicants as $jobApplicant)
            <div class="media-body pt-3 mb-0 small lh-125 border-bottom border-gray" id="delete_{{$jobApplicant->id}}">
                <h6 class="border-bottom border-gray pb-2 mb-0"> {{ $jobApplicant->created_at->format('m-d-Y') }}</h6>
                <!-- Posting's Today section -->
                <div class="alert alert-success" alert-dismissible fade show role="alert">
                    <div class="media">
                        <div class="avatar avatar-2xl status-online">
                            <img class="rounded-circle" src="{{$jobApplicant->user->image}}" alt="" />
                        </div>
                        <div class="media-body align-self-center ml-2">
                           <p class="mb-1 line-height-1">
                                <a class="font-weight-semi-bold t-t-c" href="{{route('profile',['user_id'=>Crypt::encrypt($jobApplicant->user_id)])}}"> 
                                   {{$jobApplicant->user->first_name}} {{$jobApplicant->user->last_name}}
                                </a> 
                                {{-- applied for : <a href="#"> A strong investor understanding crypto currency!</a> --}}
                            </p>
                        </div>
                        <div class="d-inline float-right">
                            Applied {{$jobApplicant->created_at->diffForHumans()}}.
                            <a class="btn1 btn-kunnec" href="{{ route('k2u.profile',['user_id'=>$jobApplicant->user->id]) }}" style="color: #ffffff; font-size: 12px;">View Page</a>
                            <button type="button" class="btn1 btn-danger deleteItem" data-id="{{$jobApplicant->id}}" data-url="{{ route('k2me.applicantDelete') }}" style="color: #ffffff; font-size: 12px;">Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <h5 class="text-center" style="padding-top: 30px;">No Applicants Found !</h5>
        @endif
 
    </div>
    @if($jobApplicants->total()>0 && $jobApplicants->total()>$jobApplicants->lastItem())
        <div class="pagi_row text-center">  
            <div class="page_counts"> 
                Results: {{ $jobApplicants->firstItem() }}
                - {{ $jobApplicants->lastItem() }}
                of 
                {{ $jobApplicants->total() }}
            </div>
            <div class="vehi_pagination" style="display: inline-block;"> 
                {{ $jobApplicants->links() }}
            </div>
        </div>
    @endif
</div>

@endsection
@section('additional-js')
@endsection