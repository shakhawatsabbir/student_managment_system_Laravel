<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    private $student , $data ,$enrolls;
    public function manageStudent()
    {
        return view('backEnd.student.manage',[
            'students'=>Student::all()
        ]);
    }

    public function manageStatus($id)
    {
        $this->student = Student::find($id);

        if ($this->student->status == 1)
        {
            $this->student->status = 0;
        }
        else
        {
            $this->student->status = 1;
        }
        $this->student->save();
        return back()->with('massage','Status Update success');
    }

    public function StudentCourse()
    {
        $this->enrolls =Enroll::orderBy('id', 'desc')-> get();
        foreach($this->enrolls as $key => $enroll)
        {
            $this->course = Course::find($enroll->subject_id);
            $this->data[$key]['enroll_id'] = $enroll->id;
            $this->data[$key]['course_title'] = $this->course->course_title;
            $this->data[$key]['teacher_name'] = Teacher::find($this->course->teacher_id)->teacher_name;
            $this->data[$key]['student_name'] = Student::find($enroll->student_id)->student_name;
            $this->data[$key]['student_mobile'] = Student::find($enroll->student_id)->mobile;
            $this->data[$key]['student_email'] = Student::find($enroll->student_id)->email;
            $this->data[$key]['enroll_status'] = $enroll->enroll_status;
            $this->data[$key]['payment_status'] = $enroll->payment_status;
        }
        return view('backEnd.student.manage-course',[
            'enrolls'=>$this->data
        ]);
    }

    public function updateEnrollStatus($id)
    {
        $this->enrolls = Enroll::find($id);
        $this->enrolls->enroll_status = 'Complete';
        $this->enrolls->payment_status = 'Complete';
        $this->enrolls->save();
        return back()->with('massage','Enroll Status Update success');
    }
}
