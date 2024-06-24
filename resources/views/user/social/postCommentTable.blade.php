@if($postComments->total()>0)
    @foreach($postComments as $comment)
        @include('user.social.postCommentView')
    @endforeach 
@else
    <div class="media text-muted pt-3 text-center">
        No comments !!
    </div>
@endif 
<div class="pagi_row">  
    <div class="page_counts"> 
        Results: {{ $postComments->firstItem() }}
        - {{ $postComments->lastItem() }}
        of 
        {{ $postComments->total() }}
    </div>
    <div class="vehi_pagination"> 
        {{ $postComments->links() }}
    </div>
</div>