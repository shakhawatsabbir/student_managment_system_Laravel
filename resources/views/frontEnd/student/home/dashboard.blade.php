@extends('frontEnd.student.master')
@section('title')
        Student Dashboard
@endsection
@section('studentContent')
    <div class="edu-instructor-profile-area edu-section-gap bg-color-white ">
        <div class="container mt-4">
            <div class="row g-5">
                <div class="col-lg-4 pr--55">

                    <div class="instructor-profile-left">
                        <div class="inner">
                            <div class="thumbnail">
                                @if(file_exists($student->image))
                                    <img src="{{asset($student->image)}}" alt="Student Image" style="height: 170px; width: 180px">
                                @else
                                    <img src="{{asset('frontEnd')}}/student/image/avater.png" alt="Student Image" style="height: 170px; width: 180px">
                                @endif
                            </div>
                            <div class="content">
                                <h5 class="title">{{$student->student_name	}}</h5>
                                <span class="subtitle">Student</span>
                                <div class="contact-with-info">
                                    <p><span>Email:</span> <a href="#">{{$student->email}}</a></p>
                                    <p><span>Phone:</span> <a href="">{{$student->mobile}}</a></p>
                                </div>
                                <ul class="social-share bg-transparent justify-content-center medium-size">
                                    <li><a href="#"><i class="icon-Fb"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                                    <li><a href="#"><i class="icon-Twitter"></i></a></li>
                                </ul>
                                <div class="contact-btn">
                                    <a class="edu-btn" href="{{route('student.edit',['id'=>$student->id])}}">Update Profile<i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="instructor-profile-right">
                        <div class="inner">
                            <div class="section-title text-start">
                                <div><p class="text-center text-success">{{session('massage')}}</p></div>
                                <span class="pre-title">My Applied Recent Course</span>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course Title</th>
                                        <th>Trainer Name</th>
                                        <th>Course Fee</th>
                                        <th>Enroll Status</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($enrolles as $enrolle)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$enrolle->course_title}}</td>
                                            <td>{{$enrolle->teacher_name}}</td>
                                            <td>{{number_format($enrolle->fee)}}</td>
                                            <td>{{$enrolle->status == 1 ? 'Success' : 'Pending'}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
