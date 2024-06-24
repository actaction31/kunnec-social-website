@extends('layouts.user')
 @section('title', 'Create a Post')
 @section('css/post')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href='https://fonts.googleapis.com/css?family=Dosis|Candal' rel='stylesheet' type='text/css'>
<style>
    #editor {
      box-shadow: 0 0 2px #CCC;
      min-height: 150px;
      overflow: auto;
      padding: 1em;
      margin-top: 20px;
      resize: vertical;
      outline: none;
    }

    .toolbar {
      text-align: center;
    }

    .toolbar a,
    .fore-wrapper,
    .back-wrapper {
      border: 1px solid #AAA;
      background: #009900;
      font-family: 'Candal';
      font-size: 10px;
      border-radius: 50%;
      color: #ffffff;
      padding: 10px;
      width: 4.0em;
      margin: -2px;
      margin-top: 10px;
      display: inline-block;
      text-decoration: none;
      box-shadow: 0px 1px 0px #CCC;
    }

    .toolbar a:hover, .fore-wrapper:hover, .back-wrapper:hover {
      background: #f2f2f2;
      border-color: #8c8c8c;
    }

    a[data-command='redo'],a[data-command='strikeThrough'],a[data-command='justifyFull'],a[data-command='insertOrderedList'],a[data-command='outdent'],a[data-command='p'],a[data-command='superscript']{
      margin-right:5px;
      border-radius:50%;
    }

    a[data-command='undo'],.fore-wrapper,a[data-command='justifyLeft'],a[data-command='insertUnorderedList'],a[data-command='indent'],a[data-command='h1'],a[data-command='subscript']{
      border-radius: 50%;
    }

    a.palette-item {
      height: 1em;
      border-radius: 3px;
      margin: 2px 1px;
      width: 3em;
    }

    .fore-palette,
    .back-palette {
      display: none;
    }

    .fore-wrapper,
    .back-wrapper {
      display: inline-block;
      cursor: pointer;
    }

    .fore-wrapper:hover .fore-palette,
    .back-wrapper:hover .back-palette {
      display: block;
      float: left;
      position: absolute;
      padding: 3px;
      width: 10em;
      background: #FFF;
      border: 1px solid #DDD;
      box-shadow: 0 0 5px #CCC;
      height: 16.4em;
    }

    .fore-wrapper:hover .fore-palette {
      left: 7%;
      top: 48px;
    }

    .back-wrapper:hover .back-palette {
      left: 17%;
      top: 48px;
    }

    .fore-palette a,
    .back-palette a {
      background: #FFF;
      margin-bottom: 2px;
    }
</style>
@endsection
@section('content')

@include('user.k_me.jobFilters')

<div class="card-header1 mt-3">
    Create an Opportunity ( A post is 10 credit charge / wk , until ended. )
