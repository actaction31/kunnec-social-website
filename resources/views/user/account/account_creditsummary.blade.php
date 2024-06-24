@extends('layouts.user')
 @section('title', 'Credit Payments')
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
                <!--
                <li>
                    <a data-toggle="tab" href="#courses">
                        <i class="green ace-icon fas fa-graduation-cap  bigger-120"></i>
                        Courses
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#tutor">
                        <i class="green ace-icon fa fa-chalkboard-teacher bigger-120"></i>
                        Tutoring
                    </a>
                </li> -->
                <li>
                    <a data-toggle="tab" href="#record">
                        <i class="green ace-icon fa fa-microphone bigger-120"></i>
                        Recording
                    </a>
                </li>
                <!--
                <li>
                    <a data-toggle="tab" href="#live">
                        <i class="green ace-icon fas fa-film bigger-120"></i>
                        Shows
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#music">
                        <i class="green ace-icon fas fa-music bigger-120"></i>
                        Music
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#books">
                        <i class="green ace-icon fas fa-book bigger-120"></i>
                        Books
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#pod">
                        <i class="green ace-icon fas fa-podcast bigger-120"></i>
                        Pods
                    </a>
                </li>-->
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
                                    <p>Current amount to be paid.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card ml-3">
                            <div class=" col-sm-12 ">
                                <div class="tile-stats">
                                    <span>Total Revenue</span>
                                    <h2>$ 1,231,809</h2>
                                    <p>Total amount that has been paid.</p>
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
                                    <h5>Payment World Map</h5>
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

                

                <!--Recording Tab -->
                <div id="record" class="tab-pane">
                    <div class="row">
                        <div class="card ml-3 p-3 col-sm">
                            <div class=" col-sm-12  ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h5><i class="fas fa-microphone"></i> Recording <small>Total</small> <span class="badge badge-danger">$4324</span></h5>
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
        </div>
    </div>
</div>
@endsection
@section('js/world')
<script  type="text/javascript" src="{{ asset('public/user-dash/js/echarts.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/world.js') }}"></script>
<script  type="text/javascript" src="{{ asset('public/user-dash/js/custom.js') }}"></script>
@endsection