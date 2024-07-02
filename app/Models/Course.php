<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Course extends Model
{
    private static $course, $image, $imagename , $directory, $imgUrl;

    use HasFactory;

    public  static function saveCourse($request){
        if ($request->course_id)
        {
            self::$course = Course::find($request->course_id);
        }
        else{
            self::$course =  new Course();
        }
        self::$course->teacher_id = Session::get('teacher_id');
        self::$course->course_title = $request->course_title;
        self::$course->course_code = $request->course_code;
        self::$course->fee = $request->fee;
        self::$course->short_description = $request->short_description;
        self::$course->long_description = $request->long_description;
        if ($request->file('image'))
        {
           if (self::$course->image){
               if (file_exists(self::$course->image))
               {
                   unlink(self::$course->image);
               }
           }
            self::$course->image = self::saveImage($request);
        }
        self::$course->save();
    }

    public static function saveImage($request)
    {
        self::$image =$request->file('image');
        self::$imagename= rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'frontEnd/assets/images/course/';
        self::$imgUrl =self::$directory.self::$imagename;
        self::$image->move(self::$directory,self::$imagename);
        return self::$imgUrl;
    }

    public function teacher()
    {
        return $this->belongsTo( Teacher::class);
    }

}
