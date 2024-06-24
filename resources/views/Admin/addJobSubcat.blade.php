@extends('Admin/masters/master')
@section('title', 'Add Job Category')
@push('page-scripts')
@endpush
@if($subcat_id)
  @section('page_title','Edit Job Category')
@else
  @section('page_title','Add Job Category')
@endif
@section('content')
  <!-- page content -->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      {!! Form::open(['route' =>['admin.jobSubCats.create',$subcat_id]]) !!}
        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach   
          </div>
        @endif
        <div class="row">
          <div class="col-sm-8">
              <div class="x_panel">
                  <div class="x_title">
                      <h2 class="sub_title">Page Content</h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" style="position: relative;">
                        <label for="name" class="hws_form_label">Category Name:<span class="text-danger small">* </span></label>
                        {!! Form::text('name',$jobSubCat->name,['class'=>'form-control','data-type'=>'text']) !!}
                        <span class="hws_error text-right text-danger">{{ $errors->first('name') }}</span>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" style="position: relative;">
                        <label for="icon" class="hws_form_label">Font Icon:<span class="text-danger small">* </span></label>
                        {!! Form::text('icon',$jobSubCat->icon,['class'=>'form-control','data-type'=>'text']) !!}
                        <span class="hws_error text-right text-danger">{{ $errors->first('icon') }}</span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6 form-group has-feedback" style="position: relative;">
                        <label for="is_home" class="hws_form_label">Diplay Home:<span class="text-danger small">* </span></label>
                        {!! Form::select('is_home',['0'=>'NO','1'=>'Yes'],$jobSubCat->is_home, ['class'=>'form-control','id'=>'is_home']) !!}
                        <span class="hws_error text-danger text-right">{{ $errors->first('is_home') }}</span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6 form-group has-feedback" style="position: relative;">
                        <label for="status" class="hws_form_label">Status:<span class="text-danger small">* </span></label>
                        {!! Form::select('status',['1'=>'Active','0'=>'Disabled'],$jobSubCat->status, ['class'=>'form-control','id'=>'status']) !!}
                        <span class="hws_error text-danger text-right">{{ $errors->first('status') }}</span>
                      </div>
                    </div>                   
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="x_panel">
                  <div class="x_title">
                      <h2 class="sub_title">Page Data</h2>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="x_content">
                <div class="form-group has-feedback" style="position: relative;">
                  <label for="cat_id" class="hws_form_label">Category<span class="text-danger small">* </span></label>
                  {!! Form::select('cat_id',$cats,$jobSubCat->cat_id,['placeholder' => 'Select Category','class'=>'form-control','required'=>'required']) !!}
                  <span class="hws_error text-danger text-right">{{ $errors->first('cat_id') }}</span>                                        
                </div>
              </div>
              <div class="x_panel">
                  <div class="x_content text-center">
                      <button class="btn btn-primary btn-fw" type="submit"><i class="fa fa-check"></i> Update &amp; Save</button>
                  </div>
              </div>
          </div>
        </div>
      {!! Form::close() !!}
    </div> 
  </div>
  <!-- /page content -->
@endsection
@push('footer-scripts')
  <script>

  </script>
@endpush