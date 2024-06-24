<h6 class="border-bottom border-gray pb-2 mb-0">Snaps ( {{$snaps->total()}} )</h6>
@if($snaps->total()>0)
    @foreach($snaps as $snap)
        <div class="row media text-muted pt-3 delete_{{$snap->id}}">
            
                @if($snap->snapfiles)
                <div class="snap_images col-sm-4">
                @foreach($snap->snapfiles as $sanpfile)
                    <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{$sanpfile->file}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32" style="object-fit: cover;"><title>Placeholder</title>
                @endforeach
                </div>
                @endif
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray col-sm-8">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Snap Posted: {{$snap->created_at->format('F d, Y')}}</strong>
                        <div class="row ">
                            <div class="col ">
                                <button type="button" class="btn btn-danger btn-sm delete_post"  data-toggle="modal" data-target="#delete_modal" row-id="{{$snap->id}}" url="{{route('snap.delete')}}">
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
        Results: {{ $snaps->firstItem() }}
        - {{ $snaps->lastItem() }}
        of 
        {{ $snaps->total() }}
    </div>
    <div class="vehi_pagination"> 
        {{ $snaps->links() }}
    </div>
</div>