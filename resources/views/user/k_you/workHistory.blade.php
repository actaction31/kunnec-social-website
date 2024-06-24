<div class="form-group">
    <input type="hidden" name="work_id[]" value="{{$work_history->id}}">
    <div class="row">
        <div class="col-sm-11">
            {!! Form::text('job_title[]',$work_history->job_title,["class"=>"form-control workinput","placeholder"=>"Job Title","required"=>"required"])!!}
        </div>
        <div class="col-sm-1">
            <!-- <label for="inputEdu1" class="mb-0">&nbsp;</label> -->
            <button class="deleteWork btn1 btn-danger" data-id="{{$work_history->id}}" data-url="" style="color: #ffffff; font-size: 12px;"><i class="fas fa-trash"></i></button>
        </div>
        <div class="col-sm-6">
            {!! Form::date('start_date[]',$work_history->start_date,["class"=>"form-control workinput","placeholder"=>"(start) Month & Year","required"=>"required"])!!}
        </div>
        <div class="col-sm-6">
            {!! Form::date('end_date[]',$work_history->end_date,["class"=>"form-control workinput","placeholder"=>"(end) Month & Year","required"=>"required"])!!}        
        </div>
        <div class="col-sm-12 mt-2">
            <div class="form-group">
                {!! Form::textarea('descriptions[]',$work_history->descriptions,["class"=>"form-control workinput","placeholder"=>"Type a brief description ...","rows"=>"3","required"=>"required"])!!}  
            </div>
        </div>
    </div>
</div>