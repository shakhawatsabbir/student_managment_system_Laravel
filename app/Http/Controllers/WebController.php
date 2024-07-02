<?php

namespace App\Http\Controllers;

use App\Mail\StudentRegistrationMail;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use Session;

class WebController extends Controller
{
    private $course, $check;
    public function index()
    {
        return view('frontEnd.home.home',[
            'courses'=> DB::table('courses')
                ->join('teachers','courses.teacher_id', '=', 'teachers.id')
                ->select('courses.*','teachers.teacher_name')
                ->where('courses.status', 1)
                ->get()
        ]);
    }

    public function loginRegister()
    {
        return view('frontEnd.login.login-register');
    }

    public function userRegister(Request $request)
    {
        $this->validate($request, [
            'student_name'=> 'required',
            'mobile'=>'required',
            'email'=>'required | unique:students,email'
        ]);
        Student::saveStudent($request);

        /*====Email Mail=====*/
        $this->data = [
            'name' =>$request->name,
            'user_email' =>$request->email,
            'password' =>$request->mobile,
        ];
        Mail::to($request->email)->send(new StudentRegistrationMail($this->data) );
        /*====Email Send=====*/

        return back()->with('massage','Registration Successfully Complete. Please Login Now');
    }

    public function userLogin(Request $request)
    {
         $this->validate($request, [
            'email'=> 'required',
            'password'=>'required'
        ]);
        
        if ($request->user == 1)
        {
            $this->teacher = Teacher::where('teacher_email', $request->email)->where('status' ,1)->first();
            if ($this->teacher) {
                if (password_verify($request->password, $this->teacher->password)) {
                    Session::put('teacher_id', $this->teacher->id);
                    Session::put('teacher_name', $this->teacher->teacher_name);
                    Session::put('teacher_image', $this->teacher->image);
                    return redirect(route('teacher.dashboard'));
                }
                else {
                    return back()->with('massage','Invalid Password');
                }
            }
            else
            {
                return back()->with('massage2','Invalid Email');
            }
        }
        else
        {
            $this->student = Student::where('email', $request->email)->where('status' ,1)->first();
            if ($this->student) {
                if (password_verify($request->password, $this->student->password)) {
                    Session::put('student_id', $this->student->id);
                    Session::put('student_name', $this->student->student_name);
                    Session::put('student_image', $this->student->image);
                    return redirect(route('student.dashboard'));
                }
                else {
                    return back()->with('massage','Invalid Password');
                }
            }
            else
            {
                return back()->with('massage2','Invalid Email');
            }
        }
    }

    public function details($id)
    {
//        return view('frontEnd.course.details',[
//            'course'=> DB::table('courses')
//                ->join('teachers','courses.teacher_id', '=', 'teachers.id')
//                ->select('courses.*','teachers.teacher_name')
//                ->where('courses.id', $id)
//                ->first()
//        ]);

        $this->course = Course::find($id);

        if (Session::get('student_id'))
        {
            $this->enroll = Enroll::where('student_id', Session::get('student_id'))->where('subject_id', $id)->first();
            if($this->enroll)
            {
                $this->check = true;
            }
        }
        return view('frontEnd.course.details',[
            'course'=> $this->course, 'check'=>$this->check
        ]);
    }
    
    public  function allCourses()
    {
        $this->course = Course::all();
        return view('frontEnd.course.courses',[
            'courses'=>$this->course
        ]);
    }

    public function about()
    {
        return view('frontEnd.about.about');
    }
     public function contact()
    {
        return view('frontEnd.contact.contact');
    }

}
