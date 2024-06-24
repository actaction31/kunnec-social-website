@extends('layouts.user')
 @section('title', 'K-Ads Balance')
@section('additional-css')
@section('css/account')
 <link href="{{ asset('public/user-dash/css/account.css') }}" rel="stylesheet"></link>
@section('content')
<div class="card">
    <div id="user-profile-2" class="user-profile">
        <div class="tabbable">
            <ul class="nav nav-tabs padding-18 ">
                <li class="active">
                    <a data-toggle="tab" href="#main">
                        <i class="green ace-icon fa fa-chart-bar bigger-120"></i>
                        Charts
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#profile">
                        <i class="green ace-icon fas fa-graduation-cap  bigger-120"></i>
                        Profile Ad
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#billboard">
                        <i class="green ace-icon fa fa-chalkboard-teacher bigger-120"></i>
                        Billboard Ad
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#banner">
                        <i class="green ace-icon fa fa-microphone bigger-120"></i>
                        Banner Ad
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#video">
                        <i class="green ace-icon fas fa-film bigger-120"></i>
                        Video Ad
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#radio">
                        <i class="green ace-icon fas fa-music bigger-120"></i>
                        Radio Ad
                    </a>
                </li>
                
            </ul>

            <!-- Start of Charts Tab --> 
            <div class="tab-content no-border">
                <div id="main" class="tab-pane in active">
                    <div class="row">
                        <div class="card ml-3">
                            <div class=" col-sm-12 ">
                                <div class="tile-stats">
                                    <span>Balance</span>
                                    <h2 style="color: #000000;">$ 2,400</h2>
                                    <p>Current amount in Ads.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card ml-3">
                            <div class=" col-sm-12 ">
                                <div class="tile-stats">
                                    <span>Total Spent</span>
                                    <h2>$ 1,231,809</h2>
                                    <p>Total amount spent on Ads.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card p-3 col-xs-9 col-sm-7 ml-3">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h5>Payments</h5>
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

                        <div class="col-md-4 col-sm-4  ">
                            <div class="card p-3">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h5>Payment Percentage</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div id="echart_pie" style="height:350px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card p-3 col-xs-12 col-sm-7 ml-3 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h5>Ad World Map</h5>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div id="echart_world_map" style="height:370px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 col-md-4 col-sm-4 ml-3 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h5>Male and Female</h5>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div id="echart_donut" style="height:350px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End of Payment Charts Tab -->

                <!-- Start of Profile Tab -->
                <div id="profile" class="tab-pane">
                    <div class="row">
                        <div class="card ml-3 p-3 col-sm">
                            <div class=" col-sm-12  ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h5><i class="fas fa-graduation-cap"></i> Profile Ads <small>Total</small> <span class="badge badge-danger">$4324</span></h5>
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
                                        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                            <!-- Start of January -->
                                            <div class="panel">
                                                <a class="panel-heading" role="tab" id="headingcourseOne" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseOne" aria-expanded="true" aria-controls="collapsecourseOne">
                                                <h4 class="panel-title">January <span class="badge badge-primary float-right">$324</span></h4>
                                                </a>
                                                <div id="collapsecourseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingcourseOne">
                                                    <div class="panel-body">
                                                        <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of February -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseTwo" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseTwo" aria-expanded="false" aria-controls="collapsecourseTwo">
                                                <h4 class="panel-title">February <span class="badge badge-primary float-right">$965</span></h4>
                                                </a>
                                                <div id="collapsecourseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseTwo">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of March -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseThree" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseThree" aria-expanded="false" aria-controls="collapsecourseThree">
                                                <h4 class="panel-title">March <span class="badge badge-primary float-right">$965</span></h4>
                                                </a>
                                                <div id="collapsecourseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseThree">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of April -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseFour" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseFour" aria-expanded="false" aria-controls="collapsecourseFour">
                                                <h4 class="panel-title">April <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapsecourseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseFour">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of May -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseFive" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseFive" aria-expanded="false" aria-controls="collapsecourseFive">
                                                <h4 class="panel-title">May <span class="badge badge-primary float-right">$276</span></h4>
                                                </a>
                                                <div id="collapsecourseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseFive">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of June -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseSix" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseSix" aria-expanded="false" aria-controls="collapsecourseSix">
                                                <h4 class="panel-title">June <span class="badge badge-primary float-right">$433</span></h4>
                                                </a>
                                                <div id="collapsecourseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseSix">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of July -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseSeven" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseSeven" aria-expanded="false" aria-controls="collapsecourseSeven">
                                                <h4 class="panel-title">July <span class="badge badge-primary float-right">$578</span></h4>
                                                </a>
                                                <div id="collapsecourseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseSeven">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of August -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseEight" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseEight" aria-expanded="false" aria-controls="collapsecourseEight">
                                                <h4 class="panel-title">August <span class="badge badge-primary float-right">$388</span></h4>
                                                </a>
                                                <div id="collapsecourseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseEight">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of September -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseNine" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseNine" aria-expanded="false" aria-controls="collapsecourseNine">
                                                <h4 class="panel-title">September <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapsecourseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseNine">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of October -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseTen" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseTen" aria-expanded="false" aria-controls="collapsecourseTen">
                                                <h4 class="panel-title">October <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapsecourseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseTen">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of  November-->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseEleven" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseEleven" aria-expanded="false" aria-controls="collapsecourseEleven">
                                                <h4 class="panel-title">November <span class="badge badge-primary float-right">$480</span></h4>
                                                </a>
                                                <div id="collapsecourseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseEleven">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of December -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingcourseTwelve" data-toggle="collapse" data-parent="#accordion" href="#collapsecourseTwelve" aria-expanded="false" aria-controls="collapsecourseTwelve">
                                                <h4 class="panel-title">December <span class="badge badge-primary float-right">$824</span></h4>
                                                </a>
                                                <div id="collapsecourseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingcourseTwelve">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <hr class="style12">
                                    <!-- / This is the top area if the user doesn't have any posts  -->
                                </div>   
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

                <!-- Start of Billboard Tab -->
                <div id="billboard" class="tab-pane">
                    <div class="row">
                        <div class="card ml-3 p-3 col-sm">
                            <div class=" col-sm-12  ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h5><i class="fas fa-chalkboard-teacher"></i> Billboard <small>Total</small> <span class="badge badge-danger">$4324</span></h5>
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
                                        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                            <!-- Start of January -->
                                            <div class="panel">
                                                <a class="panel-heading" role="tab" id="headingtutorOne" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorOne" aria-expanded="true" aria-controls="collapsetutorOne">
                                                <h4 class="panel-title">January <span class="badge badge-primary float-right">$324</span></h4>
                                                </a>
                                                <div id="collapsetutorOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingtutorOne">
                                                    <div class="panel-body">
                                                        <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of February -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorTwo" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorTwo" aria-expanded="false" aria-controls="collapsetutorTwo">
                                                <h4 class="panel-title">February <span class="badge badge-primary float-right">$965</span></h4>
                                                </a>
                                                <div id="collapsetutorTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorTwo">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of March -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorThree" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorThree" aria-expanded="false" aria-controls="collapsetutorThree">
                                                <h4 class="panel-title">March <span class="badge badge-primary float-right">$965</span></h4>
                                                </a>
                                                <div id="collapsetutorThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorThree">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of April -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorFour" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorFour" aria-expanded="false" aria-controls="collapsetutorFour">
                                                <h4 class="panel-title">April <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapsetutorFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorFour">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of May -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorFive" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorFive" aria-expanded="false" aria-controls="collapsetutorFive">
                                                <h4 class="panel-title">May <span class="badge badge-primary float-right">$276</span></h4>
                                                </a>
                                                <div id="collapsetutorFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorFive">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of June -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorSix" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorSix" aria-expanded="false" aria-controls="collapsetutorSix">
                                                <h4 class="panel-title">June <span class="badge badge-primary float-right">$433</span></h4>
                                                </a>
                                                <div id="collapsetutorSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorSix">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of July -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorSeven" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorSeven" aria-expanded="false" aria-controls="collapsetutorSeven">
                                                <h4 class="panel-title">July <span class="badge badge-primary float-right">$578</span></h4>
                                                </a>
                                                <div id="collapsetutorSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorSeven">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of August -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorEight" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorEight" aria-expanded="false" aria-controls="collapsetutorEight">
                                                <h4 class="panel-title">August <span class="badge badge-primary float-right">$388</span></h4>
                                                </a>
                                                <div id="collapsetutorEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorEight">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of September -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorNine" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorNine" aria-expanded="false" aria-controls="collapsetutorNine">
                                                <h4 class="panel-title">September <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapsetutorNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorNine">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of October -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorTen" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorTen" aria-expanded="false" aria-controls="collapsetutorTen">
                                                <h4 class="panel-title">October <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapsetutorTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorTen">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of  November-->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorEleven" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorEleven" aria-expanded="false" aria-controls="collapsetutorEleven">
                                                <h4 class="panel-title">November <span class="badge badge-primary float-right">$480</span></h4>
                                                </a>
                                                <div id="collapsetutorEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorEleven">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of December -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingtutorTwelve" data-toggle="collapse" data-parent="#accordion" href="#collapsetutorTwelve" aria-expanded="false" aria-controls="collapsetutorTwelve">
                                                <h4 class="panel-title">December <span class="badge badge-primary float-right">$824</span></h4>
                                                </a>
                                                <div id="collapsetutorTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtutorTwelve">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Class </th>
                                                                                    <th class="column-title">Student</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <hr class="style12">
                                    <!-- / This is the top area if the user doesn't have any posts  -->
                                </div>   
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

                <!--Banner Tab -->
                <div id="banner" class="tab-pane">
                    <div class="row">
                        <div class="card ml-3 p-3 col-sm">
                            <div class=" col-sm-12  ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h5><i class="fas fa-microphone"></i> Banner <small>Total</small> <span class="badge badge-danger">$4324</span></h5>
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
                                        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                            <!-- Start of January -->
                                            <div class="panel">
                                                <a class="panel-heading" role="tab" id="headingrecordOne" data-toggle="collapse" data-parent="#accordion" href="#collapserecordOne" aria-expanded="true" aria-controls="collapserecordOne">
                                                <h4 class="panel-title">January <span class="badge badge-primary float-right">$324</span></h4>
                                                </a>
                                                <div id="collapserecordOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingrecordOne">
                                                    <div class="panel-body">
                                                        <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of February -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordTwo" data-toggle="collapse" data-parent="#accordion" href="#collapserecordTwo" aria-expanded="false" aria-controls="collapserecordTwo">
                                                <h4 class="panel-title">February <span class="badge badge-primary float-right">$965</span></h4>
                                                </a>
                                                <div id="collapserecordTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordTwo">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of March -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordThree" data-toggle="collapse" data-parent="#accordion" href="#collapserecordThree" aria-expanded="false" aria-controls="collapserecordThree">
                                                <h4 class="panel-title">March <span class="badge badge-primary float-right">$965</span></h4>
                                                </a>
                                                <div id="collapserecordThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordThree">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of April -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordFour" data-toggle="collapse" data-parent="#accordion" href="#collapserecordFour" aria-expanded="false" aria-controls="collapserecordFour">
                                                <h4 class="panel-title">April <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapserecordFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordFour">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of May -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordFive" data-toggle="collapse" data-parent="#accordion" href="#collapserecordFive" aria-expanded="false" aria-controls="collapserecordFive">
                                                <h4 class="panel-title">May <span class="badge badge-primary float-right">$276</span></h4>
                                                </a>
                                                <div id="collapserecordFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordFive">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of June -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordSix" data-toggle="collapse" data-parent="#accordion" href="#collapserecordSix" aria-expanded="false" aria-controls="collapserecordSix">
                                                <h4 class="panel-title">June <span class="badge badge-primary float-right">$433</span></h4>
                                                </a>
                                                <div id="collapserecordSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordSix">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of July -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordSeven" data-toggle="collapse" data-parent="#accordion" href="#collapserecordSeven" aria-expanded="false" aria-controls="collapserecordSeven">
                                                <h4 class="panel-title">July <span class="badge badge-primary float-right">$578</span></h4>
                                                </a>
                                                <div id="collapserecordSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordSeven">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of August -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordEight" data-toggle="collapse" data-parent="#accordion" href="#collapserecordEight" aria-expanded="false" aria-controls="collapserecordEight">
                                                <h4 class="panel-title">August <span class="badge badge-primary float-right">$388</span></h4>
                                                </a>
                                                <div id="collapserecordEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordEight">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of September -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordNine" data-toggle="collapse" data-parent="#accordion" href="#collapserecordNine" aria-expanded="false" aria-controls="collapserecordNine">
                                                <h4 class="panel-title">September <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapserecordNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordNine">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of October -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordTen" data-toggle="collapse" data-parent="#accordion" href="#collapserecordTen" aria-expanded="false" aria-controls="collapserecordTen">
                                                <h4 class="panel-title">October <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapserecordTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordTen">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of  November-->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordEleven" data-toggle="collapse" data-parent="#accordion" href="#collapserecordEleven" aria-expanded="false" aria-controls="collapserecordEleven">
                                                <h4 class="panel-title">November <span class="badge badge-primary float-right">$480</span></h4>
                                                </a>
                                                <div id="collapserecordEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordEleven">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of December -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingrecordTwelve" data-toggle="collapse" data-parent="#accordion" href="#collapserecordTwelve" aria-expanded="false" aria-controls="collapserecordTwelve">
                                                <h4 class="panel-title">December <span class="badge badge-primary float-right">$824</span></h4>
                                                </a>
                                                <div id="collapserecordTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingrecordTwelve">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title">Date </th>
                                                                                    <th class="column-title" style="width: 30%;">Session </th>
                                                                                    <th class="column-title">Artist</th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Time</th>
                                                                                    <th class="column-title">Duration</th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded" width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">5</td>
                                                                                    <td class=" ">per min</td>
                                                                                    <td class=" ">45</td>
                                                                                    <td class="a-right a-right ">$38.25</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">May 23, 2021</td>
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">
                                                                                        <img class="bd-placeholder-img mr-2 rounded"  width="32" height="32" src="{{ asset('public/user-dash/images/users/profiles/14.jpg')}}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title>
                                                                                        </img>
                                                                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                                                        <strong class="d-block text-gray-dark">@username</strong>
                                                                                    </td>
                                                                                    <td class=" ">100</td>
                                                                                    <td class=" ">per hr</td>
                                                                                    <td class=" ">10</td>
                                                                                    <td class="a-right a-right ">$170</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <hr class="style12">
                                    <!-- / This is the top area if the user doesn't have any posts  -->
                                </div>   
                            </div>
                        </div>
                    </div> 
                </div>
            </div>  

                <!-- Start of Video Tab -->
                <div id="video" class="tab-pane">
                    <div class="row">
                        <div class="card ml-3 p-3 col-sm">
                            <div class=" col-sm-12  ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h5><i class="fas fa-film"></i> Video <small>Total</small> <span class="badge badge-danger">$4324</span></h5>
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
                                        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                            <!-- Start of January -->
                                            <div class="panel">
                                                <a class="panel-heading" role="tab" id="headingliveOne" data-toggle="collapse" data-parent="#accordion" href="#collapseliveOne" aria-expanded="true" aria-controls="collapseliveOne">
                                                <h4 class="panel-title">January <span class="badge badge-primary float-right">$324</span></h4>
                                                </a>
                                                <div id="collapseliveOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingliveOne">
                                                    <div class="panel-body">
                                                        <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of February -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseliveTwo" aria-expanded="false" aria-controls="collapseliveTwo">
                                                <h4 class="panel-title">February <span class="badge badge-primary float-right">$965</span></h4>
                                                </a>
                                                <div id="collapseliveTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveTwo">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of March -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveThree" data-toggle="collapse" data-parent="#accordion" href="#collapseliveThree" aria-expanded="false" aria-controls="collapseliveThree">
                                                <h4 class="panel-title">March <span class="badge badge-primary float-right">$965</span></h4>
                                                </a>
                                                <div id="collapseliveThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveThree">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of April -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveFour" data-toggle="collapse" data-parent="#accordion" href="#collapseliveFour" aria-expanded="false" aria-controls="collapseliveFour">
                                                <h4 class="panel-title">April <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapseliveFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveFour">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of May -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveFive" data-toggle="collapse" data-parent="#accordion" href="#collapseliveFive" aria-expanded="false" aria-controls="collapseliveFive">
                                                <h4 class="panel-title">May <span class="badge badge-primary float-right">$276</span></h4>
                                                </a>
                                                <div id="collapseliveFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveFive">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of June -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveSix" data-toggle="collapse" data-parent="#accordion" href="#collapseliveSix" aria-expanded="false" aria-controls="collapseliveSix">
                                                <h4 class="panel-title">June <span class="badge badge-primary float-right">$433</span></h4>
                                                </a>
                                                <div id="collapseliveSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveSix">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of July -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveSeven" data-toggle="collapse" data-parent="#accordion" href="#collapseliveSeven" aria-expanded="false" aria-controls="collapseliveSeven">
                                                <h4 class="panel-title">July <span class="badge badge-primary float-right">$578</span></h4>
                                                </a>
                                                <div id="collapseliveSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveSeven">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of August -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveEight" data-toggle="collapse" data-parent="#accordion" href="#collapseliveEight" aria-expanded="false" aria-controls="collapseliveEight">
                                                <h4 class="panel-title">August <span class="badge badge-primary float-right">$388</span></h4>
                                                </a>
                                                <div id="collapseliveEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveEight">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of September -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveNine" data-toggle="collapse" data-parent="#accordion" href="#collapseliveNine" aria-expanded="false" aria-controls="collapseliveNine">
                                                <h4 class="panel-title">September <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapseliveNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveNine">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of October -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveTen" data-toggle="collapse" data-parent="#accordion" href="#collapseliveTen" aria-expanded="false" aria-controls="collapseliveTen">
                                                <h4 class="panel-title">October <span class="badge badge-primary float-right">$766</span></h4>
                                                </a>
                                                <div id="collapseliveTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveTen">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of  November-->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveEleven" data-toggle="collapse" data-parent="#accordion" href="#collapseliveEleven" aria-expanded="false" aria-controls="collapseliveEleven">
                                                <h4 class="panel-title">November <span class="badge badge-primary float-right">$480</span></h4>
                                                </a>
                                                <div id="collapseliveEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveEleven">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start of December -->
                                            <div class="panel">
                                                <a class="panel-heading collapsed" role="tab" id="headingliveTwelve" data-toggle="collapse" data-parent="#accordion" href="#collapseliveTwelve" aria-expanded="false" aria-controls="collapseliveTwelve">
                                                <h4 class="panel-title">December <span class="badge badge-primary float-right">$824</span></h4>
                                                </a>
                                                <div id="collapseliveTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingliveTwelve">
                                                    <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                            <div class="x_panel">
                                                                <div class="x_title">
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="x_content">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped jambo_table bulk_action">
                                                                            <thead>
                                                                                <tr class="headings">
                                                                                    <th class="column-title" style="width: 40%;">Title </th>
                                                                                    <th class="column-title">Credit Price </th>
                                                                                    <th class="column-title">Watched </th>
                                                                                    <th class="column-title">Total </th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="even pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="odd pointer">
                                                                                    <td class=" ">Learning Laravel for beginners</td>
                                                                                    <td class=" ">50</td>
                                                                                    <td class=" ">25</td>
                                                                                    <td class="a-right a-right ">$250</td>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <hr class="style12">
                                    <!-- / This is the top area if the user doesn't have any posts  -->
                                </div>   
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

            <!-- Start of Radio Tab -->
            <div id="radio" class="tab-pane">
                <div class="row">
                     <div class="card ml-3 p-3 col-sm">
                        <div class=" col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h5><i class="fas fa-music"></i> Radio <small>Total</small> <span class="badge badge-danger">$4324</span></h5>
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
                                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                        <!-- Start of January -->
                                        <div class="panel">
                                            <a class="panel-heading" role="tab" id="headingmusicOne" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicOne" aria-expanded="true" aria-controls="collapsemusicOne">
                                            <h4 class="panel-title">January <span class="badge badge-primary float-right">$324</span></h4>
                                            </a>
                                            <div id="collapsemusicOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingmusicOne">
                                                <div class="panel-body">
                                                    <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of February -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicTwo" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicTwo" aria-expanded="false" aria-controls="collapsemusicTwo">
                                            <h4 class="panel-title">February <span class="badge badge-primary float-right">$965</span></h4>
                                            </a>
                                            <div id="collapsemusicTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicTwo">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of March -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicThree" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicThree" aria-expanded="false" aria-controls="collapsemusicThree">
                                            <h4 class="panel-title">March <span class="badge badge-primary float-right">$965</span></h4>
                                            </a>
                                            <div id="collapsemusicThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicThree">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of April -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicFour" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicFour" aria-expanded="false" aria-controls="collapsemusicFour">
                                            <h4 class="panel-title">April <span class="badge badge-primary float-right">$766</span></h4>
                                            </a>
                                            <div id="collapsemusicFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicFour">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of May -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicFive" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicFive" aria-expanded="false" aria-controls="collapsemusicFive">
                                            <h4 class="panel-title">May <span class="badge badge-primary float-right">$276</span></h4>
                                            </a>
                                            <div id="collapsemusicFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicFive">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of June -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicSix" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicSix" aria-expanded="false" aria-controls="collapsemusicSix">
                                            <h4 class="panel-title">June <span class="badge badge-primary float-right">$433</span></h4>
                                            </a>
                                            <div id="collapsemusicSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicSix">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of July -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicSeven" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicSeven" aria-expanded="false" aria-controls="collapsemusicSeven">
                                            <h4 class="panel-title">July <span class="badge badge-primary float-right">$578</span></h4>
                                            </a>
                                            <div id="collapsemusicSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicSeven">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of August -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicEight" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicEight" aria-expanded="false" aria-controls="collapsemusicEight">
                                            <h4 class="panel-title">August <span class="badge badge-primary float-right">$388</span></h4>
                                            </a>
                                            <div id="collapsemusicEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicEight">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of September -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicNine" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicNine" aria-expanded="false" aria-controls="collapsemusicNine">
                                            <h4 class="panel-title">September <span class="badge badge-primary float-right">$766</span></h4>
                                            </a>
                                            <div id="collapsemusicNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicNine">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of October -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicTen" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicTen" aria-expanded="false" aria-controls="collapsemusicTen">
                                            <h4 class="panel-title">October <span class="badge badge-primary float-right">$766</span></h4>
                                            </a>
                                            <div id="collapsemusicTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicTen">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of  November-->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicEleven" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicEleven" aria-expanded="false" aria-controls="collapsemusicEleven">
                                            <h4 class="panel-title">November <span class="badge badge-primary float-right">$480</span></h4>
                                            </a>
                                            <div id="collapsemusicEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicEleven">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start of December -->
                                        <div class="panel">
                                            <a class="panel-heading collapsed" role="tab" id="headingmusicTwelve" data-toggle="collapse" data-parent="#accordion" href="#collapsemusicTwelve" aria-expanded="false" aria-controls="collapsemusicTwelve">
                                            <h4 class="panel-title">December <span class="badge badge-primary float-right">$824</span></h4>
                                            </a>
                                            <div id="collapsemusicTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingmusicTwelve">
                                                <div class="panel-body">
                                                <div class=" col-sm-12  ">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="x_content">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped jambo_table bulk_action">
                                                                        <thead>
                                                                            <tr class="headings">
                                                                                <th class="column-title" style="width: 40%;">Title </th>
                                                                                <th class="column-title">Credit Price </th>
                                                                                <th class="column-title">Plays </th>
                                                                                <th class="column-title">Total </th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="even pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="odd pointer">
                                                                                <td class=" ">Learning Laravel for beginners</td>
                                                                                <td class=" ">50</td>
                                                                                <td class=" ">25</td>
                                                                                <td class="a-right a-right ">$250</td>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 <hr class="style12">
                                <!-- / This is the top area if the user doesn't have any posts  -->
                            </div>   
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
@section('js/world')
<script  type="text/javascript" src="{{ asset('public/user-dash/js/echarts.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/world.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/custom.js') }}"></script>
@endsection