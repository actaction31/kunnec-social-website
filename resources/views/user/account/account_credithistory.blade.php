@extends('layouts.user')
 @section('title', 'Credit History')
 @section('css/account')
 <link href="{{ asset('public/user-dash/css/account.css') }}" rel="stylesheet"></link>
@endsection
@section('content')
<div class="row p-3">
    <div class="card p-3 col-md-8 col-sm-4 ">
        <div class="x_panel">
            <div class="x_title">
                <h5>Credits Purchased and Spent</h5>
                <div class="form-group row">
					<div class="col-md-9 col-sm-9 ">
						<select class="form-control">
                            <option>Select Year</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
                        </select>
					</div>
				</div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="mainb" style="height:350px;"></div>
            </div>
        </div>
    </div>
    <div class=" col ">
        <div class="card p-3">
            <div class="x_panel">
                <div class="x_title">
                    <h5>Credit Spending Percentage</h5>
                    <div class="form-group row">
					<div class="col-md-9 col-sm-9 ">
						<select class="form-control">
                            <option>Select Year</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
                        </select>
					</div>
				</div>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="echart_pie" style="height:350px;"></div>
                </div>
        </div>
    </div>
</div>


@endsection
@section('js/world')
<script  type="text/javascript" src="{{ asset('public/user-dash/js/echarts.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/world.js') }}"></script>
<!-- Start of bargraph and pie chart -->
<script  type="text/javascript" src="{{ asset('public/user-dash/js/custom.js') }}"></script>
@endsection
