<div class="entry_music input-group upload-input-group">
    <div class="" style="float:left;width: 100%;text-align: right;">
        <button class="btn btn-upload btn-danger deletePortfolio" data-id="{{$portfolio->id}}" type="button" style="height: 50px;"><i class="fa fa-trash"></i></button>
    </div>
    <input type="hidden" name="port_id[]" value="{{$portfolio->id}}">
    <input type="hidden" name="thumbnail_file[]" value="{{basename($portfolio->thumbnail)}}">
    <input type="hidden" name="portfolio_file[]" value="{{basename($portfolio->file)}}">
    <input type="hidden" name="portfolio_file_type[]" value="{{$portfolio->file_type}}">
    <div class="col">
        <label style="font-weight:bold;">File</label>
        <input class="form-control @if(!$portfolio->id) portinput_{{$type}} @endif" name="files{{$portfolio->id}}[]" type="file" @if(!$portfolio->id) required @endif>
        <div class="uploaded_files">
            @if($portfolio->file_type=="img")
                <img class="portfolio_file" src="{{$portfolio->file}}">
            @elseif($portfolio->file_type=="audio")
                <audio id="audio" preload="auto" tabindex="0" controls="" src="{{$portfolio->file}}">
                    <source src="{{$portfolio->file}}">
                </audio>
            @elseif($portfolio->file_type=="video")
                <video width="autho" controls="" preload="metadata" data-play="hover" muted="muted" class="videoPlay" style="max-height: 300px;">
                    <source src="{{$portfolio->file}}" type="video/mp4"> 
                </video>
            @endif
        </div> 
    </div>
    @if($portfolio->file_type=="video" || $type=="video")
        <div class="col">
            <label style="font-weight:bold;">Thumbnail</label>
            <input class="form-control @if(!$portfolio->id) portinput @endif" name="thumbnail{{$portfolio->id}}[]" type="file" @if(!$portfolio->id) required @endif>
            <img class="portfolio_file" src="{{$portfolio->thumbnail}}">
        </div>
    @endif
    
    <div class="col-12 mt-2">
        <div class="form-group">
            {!! Form::textarea('descriptions[]',$portfolio->descriptions,["class"=>"form-control portinput","placeholder"=>"Type a brief description ...","rows"=>"2","required"=>"required"])!!}
        </div>
    </div>
</div>
<hr>