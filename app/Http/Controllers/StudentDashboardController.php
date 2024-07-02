<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Enroll;
use App\Models\Student;
class StudentDashboardController extends Controller
{
    private $enrolls, $student;

    public function index()
    {
        $this->student = Student::where('id', Session::get('student_id'))->first();

        return view('frontEnd.student.home.dashboard',[
            'enrolles'=>DB::table('courses')
                        ->join('enrolls', 'enrolls.subject_id','=','courses.id')
                        ->join('teachers','teachers.id','=','courses.teacher_id')
                        ->select('courses.*','teachers.teacher_name',)
                        ->where('enrolls.student_id', Session::get('student_id'))
                        ->get(),
            'student'=>$this->student
        ]);
    }
}
