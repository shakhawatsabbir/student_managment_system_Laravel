<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teacher;

    public function addTeacher()
    {
        return view('backEnd.teacher.add-teacher');
    }


    public function newTeacher(Request $request)
    {
        Teacher::saveTeacher($request, $this->getTeacherCode($request));
        return back()->with('massage','New Teacher create Success');
    }

    public function manageTeacher()
    {

        return view('backEnd.teacher.manage',[
            'teachers'=>Teacher::all(),
        ]);
    }


    public function getTeacherCode($request)
    {
        $this->teacher = Teacher::orderBy('id','desc')->first();
        if ($this->teacher)
        {
            $this->id = $this->teacher->id + 1;
        }
        else
        {
            $this->id = 1;
        }

        $this->updateString = preg_replace('/[^A-Za-z]/', '',trim($request->teacher_name));

        $this->name = strtoupper(substr($this->updateString , 3,4));
        $this->year = date('Y') ;
        $this->rand = rand(5,999);

        $this->code = $this->name. $this->rand. $this->year.$this->id;
        return $this->code;
    }
}
