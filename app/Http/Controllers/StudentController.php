<?php

namespace App\Http\Controllers;

use App\Mail\StudentRegistrationMail;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
class StudentController extends Controller
{
    private $student, $enroll, $image, $imageNewName, $directory, $imgUrl, $data=[];

    public function enrollForm($id)
    {
        if (Session::get('student_id'))
        {
            $this->enroll = new Enroll();
            $this->enroll->subject_id = $id;
            $this->enroll->student_id = Session::get('student_id');
            $this->enroll->enroll_date = date('Y-m-d');
            $this->enroll->enroll_timestamp = strtotime(date('Y-m-d'));
            $this->enroll->save();
            return redirect(route('student.dashboard'))->with('massage', 'New Course registration Successfully');
        }
        else{
            return view('frontEnd.enroll.enroll-form',['id'=> $id]);
        }
    }

    public function saveEnroll(Request $request, $id)
    {
        $this->student = Student::where('email', $request->email)->first();
        if ($this->student)
        {
            $this->enroll = Enroll::where('student_id', $this->student->id)->where('subject_id', $id)->first();
            if($this->enroll)
            {
                return redirect(route('front.course.details',$id))->with('massage', 'You are already this course enroll. Please try again another Course');
            }
        }
        else{

            $this->student = new Student();
            $this->student->student_name = $request->student_name;
            $this->student->email = $request->email;
            $this->student->mobile = $request->mobile;
            $this->student->password = bcrypt($request->mobile) ;
            $this->student->save();

            Session::put('student_id', $this->student->id);
            Session::put('student_name', $this->student->student_name);


            /*====Email Mail=====*/
            $this->data = [
                'name' =>$request->name,
                'user_email' =>$request->email,
                'password' =>$request->mobile,
            ];
            Mail::to($request->email)->send(new StudentRegistrationMail($this->data) );
            /*====Email Send=====*/
        }


        $this->enroll = new Enroll();
        $this->enroll->subject_id = $id;
        $this->enroll->student_id = $this->student->id;
        $this->enroll->enroll_date = date('Y-m-d');
        $this->enroll->enroll_timestamp = strtotime(date('Y-m-d'));
        $this->enroll->save();

        return redirect(route('front.course.details',$id))->with('massage', 'Registration successfully Done. Please Login Your Profile .');
    }


    public function studentLogout(Request $request)
    {
        Session::forget('student_id');
        Session::forget('student_name');

        return redirect('/');
    }

    public function studentEdit($id)
    {
        return view('frontEnd.student.profile.update',[
            'student'=> Student::find($id)
        ]);
    }

    public function studentUpdate(Request $request)
    {
        $this->student = Student::find($request->student_id);
        if ($request->old_password)
        {
            if (password_verify($request->old_password ,$this->student->password ))
            {
                $this->student->student_name = $request->student_name;
                $this->student->email = $request->email;
                $this->student->mobile = $request->mobile;
                if ($request->new_password)
                {
                    if (password_verify($request->old_password ,$this->student->password ))
                    {
                        $this->student->password = bcrypt($request->new_password) ;
                    }
                    else{
                        return back()->with('invalidMassage','Your Old password Incorrect ');
                    }
                }
                if ($request->image)
                {
                    if ($this->student->image)
                    {
                        if (file_exists($this->student->image))
                        {
                            unlink($this->student->image);
                        }
                        $this->student->image = $this->getImageUrl($request) ;
                    }else{
                        $this->student->image = $this->getImageUrl($request) ;
                    }
                }
                $this->student->save();
            }
            else{
                return back()->with('invalidMassage','Your Old password Incorrect ');
            }
        }

        return redirect(route('student.dashboard'))->with('massage','Your Data update Success');

    }


    public function getImageUrl($request)
    {
        $this->image = $request->file('image');
        $this->imageNewName = 'st'.rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'frontEnd/student/image/';
        $this->imgUrl = $this->directory.$this->imageNewName;
        $this->image->move( $this->directory,$this->imageNewName);
        return $this->imgUrl;
    }
}
