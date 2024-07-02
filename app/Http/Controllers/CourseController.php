<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use DB;
use Session;

class CourseController extends Controller
{

    private $course;

    public function addCourse()
    {
        return view('frontEnd.teacher.course.add');
    }

    public  function save(Request $request)
    {
        Course::saveCourse($request);
        return back()->with('massage','New Course create Success');
    }

    public function manageCourse()
    {

        return view('frontEnd.teacher.course.manage',[
            'courses'=> DB::table('courses')
                ->join('teachers','courses.teacher_id', '=', 'teachers.id')
                ->where('courses.teacher_id',Session::get('teacher_id') )
                ->select('courses.*','teachers.teacher_name')
                ->get()
        ]);
    }

    public function deleteCourse(Request $request)
    {
        $this->course = Course::find($request->course_id);
        if ($this->course->status == 0){
            if (file_exists($this->course->image))
            {
                unlink($this->course->image);
            }
            $this->course->delete();
            return back()->with('massage','Course delete success');
        }
        else{
            return back()->with('massage2','This course is published. Please unpublished this course.');
        }

    }
    public function editCourse($id)
    {
        return view('frontEnd.teacher.course.edit',[
            'course'=> Course::find($id)
        ]);
    }

    public function updateCourse(Request $request)
    {
        Course::saveCourse($request);
        return redirect(route('manage.teacher.course'))->with('massage','Course update Success');
    }

    public function teacherApprovedCourse()
    {
        $this->course = Course::where('teacher_id', Session::get('teacher_id'))->where('status', 1)->get();
        return view('frontEnd.teacher.course.approved-course',[
            'courses'=>$this->course
        ]);
    }

    public  function enrolledStudent($id)
    {

        return view('frontEnd.teacher.course.enrolld-student',[
        'courses' => DB::table('enrolls')
            ->join('students','students.id','=','enrolls.student_id')
            ->join('courses','courses.id','=','enrolls.subject_id')
            ->where('enrolls.subject_id',$id)
            ->select('enrolls.*','students.student_name','courses.course_title')
            ->get()
    ]);
    }
}
