<div class="pagi_row">
    <div class="page_counts"> 
          Results: {{ $recordCats->firstItem() }}
          - {{ $recordCats->lastItem() }}
          of 
        {{ $recordCats->total() }}
    </div>
    <div class="vehi_pagination"> 
        {{ $recordCats->links() }}
    </div> 
  </div>
  <table  class="all_users table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th style="min-width: 120px;">Name</th>
        <th style="min-width:95px;">Date</th>
        <th style="width: 125px;">Action</th>
      </tr>
    </thead>
    <tbody>
      @if($recordCats->total()>0)
        @foreach ($recordCats as $recordCat)
          <tr>
            <td>{{ $recordCat->name }}</td>
            <td>{{ $recordCat->created_at->format('d-M-Y') }}</td>
            <td class=" last">
              <a title="Edit Service" href="{{ route('admin.recordCats.edit',['cat_id'=>$recordCat->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
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
          Results: {{ $recordCats->firstItem() }}
          - {{ $recordCats->lastItem() }}
          of 
        {{ $recordCats->total() }}
    </div>
    <div class="vehi_pagination"> 
        {{ $recordCats->links() }}
    </div>
  </div>
  