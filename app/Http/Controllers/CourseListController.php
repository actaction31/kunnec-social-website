<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function showUserCourseList(){
        return view('user.k_course.course_list');
    }
}