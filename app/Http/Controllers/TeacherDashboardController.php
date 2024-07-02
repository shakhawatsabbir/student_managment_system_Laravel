<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Session;
use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    public function index()
    {


        $this->courses = Course::where('teacher_id', Session::get('teacher_id'))->get();
        $this->approveds = Course::where('teacher_id', Session::get('teacher_id'))->where('status', 1)->get();

        return view('frontEnd.teacher.home.dashboard',[
            'courses'=>$this->courses,
            'approveds'=>$this->approveds
        ]);
    }

    public function logout()
    {
        Session::forget('teacher_id');
        Session::forget('teacher_name');
        return redirect('/');
    }


}
