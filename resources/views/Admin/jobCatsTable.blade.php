<div class="pagi_row">
  <div class="page_counts"> 
        Results: {{ $jobCats->firstItem() }}
        - {{ $jobCats->lastItem() }}
        of 
      {{ $jobCats->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $jobCats->links() }}
  </div> 
</div>
<table  class="all_users table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th style="min-width: 120px;">Name</th>
      <th style="min-width:95px;">Show</th>
      <th style="min-width:95px;">Date</th>
      <th style="width: 125px;">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($jobCats->total()>0)
      @foreach ($jobCats as $jobCat)
        <tr>
          <td>{{ $jobCat->name }}</td>
          <td>{{ $jobCat->is_show }}</td>
          <td>{{ $jobCat->created_at->format('d-M-Y') }}</td>
          <td class=" last">
            <a title="Edit Service" href="{{ route('admin.jobCats.edit',['cat_id'=>$jobCat->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
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
        Results: {{ $jobCats->firstItem() }}
        - {{ $jobCats->lastItem() }}
        of 
      {{ $jobCats->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $jobCats->links() }}
  </div>
</div>
