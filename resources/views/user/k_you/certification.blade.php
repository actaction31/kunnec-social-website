<div class="form-group">
    <input type="hidden" name="cert_id[]" value="{{$certification->id}}">
    <div class="row">
        <div class="form-group col-sm-8">
            <label for="inputEdu1" class="mb-0">Title</label>
            {!! Form::text('title[]',$certification->title,["class"=>"form-control certinput","placeholder"=>"Title of Certification","required"=>"required"])!!}
        </div>
        <div class="form-group col-sm-3">
            <label for="inputEdu1" class="mb-0">Year</label>
            {!! Form::selectRange('year[]',2022,1940,$certification->year,['class'=>'form-control certinput','placeholder'=>'Year',"required"=>"required"]) !!}
        </div>
        <div class="col-sm-1">
            <label for="inputEdu1" class="mb-0">&nbsp;</label>
            <button class="deleteCert btn1 btn-danger" data-id="{{$certification->id}}" data-url="" style="color: #ffffff; font-size: 12px;"><i class="fas fa-trash"></i></button>
        </div>
        <div class="form-group col-12">
            <label for="inputEdu1" class="mb-0">Description</label>
            {!! Form::textarea('descriptions[]',$certification->descriptions,["class"=>"form-control certinput","placeholder"=>"Description","rows"=>"3","required"=>"required"])!!}
        </div>
    </div>
</div>