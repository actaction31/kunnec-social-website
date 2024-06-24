<h6 class="border-bottom border-gray pb-2 mb-0">Posts ( {{$posts->total()}} )</h6>
@if($posts->total()>0)
    @foreach($posts as $post)
        <div class="media text-muted pt-3 delete_{{$post->id}}">
            @if($post->lastfile) 
                @if($post->lastfile->file_type=='video')
                    <video width="50" height="50" preload="metadata" style="margin-right: 10px;">
                        <source src="{{$post->lastfile->file}}#t=0.5" type="video/mp4">
                    </video>
                @else 
                    <img style="object-fit: contain;" class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{$post->lastfile->file}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title></img>
                @endif
            @else 
                <img style="object-fit: contain;" class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title></img>
            @endif
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Posted: {{$post->created_at->format('F d, Y')}}</strong>
                    <div class="row ">
                        <div class="col ">
                            <button type="button" class="btn btn-danger btn-sm delete_post" data-toggle="modal" data-target="#delete_modal" row-id="{{$post->id}}" url="{{route('post.delete')}}">
                            <i class="fas fa-times-circle"></i> Delete &nbsp;&nbsp;&nbsp
                            </button>
                        </div>  
                    </div>  
                </div>
            </div>
        </div>
    @endforeach 
@else
    <div class="media text-muted pt-3 text-center">
        No Record Found
    </div>
@endif 
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