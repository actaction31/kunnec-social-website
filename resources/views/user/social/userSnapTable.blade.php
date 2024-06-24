<ul class="ace-thumbnails">
@if($snaps->total()>0)
    @foreach($snaps as $snap)
        <li class="col-xs-4 col-sm-6 col-md-6 col-lg-4">
            <figure class="snip1139">
                {{--<blockquote class="snap_caption">{!! $snap->descriptions !!}<div class="arrow"></div>
                </blockquote>--}}
                <a href="#" data-rel="colorbox">
                    <div data-toggle="modal" data-target="#snapModal_{{$snap->id}}" style="position:relative;">
                        <img src="@if($snap->lastfile){{$snap->lastfile->file}}@endif" alt="sample3" class="snap_img"/>
                        @if(count($snap->snapfiles)==1)
                        <i class="fas fa-images fa-lg" style="color: #FFFFFF;position: absolute;top: 10px;left: 10px;"></i>
                        @else
                        <i class="fas fa-grip-horizontal fa-2x" style="color: #FFFFFF;position: absolute;top: 10px;left: 10px;"></i>
                        @endif
                    </div>
                    <div class="tools tools-bottom">
                        
                        <a href="#" class="snapLike" data-id="{{$snap->id}}">
                            @if($snap->likes && in_array(Auth::user()->id, $snap->likes))
                            <i class="ace-icon fa fa-heart"></i>
                            @else
                            <i class="ace-icon far fa-heart"></i>
                            @endif
                        </a>
                        <a href="#">
                            <p id="sanpLikeCount_{{$snap->id}}">@if($snap->likes) {{count($snap->likes)}}@else 0 @endif</p>
                        </a>
                        <a href="#">
                            <i class="fas fa-comment-dots"></i>
                        </a>
                        <a href="#">
                            <p>{{$snap->comments_count}}</p>
                        </a>
                    </div>
                </a>
            </figure>
        </li>
                                      
    @endforeach 
@else
    <li>
        No Record Found
    </li>
@endif 
</ul>
<div class="pagi_row">  
    <div class="page_counts"> 
        Results: {{ $snaps->firstItem() }}
        - {{ $snaps->lastItem() }}
        of 
        {{ $snaps->total() }}
    </div>
    <div class="vehi_pagination"> 
        {{ $snaps->links() }}
    </div>
</div>