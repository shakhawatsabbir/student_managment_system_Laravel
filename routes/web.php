<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\MainDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminStudentController;

Route::get('/',[WebController::class,'index'])->name('home');
Route::get('/login-register',[WebController::class,'loginRegister'])->name('login.register');
Route::post('/user/login',[WebController::class,'userLogin'])->name('front.user.login');
Route::post('/user/register',[WebController::class,'userRegister'])->name('front.user.register');
Route::get('/course',[WebController::class,'allCourses'])->name('front.course');
Route::get('/course/details/{id}',[WebController::class,'details'])->name('front.course.details');
Route::get('/course/about',[WebController::class,'about'])->name('front.course.about');
Route::get('/course/contact',[WebController::class,'contact'])->name('front.contact');


Route::get('/teacher/dashboard',[TeacherDashboardController::class,'index'])->name('teacher.dashboard');
Route::post('/teacher/dashboard/logout',[TeacherDashboardController::class,'logout'])->name('teacher.logout');
Route::get('/teacher/course/add',[CourseController::class,'addCourse'])->name('add.course');
Route::post('/new/course',[CourseController::class,'save'])->name('new.course');
Route::get('/teacher/course/manage',[CourseController::class,'manageCourse'])->name('manage.teacher.course');
Route::post('/teacher/course/delete',[CourseController::class,'deleteCourse'])->name('teacher.course.delete');
Route::get('/edit/course/{id}',[CourseController::class,'editCourse'])->name('edit.course');
Route::post('/update/course',[CourseController::class,'updateCourse'])->name('update.course');
Route::get('/teacher/approved/course',[CourseController::class,'teacherApprovedCourse'])->name('teacher.approved.course');
Route::get('/enrolled/student/{id}',[CourseController::class,'enrolledStudent'])->name('enrolled.student');


Route::get('/student/dashboard',[StudentDashboardController::class,'index'])->name('student.dashboard');
Route::get('/course/enroll/{id}',[StudentController::class,'enrollForm'])->name('course.enroll');
Route::post('/course/enroll/new/{id}',[StudentController::class,'saveEnroll'])->name('new,enroll');
Route::post('/student/logout',[StudentController::class,'studentLogout'])->name('student.logout');
Route::get('/student/edit/{id}',[StudentController::class,'studentEdit'])->name('student.edit');
Route::post('/student/update',[StudentController::class,'studentUpdate'])->name('student.update');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[MainDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/user/add',[MainDashboardController::class,'addUser'])->name('add.user');
    Route::post('/new/user',[MainDashboardController::class,'newUser'])->name('new.user');
    Route::get('/manage/user',[MainDashboardController::class,'manageUser'])->name('manage.user');
    Route::get('/user/edit/{id}',[MainDashboardController::class,'userEdit'])->name('user.edit');
    Route::post('/user/update',[MainDashboardController::class,'updateUser'])->name('update.user');
    Route::post('/user/delete',[MainDashboardController::class,'deleteUser'])->name('delete.user');

    Route::get('/teacher/add',[TeacherController::class,'addTeacher'])->name('add.teacher');
    Route::post('/teacher/new',[TeacherController::class,'newTeacher'])->name('new.teacher');
    Route::get('/teacher/manage',[TeacherController::class,'manageTeacher'])->name('manage.teacher');

    Route::get('/admin/course/manage',[AdminCourseController::class,'manageCourse'])->name('admin.manage.course');
    Route::get('/admin/course/view/{id}',[AdminCourseController::class,'viewCourse'])->name('admin.course.view');
    Route::get('/admin/course/status/{id}',[AdminCourseController::class,'status'])->name('admin.course.status');
    Route::post('/admin/course/delete',[AdminCourseController::class,'delete'])->name('admin.course.delete');

    Route::get('/student/manage',[AdminStudentController::class,'manageStudent'])->name('manage.student');
    Route::get('/student/manage/course',[AdminStudentController::class,'StudentCourse'])->name('manage.student.course');
    Route::get('/student/status/{id}',[AdminStudentController::class,'manageStatus'])->name('student.status');
    Route::get('/update/enroll/status/{id}',[AdminStudentController::class,'updateEnrollStatus'])->name('update.enroll.status');

});
