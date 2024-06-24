<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseSettingsController extends Controller
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
    
    public function showUserCourseSettings(){
        return view('user.k_course.course_settings');
    }
}