@extends('layouts.user')
@section('title', 'Tasks')
@section('css/task')
<link href="{{ asset('user-dash/css/task.css') }}" rel="stylesheet"></link>
    <script type="text/javascript" src="{{ asset('user-dash/js/calendarjs.js') }}"></script>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');


    </style>
@endsection
@section('content')
<!-- Create post -->

<div class="card">
    <div class="card-body">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
                <div class="notification-avatar">
                    <div class="avatar avatar-5xl mr-3 justify-content-center">
                        <img class="img-thumbnail img-fluid rounded-circle" src="{{asset('user-dash/images/users/profiles/1.jpg')}}" alt="" />
                    </div>
                </div> 
            </div>
            <div class="col-md-auto">
                <div class="row">
                    <div class="col">
                        <h1 class="display-4">{{Auth::user()->username}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>
                            My Scheduler:
                            <small class="text-muted">Organize and track improvement</small>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="organize" role="tabpanel" data-filter-list="content-list-body">
                <div class="tile" id="tile-1">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="calendar-tab" data-toggle="tab" href="#calendar" role="tab" aria-controls="calendar" aria-selected="true"><i class="fas fa-calendar"></i> Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-home"></i> Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-id-card"></i> To Do List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-map-signs"></i> Contacts</a>
                            </li>
                        <div class="slider"></div>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="calendar" role="tabpanel" aria-labelledby="calendar-tab">
                            <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>Add events  to your calendar</h3>
                                </div>
                            </div>
                            </br>
                            <div class="card">
                                <div class="card-header1">
                                    Calendar
                                </div>
                                <div class="card-body">
                                    <div class="contents">
                                        <div id="myCalendar" style="max-width: 100%;">
                                        </div>
                                        <br>
                                        <div class="card">
                                            <div class="card-header1">
                                                Extra Calendar Controls
                                            </div>
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: #009900;">
                                                            Clear Calendar & Notifications
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <button type="button" class="btn btn-success btn-sm" onclick="turnOnEventNotifications();">Turn on Event Notifications</button>
                                                            <button type="button" class="btn btn-success btn-sm" onclick="alert( calendarInstance.getAllGroups() );">Show All Groups Created</button>
                                                            <button type="button" class="btn btn-danger btn-sm" onclick="calendarInstance.clearAllGroups();">Clear All Groups</button>
                                                            <button type="button" class="btn btn-danger btn-sm"onclick="calendarInstance.clearEvents();" >Clear Calendar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #009900;">
                                                            Export Calendar Events as a file
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <button class="btn btn-warning btn-sm" onclick="calendarInstance.exportAllEvents( 'csv' );"> (csv)</button>
                                                            <button class="btn btn-warning btn-sm" onclick="calendarInstance.exportAllEvents( 'xml' );">(xml)</button>
                                                            <button class="btn btn-warning btn-sm" onclick="calendarInstance.exportAllEvents( 'json' );"> (json)</button>
                                                            <button class="btn btn-warning btn-sm" onclick="calendarInstance.exportAllEvents( 'text' );"> (text)</button>
                                                            <button class="btn btn-warning btn-sm" onclick="calendarInstance.exportAllEvents( 'ical' );"> (ical)</button>
                                                            <button class="btn btn-warning btn-sm" onclick="calendarInstance.exportAllEvents( 'md' );">(md)</button>
                                                            <button class="btn btn-warning btn-sm" onclick="calendarInstance.exportAllEvents( 'html' );">(html)</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>Add a Note</h3>
                                </div>
                                <div class="cssCircle plusSign" href="#!" data-toggle="modal" data-target="#NoteModal" id="">&#43;</div>
                            </div>
                            </br>
                            <div class="card">
                                <div class="card-header1">
                                    Notes
                                </div>
                                <div class="card-body">
                                    <div style="background-color:#e9ffe9;width: 100%; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row pl-3 mt-3 justify-content-between">
                                            <h5 class="card-title">Title of Note</h5>
                                            <div class="col-inline pr-3">
                                                <span >Just Now</span>
                                            </div>
                                        </div>
                                        <hr style="12">
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fas fa-edit fa-sm"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-trash fa-sm"></i></li>
                                        </ul>    
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div style="background-color:#e9ffe9;width: 100%; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row pl-3 mt-3 justify-content-between">
                                            <h5 class="card-title">Title of Note</h5>
                                            <div class="col-inline pr-3">
                                                <span >Yesterday</span>
                                            </div>
                                        </div>
                                        <hr style="12">
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fas fa-edit fa-sm"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-trash fa-sm"></i></li>
                                        </ul>    
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div style="background-color:#e9ffe9;width: 100%; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                        <div class="row pl-3 mt-3 justify-content-between">
                                            <h5 class="card-title">Title of Note</h5>
                                            <div class="col-inline pr-3">
                                                <span >3 Days Ago</span>
                                            </div>
                                        </div>
                                        <hr style="12">
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fas fa-edit fa-sm"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-trash fa-sm"></i></li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>What do you have to do?</h3>
                                </div>
                                
                            </div>
                            </br>
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="d-flex justify-content-center row">
                                        <div class="col-md-8">
                                            <div class="p-3 bg-white">
                                                <div class="d-flex align-items-center">
                                                    <div class="container flex lists">
                                                        <div class="one_list">
                                                            <div class="header_title">
                                                                <span5 class="input_title">Your Quick To Do List</span5>
                                                                
                                                            </div>
                                                            <form id="add_task">
                                                                <input type="text" id="input_task" name="input" placeholder="New task">
                                                                <button type="button" id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                            </form>
                                                            <div>
                                                                <ul id="task_list">
                                                                     <!--Your 2do's will be here -->
                                                                </ul>	
                                                                <h2 id="completed_title" style="color:#ffffff;">Completed Tasks</h2>
                                                                <ul id="completed_list"></ul>				
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>Add Contacts</h3>
                                </div>
                            </div>
                            </br>
                            <div class="card">
                                <div class="card-header1">
                                    Contacts
                                </div>
                                <div class="container">
                                    <table id='table1' class="table">
                                        <thead>
                                            <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <td>
                                                <input id='firstName' class='form-control' type="text" />
                                            </td>
                                            <td>
                                                <input id='lastName' class='form-control' type="text" />
                                            </td>
                                            <td>
                                                <input id='phone' class='form-control' type="text" />
                                            </td>
                                            <td>
                                                <input id='email' class='form-control' type="text" />
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <button id='add' class='btn btn-success btn-block' >Add</button>
                                                </div>
                                            </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     
<!-- End right side bar for users list -->


@endsection
@section('additional-js')

<script>
    $("#tile-1 .nav-tabs a").click(function() {
  var position = $(this).parent().position();
  var width = $(this).parent().width();
    $("#tile-1 .slider").css({"left":+ position.left,"width":width});
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});
</script>
<script>

var input = document.querySelector("#input_task");
var completedList = document.getElementById("completed_list");
var completedTitle = document.getElementById("completed_title");
var taskList = document.getElementById("task_list");
completedTitle.style.display = "none";

// Check if input is empty
document.getElementById("add_button").addEventListener("click", checkInput);
function checkInput() {
	if (input.value != "") {
		newTask();
	}
}

// Add a new task
function newTask() {
	var list = document.getElementById("task_list");
	var li = document.createElement("li"); 
	var checkbox = document.createElement("input");
		checkbox.setAttribute("type", "checkbox");
		checkbox.checked = false;
	var span = document.createElement("span5");
		span.setAttribute("class", "input");
	var edit = document.createElement("button");
		edit.setAttribute("type", "button");
		edit.setAttribute("class", "edit_task_button");
	var del = document.createElement("button");
		del.setAttribute("type", "button");
		del.setAttribute("class", "delete");
	
	list.prepend(li);
	li.appendChild(checkbox);
	li.appendChild(span);
	li.appendChild(edit);
	li.appendChild(del);

	span.innerHTML = input.value ;
	edit.innerHTML = '<i class="fas fa-pencil-alt" aria-hidden="true"></i>';
	del.innerHTML = '<i class="fa fa-trash" aria-hidden="true"></i>';
	input.value = "";

	checkbox.addEventListener("click", completeTask);
	edit.addEventListener("click", editTask);
	del.addEventListener("click", deleteTask);
};

// Edit a task
document.querySelectorAll("button[class='edit_task_button'").forEach(editBtn => editBtn.addEventListener("click", editTask));
function editTask() {
	this.parentNode.children[0].checked = false;
	this.parentNode.children[0].disabled = true;;
	this.previousElementSibling.setAttribute('class', 'span_editable');
	this.previousElementSibling.setAttribute('contenteditable', '');
	this.innerHTML = '<i class="fa fa-check" aria-hidden="true"></i>';
	this.style.backgroundColor = "mediumseagreen";
	this.removeEventListener("click", editTask);
	this.addEventListener("click", validateEditTask);
}

// Validate changes
function validateEditTask() {
	this.parentNode.children[0].disabled = false;;
	this.previousElementSibling.removeAttribute('class', 'span_editable');
	this.previousElementSibling.removeAttribute('contenteditable', '');
	this.innerHTML = '<i class="fas fa-pencil-alt" aria-hidden="true"></i>';
	this.style.backgroundColor = "yellow";
	this.removeEventListener("click", validateEditTask);
	this.addEventListener("click", editTask);
}

// Mark a task as complete
document.querySelectorAll("input[type=checkbox]").forEach(box => box.addEventListener("click", completeTask));
function completeTask() {
	this.checked = true;
	this.nextElementSibling.classList.toggle("complete");
	this.nextElementSibling.nextElementSibling.style.visibility = "hidden";
	this.removeEventListener("click", completeTask);
	this.addEventListener("click", uncompleteTask);
	completedList.prepend(this.parentNode);
	isEmptyList();
};

// Uncheck a task
function uncompleteTask() {
	this.checked = false;
	this.nextElementSibling.classList.toggle("complete");
	this.nextElementSibling.nextElementSibling.style.visibility = "visible";
	this.removeEventListener("click", uncompleteTask);
	this.addEventListener("click", completeTask);
	taskList.prepend(this.parentNode);
	isEmptyList();
}

// Delete a task
document.querySelectorAll(".delete").forEach(delBtn => delBtn.addEventListener("click", deleteTask));
function deleteTask() {
	this.parentNode.parentNode.removeChild(this.parentNode);
	isEmptyList();
};

// Edit title list
document.querySelector(".edit_title_button").addEventListener("click", editTitleList);
function editTitleList() {
	this.previousElementSibling.setAttribute('class', 'title_editable input_title');
	this.previousElementSibling.setAttribute('contenteditable', '');
	this.innerHTML = '<i class="fa fa-check" aria-hidden="true"></i>';
	this.style.backgroundColor = "mediumseagreen";
	this.removeEventListener("click", editTitleList);
	this.addEventListener("click", validateEditTitleList);
}

// Validate title changes
function validateEditTitleList(){
	this.parentNode.children[0].disabled = false;;
	this.previousElementSibling.removeAttribute('class', 'title_editable');
	this.previousElementSibling.setAttribute('class', 'input_title');
	this.previousElementSibling.removeAttribute('contenteditable', '');
	this.innerHTML = '<i class="fas fa-pencil-alt" aria-hidden="true"></i>';
	this.style.backgroundColor = "yellow";
	this.removeEventListener("click", validateEditTitleList);
	this.addEventListener("click", editTitleList);
}

// Check if the complete list is empty
function isEmptyList() {
	if (completedList.hasChildNodes() == true) {
		completedTitle.style.display = "inline";
	} else {
		completedTitle.style.display = "none";
	}
}

</script>

<script>

var addressBook = (function() {
  var people = [{
    firstName: '',
    lastName: '',
    phone: '',
    email: ''
  }];
  //cash the dom
  var table = $('#table1');
  var tbody = table.find('tbody');
  var $firstName = table.find('#firstName');
  var $lastName = table.find('#lastName');
  var $phone = table.find('#phone');
  var $email = table.find('#email');
  var $button = table.find('#add');
  var $btnSave = table.find('#save');
  var $btnEdit = table.find('#edit');
  var $btnRemove = table.find('#remove');
  var $input = table.find(".edit");

  //bind events
  $button.on('click', addPerson);
  table.on('click', '#remove', deletePerson);
  /*table.on("change",'.edit' ,editPerson);*/
  console.log($input);
  _render();

  //render
  function _render() {
    tbody.html('');
    var length = people.length;
    for (var i = 0; i < length; i++) {
      table.prepend('<tr><td><input class="edit" type="text" value="' + people[i].firstName + '" ></td><td><input class="edit" type="text" value="' + people[i].lastName + '" ></td><td><input type="text" class="edit" value="' + people[i].phone + '" ></td><td><input type="text" class="edit" value="' + people[i].email + '" ></td><td> <button id="remove" class="btn btn-danger btn-block">X</button></td></tr>');
    }
  }

  //custom function
  function addPerson() {
    var person = {
      firstName: $firstName.val(),
      lastName: $lastName.val(),
      phone: $phone.val(),
      email: $email.val()
    };
    people.push(person);
    $firstName.val('');
    $lastName.val('');
    $phone.val('');
    $email.val('');
    _render()
  }

  function deletePerson(event) {
      var element = event.target.closest('tr');
      var i = table.find('td').index(element);
      people.splice(i, 1);
      _render();
    }
    /*
    function editPerson(event){
       var element=event.target.closest('tr');
    	var i=table.find('tr').index(element);
      var index = (table.find('tr').length -i)-1;
      console.log(element.firstChild());
      var person= {
      firstName: ,
      lastName: $lastName.val(),
      phone: $phone.val()
      };
        _render();
    }
*/
  return {
    addPerson: addPerson,
    deletePerson: deletePerson
  };

})();
</script>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>


@endsection