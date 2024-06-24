@if($post)
<div class="card-header bg-light">
    <div class="row justify-content-between">
        <div class="col">
            <div class="media">
                <div class="avatar avatar-2xl status-offline status_{{$post->user->id}}">
                    <a href="{{route('profile',['user_id'=>Crypt::encrypt($post->user_id)])}}"><img class="rounded-circle" src="{{$post->user->image}}" alt="" /></a>
                </div>
                <div class="media-body align-self-center ml-2">
                    <p class="mb-1 line-height-1">
                        <a class="font-weight-semi-bold" href="{{route('profile',['user_id'=>Crypt::encrypt($post->user_id)])}}"> 
                            {{$post->user->first_name}} {{$post->user->last_name}}
                        </a> 
                        shared  
                        @if(!$post->postfiles->isEmpty()) 
                            @if(count($post->postfiles)>1)
                                an <span style="font-size: 20px;color: #235522;">album </span>
                            @elseif($post->postfiles[0]->file_type=="video")
                                a <span style="font-size: 20px;color: #235522;">Video</span>
                            @else 
                                a <span style="font-size: 20px;color: #235522;">Photo</span>
                            @endif
                        @else 
                            a <span style="font-size: 20px;color: #235522;">message</span> 
                        @endif 
                    </p>
                    <p class="mb-0 fs--1">
                        {{$post->created_at->diffForHumans()}} &bull; @if($post->user->loc_city){{$post->user->loc_city->name}},@endif @if($post->user->loc_country){{$post->user->loc_country->name}}@endif &bull; 
                        <span style="color: #009900" class="fas fa-globe-europe"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="dropdown text-sans-serif">
                <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-album-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="post-album-action">
                    <div class="bg-white py-3">
                    <a class="dropdown-item" href="{{route('post.details',['post_id'=>$post->id])}}">View</a>
                    <a class="dropdown-item" href="#">Report</a>
                    @if(Auth::user()->id==$post->user_id)
                    <a class="dropdown-item" href="{{route('post.edit',['post_id'=>$post->id])}}">Edit</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-warning" href="#">Archive</a>
                    <a class="dropdown-item text-danger delete_post" data-toggle="modal" data-target="#delete_modal" row-id="{{$post->id}}" href="#" url="{{route('post.delete')}}">Delete </a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-body overflow-hidden">
    <p>{!! utf8_decode($post->post_content) !!}</p>
    <div class="row mx-n1">
        @if($post->postfiles)
            @foreach($post->postfiles as $postfile)
                <div class="@if(count($post->postfiles)>1) col-6 @else col-12 @endif p-1">
                    @if($postfile->file_type=="video")
                        <video width="100%" controls="" preload="metadata" data-play="hover" muted="muted" class="videoPlay"><source src="{{$postfile->file}}#t=0.5" type="video/mp4"> </video>
                    @else
                    <a href="#" data-fancybox="gallery" data-caption="Image caption">
                        <img class="rounded w-100" src="{{$postfile->file}}" alt=""/>
                    </a>
                    @endif
                </div> 
            @endforeach
        @endif
    </div>
</div>
@endif