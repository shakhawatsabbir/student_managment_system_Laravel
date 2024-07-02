<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    private static $teacher, $image, $imageNewName, $imgUrl, $drictory;

    use HasFactory;

    public static function saveTeacher($request, $code)
    {
        self::$teacher = new Teacher();
        self::$teacher->teacher_name = $request->teacher_name;
        self::$teacher->teacher_email = $request->teacher_email;
        self::$teacher->teacher_code = $code ;
        self::$teacher->teacher_mobile = $request->teacher_mobile;
        self::$teacher->password = bcrypt($request->teacher_mobile);
        self::$teacher->address = $request->address;
        if ($request->image)
        {
            self::$teacher->image = self::saveImage($request);
        }
        self::$teacher->save();
    }

    private function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$drictory = 'backEnd/assets/img/teacher-image/';
        self::$imgUrl =  self::$drictory . self::$imageNewName;
        self::$image->move(self::$drictory , self::$imageNewName);
        return self::$imgUrl;
    }
}
