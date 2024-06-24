@if($snap->comments)
    @foreach($snap->comments as $comment)
        @include('user.social.snapCommentView')
    @endforeach 
@else
    <div class="media text-muted pt-3 text-center">
        No comments !!
    </div>
@endif 