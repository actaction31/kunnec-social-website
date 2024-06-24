<table class="table">
    <thead>
        <tr>
            <th>Month</th>
            <th>Date</th>
            <th>Descriptions</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @if($payments->total()>0)
            @foreach($payments as $payment)
                <tr>
                    <th scope="row">{{$payment->created_at->format('M')}}</th>
                    <td>{{$payment->created_at->format('M d ,Y')}}</td>
                    <td>{{$payment->descriptions}}</td>
                    <td>${{$payment->amount}}</td>
                </tr>
            @endforeach 
        @else
            <tr><td colspan="7" class="text-center">No Record Found</td></tr>
        @endif  
    </tbody>
</table>

<div class="pagi_row">  
    <div class="page_counts"> 
        Results: {{ $payments->firstItem() }}
        - {{ $payments->lastItem() }}
        of 
        {{ $payments->total() }}
    </div>
    <div class="vehi_pagination"> 
        {{ $payments->links() }}
    </div>
</div>