</div>
{!! Form::open(['route'=>['k2me.createJobPost'],'files' => true]) !!}
    @if(session()->has('success'))
      <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-success">
                <strong>{{ session('success') }}</strong>
            </div>
        </div>
      </div>
    @endif
    @if(session()->has('error'))
      <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-danger">
                <strong>{{ session('error') }}</strong>
            </div>
        </div>
      </div>
    @endif
    @if($errors->any())
        <div class="alert alert-dismissible alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-shield-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" id="inputOppTitle" value="{{old('title')}}" name="title" placeholder="Opportunity Title">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <textarea class="form-control" id="ShortDescrt" placeholder="Description of Opportunity" rows="6" name="descriptions">{{old('descriptions')}}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header1 mt-3">
        Specification
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-star"></i></span>
                        </div>
                        <select class="custom-select" id="card-holder-category" name="job_cat_id">
    					    <option value="" disabled selected>Select Category ...</option>
                            @if($cats)
                                @foreach($cats as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            @endif
    					</select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        {!! Form::select('country',$countries,old('country'),['class'=>'custom-select text-capitalize country t-t-c','data-id'=>'#job_state','placeholder'=>'Select Country']) !!}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <select class="custom-select state t-t-c" id="job_state" name="state" data-id='#job_city'>
                            <option value="" disabled selected>Select State ...</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <select class="custom-select t-t-c" id="job_city" name="city">
                            <option value="" disabled selected>Select City ...</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class='fas fa-business-time'></i></span>
                        </div>
                        {!! Form::select('job_type',$jobTypes,old('job_type'),['class'=>'custom-select text-capitalize','placeholder'=>'Type ...']) !!}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                        </div>
                        {!! Form::select('payment_type',$paymentTypes,old('payment_type'),['class'=>'custom-select text-capitalize','placeholder'=>'Payment ...']) !!}                        
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class='far fa-clock'></i></span>
                        </div>
                        {!! Form::selectRange('hr_week',1,50,old('hr_week'),['class'=>'custom-select','placeholder'=>'Hours ...']) !!}
                        <div class="input-group-append">
                            <span class="input-group-text">.hrs / week</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-school"></i></span>
                        </div>
                        {!! Form::select('education',$educations,old('education'),['class'=>'custom-select text-capitalize','placeholder'=>'Education ...']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-bolt"></i></span>
                        </div>
                        {!! Form::select('classification',$classifications,old('classification'),['class'=>'custom-select text-capitalize','placeholder'=>'Classification ...']) !!}
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        {!! Form::selectRange('experience',1,5,old('experience'),['class'=>'custom-select','placeholder'=>'Experience ...']) !!}
                        <div class="input-group-append">
                            <span class="input-group-text">Years</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-video"></i></span>
                        </div>
                        {!! Form::select('intreview_type',$intreview_types,old('intreview_type'),['class'=>'custom-select text-capitalize','placeholder'=>'Interview ...']) !!}
                    </div>
                </div>
            </div>
       </div>  
    </div>

    <div class="card-header1 mt-3">
       Responsibilities
    </div>
    <textarea name="responsibilities" class="responsibilities" style="display:none;">{!! old('responsibilities') !!}</textarea>
    <textarea name="qualifications" class="qualifications" style="display:none;">{!! old('qualifications') !!}</textarea>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="toolbar">
                        <a href="#" data-command='undo'><i class='fa fa-undo'></i></a>
                        <a href="#" data-command='redo'><i class='fa fa-redo'></i></a>
                        <div class="fore-wrapper">
                            <i class='fa fa-paint-brush'></i>
                            <div class="fore-palette">
                            </div>
                        </div>
                        <div class="back-wrapper">
                            <i class='fa fa-paint-roller'></i>
                            <div class="back-palette">
                            </div>
                        </div>
                        <a href="#" data-command='bold'><i class='fa fa-bold'></i></a>
                        <a href="#" data-command='italic'><i class='fa fa-italic'></i></a>
                        <a href="#" data-command='underline'><i class='fa fa-underline'></i></a>
                        <a href="#" data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
                        <a href="#" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
                        <a href="#" data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
                        <a href="#" data-command='justifyRight'><i class='fa fa-align-right'></i></a>
                        <a href="#" data-command='justifyFull'><i class='fa fa-align-justify'></i></a>
                        <a href="#" data-command='indent'><i class='fa fa-indent'></i></a>
                        <a href="#" data-command='outdent'><i class='fa fa-outdent'></i></a>
                        <a href="#" data-command='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
                        <a href="#" data-command='insertOrderedList'><i class='fa fa-list-ol'></i></a>
                        <a href="#" data-command='h1'>H1</a>
                        <a href="#" data-command='h2'>H2</a>
                        <a href="#" data-command='createlink'><i class='fa fa-link'></i></a>
                        <a href="#" data-command='unlink'><i class='fa fa-unlink'></i></a>
                        <a href="#" data-command='p'>P</a>
                        <a href="#" data-command='subscript'><i class='fa fa-subscript'></i></a>
                        <a href="#" data-command='superscript'><i class='fa fa-superscript'></i></a>
                    </div>
                    <div id='editor'  class="respoDivEditor" contenteditable>{!! old('responsibilities') !!}</div>  
                </div>
            </div>  
       </div>  
    </div>

    <div class="card-header1 mt-3">
        Qualifications
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="toolbar">
                        <a href="#" data-command='undo'><i class='fa fa-undo'></i></a>
                        <a href="#" data-command='redo'><i class='fa fa-redo'></i></a>
                        <div class="fore-wrapper">
                            <i class='fa fa-paint-brush'></i>
                            <div class="fore-palette">
                            </div>
                        </div>
                        <div class="back-wrapper">
                            <i class='fa fa-paint-roller'></i>
                            <div class="back-palette">
                            </div>
                        </div>
                        <a href="#" data-command='bold'><i class='fa fa-bold'></i></a>
                        <a href="#" data-command='italic'><i class='fa fa-italic'></i></a>
                        <a href="#" data-command='underline'><i class='fa fa-underline'></i></a>
                        <a href="#" data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
                        <a href="#" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
                        <a href="#" data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
                        <a href="#" data-command='justifyRight'><i class='fa fa-align-right'></i></a>
                        <a href="#" data-command='justifyFull'><i class='fa fa-align-justify'></i></a>
                        <a href="#" data-command='indent'><i class='fa fa-indent'></i></a>
                        <a href="#" data-command='outdent'><i class='fa fa-outdent'></i></a>
                        <a href="#" data-command='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
                        <a href="#" data-command='insertOrderedList'><i class='fa fa-list-ol'></i></a>
                        <a href="#" data-command='h1'>H1</a>
                        <a href="#" data-command='h2'>H2</a>
                        <a href="#" data-command='createlink'><i class='fa fa-link'></i></a>
                        <a href="#" data-command='unlink'><i class='fa fa-unlink'></i></a>
                        <a href="#" data-command='p'>P</a>
                        <a href="#" data-command='subscript'><i class='fa fa-subscript'></i></a>
                        <a href="#" data-command='superscript'><i class='fa fa-superscript'></i></a>
                    </div>
                    <div id='editor' class="qualificationDivEditor" contenteditable>{!! old('qualifications') !!}
                    </div>  
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12"> 
                    <button class="btn btn-lg btn-kunnec rounded-capsule mr-1 mb-1" type="submit">
                        <span class="fas fa-upload"></span> Post Opportunity
                    </button>
                </div>
            </div>
       </div>  
    </div>
{!! Form::close() !!}
@endsection
@section('additional-js')

    <script>
        var colorPalette = ['000000', 'FF9966', '6699FF', '99FF66', 'CC0000', '00CC00', '0000CC', '333333', '0066FF', 'FFFFFF'];
        var forePalette = $('.fore-palette');
        var backPalette = $('.back-palette');

        for (var i = 0; i < colorPalette.length; i++) {
            forePalette.append('<a href="#" data-command="forecolor" data-value="' + '#' + colorPalette[i] + '" style="background-color:' + '#' + colorPalette[i] + ';" class="palette-item"></a>');
            backPalette.append('<a href="#" data-command="backcolor" data-value="' + '#' + colorPalette[i] + '" style="background-color:' + '#' + colorPalette[i] + ';" class="palette-item"></a>');
        }

        $('.toolbar a').click(function(e) {
            e.preventDefault();
            var command = $(this).data('command');
            if (command == 'h1' || command == 'h2' || command == 'p') {
                document.execCommand('formatBlock', false, command);
            }
            if (command == 'forecolor' || command == 'backcolor') {
                document.execCommand($(this).data('command'), false, $(this).data('value'));
            }
            if (command == 'createlink' || command == 'insertimage') {
                url = prompt('Enter the link here: ','http:\/\/'); document.execCommand($(this).data('command'), false, url);
            }
            else document.execCommand($(this).data('command'), false, null);
        });
        $(document).ready(function(){
            $('.qualificationDivEditor').keyup(function(e){
                $(".qualifications").text($(this).html());
            });
            $('.respoDivEditor').keyup(function(e){
                $(".responsibilities").text($(this).html());    
            });
        });
    </script>
@endsection
<style type="text/css">
    .jobTextEditor{

    }
</style>