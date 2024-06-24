<div class="pagi_row">
  <div class="page_counts"> 
        Results: {{ $jobSubcats->firstItem() }}
        - {{ $jobSubcats->lastItem() }}
        of 
      {{ $jobSubcats->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $jobSubcats->links() }}
  </div> 
</div>
<table  class="all_users table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th style="min-width: 120px;">Name</th>
      <th>Category</th>
      <th>Show Home</th>
      <th style="min-width:95px;">Date</th>
      <th style="width: 112px;">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($jobSubcats->total()>0)
      @foreach ($jobSubcats as $jobSubcat)
        <tr>
          <td>{{ $jobSubcat->name }}</td>
          <td>{{ $jobSubcat->jobCat->name }}</td>
          <td>{{ $jobSubcat->is_home }}</td>
          <td>{{ $jobSubcat->created_at->format('d-M-Y') }}</td>
          <td class=" last">
            <a title="Edit Service" href="{{ route('admin.jobSubCats.edit',['subcat_id'=>$jobSubcat->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
          </td>
        </tr>
      @endforeach 
    @else
      <tr><td colspan="4" class="text-center">No Record Found</td></tr>
    @endif   
  </tbody>
</table>
<div class="pagi_row">  
  <div class="page_counts"> 
        Results: {{ $jobSubcats->firstItem() }}
        - {{ $jobSubcats->lastItem() }}
        of 
      {{ $jobSubcats->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $jobSubcats->links() }}
  </div>
</div>
