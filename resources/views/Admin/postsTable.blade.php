<div class="pagi_row">
  <div class="page_counts"> 
        Results: {{ $posts->firstItem() }}
        - {{ $posts->lastItem() }}
        of 
      {{ $posts->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $posts->links() }}
  </div> 
</div>
<table  class="all_users table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Content</th>
      <th style="width:110px;">User</th>
      <th style="width:95px;">Date</th>
    </tr>
  </thead>
  <tbody>
    @if($posts->total()>0)
      @foreach ($posts as $post)
        <tr>
          <td>{{$post->short_desc}}</td>
          <td>{{ $post->user->first_name }} {{ $post->user->last_name }}</td>
          <td>{{ $post->created_at->format('d-M-Y') }}</td>
        </tr>
      @endforeach 
    @else
      <tr><td colspan="4" class="text-center">No Record Found</td></tr>
    @endif   
  </tbody>
</table>
<div class="pagi_row">  
  <div class="page_counts"> 
        Results: {{ $posts->firstItem() }}
        - {{ $posts->lastItem() }}
        of 
      {{ $posts->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $posts->links() }}
  </div>
</div>
