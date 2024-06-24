<div class="form-group">
    <input type="hidden" name="id[]" value="{{$education->id}}">
    <div class="row">
        <div class="col-sm-4">
            <!-- <label for="inputEdu1" class="mb-0">School</label> -->
            {!! Form::text('school_name[]',$education->school_name,["class"=>"form-control eduinput","placeholder"=>"Name of School","required"=>"required"])!!}
        </div>
        <div class="col-sm-3">
            <!-- <label for="inputEdu1" class="mb-0">Year</label> -->
            {!! Form::selectRange('year[]',2022,1940,$education->year,['class'=>'form-control eduinput','placeholder'=>'Year',"required"=>"required"]) !!}
        </div>
        <div class="col-sm-4">
            <!-- <label for="inputEdu1" class="mb-0">Degree</label> -->
            {!! Form::text('degree[]',$education->degree,["class"=>"form-control eduinput","placeholder"=>"Degree","required"=>"required"])!!}
            
        </div>
        <div class="col-sm-1">
            <button class="deleteEdu btn1 btn-danger" data-id="{{$education->id}}" data-url="" style="color: #ffffff; font-size: 12px;"><i class="fas fa-trash"></i></button>
        </div>
    </div>
</div>