<div class="pagi_row">
  <div class="page_counts"> 
        Results: {{ $events->firstItem() }}
        - {{ $events->lastItem() }}
        of 
      {{ $events->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $events->links() }}
  </div> 
</div>
<table  class="all_users table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Title</th>
      <th>User</th>
      <th>Ticket</th>
      <th style="width:155px;">Start Date</th>
      <th style="width:155px;">End Date</th>
    </tr>
  </thead>
  <tbody>
    @if($events->total()>0)
      @foreach ($events as $event)
        <tr>
          <td>{{$event->title}}</td>
          <td>{{ $event->user->first_name }} {{ $event->user->last_name }}</td>
          <td>@if($event->ticket_type=='paid') ${{$event->ticket1}} - ${{$event->ticket2}} @else {{$event->ticket_type}} @endif </td>
          <td>{{ $event->startDate->format('d-M-Y') }} {{$event->startTime->format('h:i A')}}</td>
          <td>{{ $event->endDate->format('d-M-Y') }} {{$event->endTime->format('h:i A')}}</td>
        </tr>
      @endforeach 
    @else
      <tr><td colspan="4" class="text-center">No Record Found</td></tr>
    @endif   
  </tbody>
</table>
<div class="pagi_row">  
  <div class="page_counts"> 
        Results: {{ $events->firstItem() }}
        - {{ $events->lastItem() }}
        of 
      {{ $events->total() }}
  </div>
  <div class="vehi_pagination"> 
      {{ $events->links() }}
  </div>
</div>
