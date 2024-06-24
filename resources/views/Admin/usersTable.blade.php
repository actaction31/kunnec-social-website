<div class="pagi_row">
  <div class="page_counts"> 
        Results: {{ $users->firstItem() }}
        - {{ $users->lastItem() }}
        of 
      {{ $users->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $users->links() }}
  </div> 
</div>
<table  class="all_users table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th style="min-width: 120px;">Name</th>
      <th>Username</th>
      <th>Email</th>
      <th style="min-width:95px;">Date</th>
      <th style="width: 135px;">Status</th>
    </tr>
  </thead>
  <tbody>
    @if($users->total()>0)
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->first_name }} {{ $user->last_name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->created_at->format('d-M-Y') }}</td>
          <td class=" last">
            {!! Form::select('status',['1'=>'Active','0'=>'Block'],$user->status,['class'=>'form-control hws_select status_change','user-id'=>$user->id]) !!}
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
        Results: {{ $users->firstItem() }}
        - {{ $users->lastItem() }}
        of 
      {{ $users->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $users->links() }}
  </div>
</div>
