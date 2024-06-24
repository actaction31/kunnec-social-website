@if($posts->total()>0)
    @foreach($posts as $post)
        <div class="card mb-3 delete_{{$post->id}}">
            @include('user.social.postView')
            <div class="card-footer bg-light pt-0">
                <div class="border-bottom border-200 fs--1 py-3">
                <a class="text-700">@if($post->likes) {{count($post->likes)}}@else 0 @endif Likes</a> &bull; <a class="text-700">{{$post->comments_count}} Comments</a>
                </div>
                <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                    <div class="col-auto">
                        <a class="rounded d-flex align-items-center mr-3 postLike" href="#" data-id="{{$post->id}}">
                            @if($post->likes && in_array(Auth::user()->id, $post->likes))
                            <img src="{{ asset('public/user-dash/images/illustrations/like-active.png')}}" width="20" alt="" />
                            @else
                            <img src="{{ asset('public/user-dash/images/illustrations/like-inactive.png')}}" width="20" alt="" />
                            @endif
                            <span class="ml-1">Like</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a class="rounded d-flex align-items-center mr-3">
                            <img src="{{ asset('public/user-dash/images/illustrations/comment-active.png')}}" width="20" alt="" />
                            <span class="ml-1">Comment</span>
                        </a>
                    </div>
                    {{--
                    <div class="col-auto d-flex align-items-center">
                        <a class="rounded text-700 d-flex align-items-center" href="#">
                            <img src="{{ asset('public/user-dash/images/illustrations/share-inactive.png')}}" width="20" alt="" />
                            <span class="ml-1">Share</span>
                        </a>
                    </div>
                    --}}
                </div>
                <div class="d-flex align-items-center border-top border-200 pt-3">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{Auth::user()->image}}" style="width: 35px;height:35px;"/>
                    </div>
                    <input class="form-control rounded-capsule ml-2 fs--1 postCommentInput cmtInput_{{$post->id}}" data-id="{{$post->id}}" type="text" placeholder="Write a comment..." />
                   <div class="postComment">
                       <button class="btn btn-success btn-sm postComtBtn" data-id="{{$post->id}}">Post</button>
                   </div> 
                </div>
                <div class="comments_block" id="cmtBlock_{{$post->id}}">
                @if($post->last_comments)
                <!-- Post comments start-->
                @include('user.social.postCommentView',['comment'=>$post->last_comments])
                <a class="fs--1 text-700 d-inline-block mt-2" href="{{route('post.details',['post_id'=>$post->id])}}">Load more comments</a>
                <!-- Post comments end-->
                @endif
                </div>
            </div>
        </div>
    @endforeach 
@else
    <div class="media text-muted pt-3 text-center">
        No Record Found
    </div>
@endif 
{{-- <div class="pagi_row">  
    <div class="page_counts"> 
        Results: {{ $posts->firstItem() }}
        - {{ $posts->lastItem() }}
        of 
        {{ $posts->total() }}
    </div>
    <div class="vehi_pagination"> 
        {{ $posts->links() }}
    </div>
</div> --}}