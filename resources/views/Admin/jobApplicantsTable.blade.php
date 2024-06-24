<div class="pagi_row">
  <div class="page_counts"> 
        Results: {{ $jobApplicants->firstItem() }}
        - {{ $jobApplicants->lastItem() }}
        of 
      {{ $jobApplicants->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $jobApplicants->links() }}
  </div> 
</div>
<table  class="all_users table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Name</th>
      <th style="width:95px;">Date</th>
    </tr>
  </thead>
  <tbody>
    @if($jobApplicants->total()>0)
      @foreach ($jobApplicants as $jobApplicant)
        <tr>
          <td>{{ $jobApplicant->user->first_name }} {{ $jobApplicant->user->last_name }}</td>
          <td>{{ $jobApplicant->created_at->format('d-M-Y') }}</td>
        </tr>
      @endforeach 
    @else
      <tr><td colspan="4" class="text-center">No Record Found</td></tr>
    @endif   
  </tbody>
</table>
<div class="pagi_row">  
  <div class="page_counts"> 
        Results: {{ $jobApplicants->firstItem() }}
        - {{ $jobApplicants->lastItem() }}
        of 
      {{ $jobApplicants->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $jobApplicants->links() }}
  </div>
</div>
