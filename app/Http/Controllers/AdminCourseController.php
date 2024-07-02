<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    private $course;

    public function manageCourse()
    {
        return view('backEnd.course.manage-course',[
            'courses'=> Course::all()
        ]);
    }
    public function viewCourse($id)
    {
        return view('backEnd.course.view',[
            'course' => Course::find($id)
        ]);

    }
    public function status($id)
    {
        $this->course = Course::find($id);
        if ($this->course->status == 1)
        {
            $this->course->status = 0;
        }
        else
        {
            $this->course->status = 1;
        }
        $this->course->save();

        return back()->with('massage','Course Status Update success');
    }

    public  function delete(Request $request)
    {
        $this->course = Course::find($request->course_id);
        if ($this->course->status == 0){
            if(file_exists($this->course->imahe))
            {
                unlink($this->course->imahe);
            }
            $this->course->delete();
            return back()->with('massage','Course delete success');
        }
        else{
            return back()->with('massage2','This course is published. Please unpublished this course.');
        }


    }
}
