<div class="pagi_row">
  <div class="page_counts"> 
        Results: {{ $jobs->firstItem() }}
        - {{ $jobs->lastItem() }}
        of 
      {{ $jobs->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $jobs->links() }}
  </div> 
</div>
<table  class="all_users table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th style="min-width: 120px;">Title</th>
      <th>User</th>
      <th style="min-width:95px;">Date</th>
      <th style="width: 135px;">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($jobs->total()>0)
      @foreach ($jobs as $job)
        <tr>
          <td>{{$job->title}}</td>
          <td>{{ $job->user->first_name }} {{ $job->user->last_name }}</td>
          <td>{{ $job->created_at->format('d-M-Y') }}</td>
          <td><a title="Applicants" href="{{ route('admin.jobApplicants',['job_id'=>$job->id]) }}" class="btn btn-info btn-xs">Applicants </a></td>
        </tr>
      @endforeach 
    @else
      <tr><td colspan="4" class="text-center">No Record Found</td></tr>
    @endif   
  </tbody>
</table>
<div class="pagi_row">  
  <div class="page_counts"> 
        Results: {{ $jobs->firstItem() }}
        - {{ $jobs->lastItem() }}
        of 
      {{ $jobs->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $jobs->links() }}
  </div>
</div>
