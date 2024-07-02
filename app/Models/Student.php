<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student;

    public static function saveStudent($request)
    {
        self::$student = new Student();
        self::$student->student_name = $request->student_name;
        if ($request->file('image'))
        {
            if ( self::$student->image )
            {
                if (file_exists(self::$student->image ))
                {
                    unlink(self::$student->image );
                }
            }
            self::$student->image = self::saveImage($request);
        }
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->password = bcrypt($request->mobile) ;
        self::$student->save();


    }

}
