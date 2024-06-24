@extends('layouts.user')
 @section('title', 'Course Room')
@section('additional-css')
@endsection
@section('content')

<div class="col-lg-12 rounded mb-2 " style="background-color:#009900;">
    <div class="row">
		<div class="col-auto mr-auto mt-2 pb-2">
            <img src="{{ asset('images/K_Logo6.png') }}" height="40px" width="60px"/> <img src="{{asset('user-dash/images/users/profiles/5.jpg')}}" width="30px" height="30px" class="rounded-circle img-border box-shadow-1" alt="Card image"><font color="#FFFFFF" style="font-size:18px"> Sabrina Course</font>   
        </div>
        <div class="col-auto mt-2">
			<button class="btn btn-danger btn-sm" type="button" href="#!" data-toggle="modal" data-target="#exit_courseModal" id="">Exit Course</button>
            
            <br class="d-none d-sm-block">
        </div>
    </div>
 </div>			
            
<div class="card mb-3 mt-3 mt-lg-0">
    <div class="container">
		<h5>Oracle DBA 11g/12c - Database Administration for Junior DBA</h5>      
        <p class="fs--1 mb-2 mb-md-3"><small class="mr-1">Created by: </small><img src="{{asset('user-dash/images/users/profiles/5.jpg')}}" width="25px" height="25px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina
        </p>
                
		<div class="d-flex justify-content-center">
			<div class="p-2">
				<video controls autoplay>
                    <source src="{{asset('user-dash/k_course/videos/mad.mp4')}}" type="video/mp4">Your browser does not support the video tag.
					</source>
                </video>
			</div>
        </div>
				
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-success w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                            <span class="fas fa-plus mr-1" data-fa-transform="shrink-3"></span> Introduction  ( 37:15 ) - 4 Videos
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Length</th>
										            <th scope="col">Viewed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Accomplish Communication Correctly</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progresss-bar progress-bar-striped bg-success" role="progress-bar" style="width:100%" aria-valuenow="0" araia-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>6:18</td>
                                            <td>
                                                <i class="fas fa-check-circle" style="color: #009900">
                                                </i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Anything is Possible</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progresss-bar progress-bar-striped bg-success" role="progress-bar" style="width:25%" aria-valuenow="0" araia-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>4:25</td>
										    <td>
                                                <i class="fas fa-eye" style="color: #009900"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Always be your best</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>07:48</td>
                                        </tr>
									    <tr>
                                            <th scope="row">4</th>
                                            <td>Go to the top</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100">    
                                                    </div>
                                                </div>
                                            </td>
                                            <td>07:48</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-success w-100" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="fas fa-plus mr-1" data-fa-transform="shrink-3"></span> Process Architecture  ( 22:12 ) - 6 Videos
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Length</th>
                                            <th scope="col">Viewed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Accomplish Communication Correctly</td>
                                            <td><div class="progress"><div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100"></div></div></td>
                                            <td>02:47</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Anything is Possible</td>
                                            <td><div class="progress"><div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100"></div></div></td>
                                            <td>03:34</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Always be your best</td>
                                            <td><div class="progress"><div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100"></div></div></td>
                                            <td>07:48</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Accomplish Communication Correctly</td>
                                            <td><div class="progress"><div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100"></div></div></td>
                                            <td>02:47</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Anything is Possible</td>
                                            <td><div class="progress"><div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100"></div></div></td>
                                            <td>03:34</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Always be your best</td>
                                            <td><div class="progress"><div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100"></div></div></td>
                                            <td>07:48</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-success w-100" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="fas fa-plus mr-1" data-fa-transform="shrink-3"></span> Data Expand  ( 47:42 ) - 3 Videos
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Length</th>
                                            <th scope="col">Viewed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Accomplish Communication Correctly</td>
                                            <td><div class="progress"><div class="progresss-bar progress-bar-striped bg-success" role="progress-bar" style="width:25%" aria-valuenow="0" araia-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>02:47</td>
                                            <td><i class="fas fa-eye" style="color: #009900"></i></td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Anything is Possible</td>
                                            <td><div class="progress"><div class="progresss-bar" role="progress-bar" aria-valuenow="0" aria-valuemax="100"></div></div></td>
                                            <td>03:34</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Accomplish Communication Correctly</td>
                                            <td><div class="progress"><div class="progresss-bar progress-bar-striped bg-success" role="progress-bar" style="width:100%" aria-valuenow="0" araia-valuemin="0" aria-valuemax="100"></div></div></td>
                                            <td>02:47</td>
                                            <td><i class="fas fa-check-circle" style="color: #009900"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			
<!-- End of COntent -->			

@endsection
@section('additional-js')
@endsection