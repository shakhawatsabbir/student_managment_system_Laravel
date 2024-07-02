@extends('frontEnd.student.master')
@section('title')
    Update Student
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
                                    <a class="edu-btn" href="#">Update Profile<i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mx-auto">
                    <div class=" login-register-page-wrapper checkout-page-style">
                        <div class="login-form-box">
                            <h3 class="mb-30">Student Update</h3>
                            <form class="login-form" action="{{route('student.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="student_id" value="{{$student->id}}" />
                                <div class="input-box mb--30">
                                    <input type="text" name="student_name" value="{{$student->student_name}}" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="number"  name="mobile" value="{{$student->mobile}}" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="email"  name="email" value="{{$student->email}}" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password"  name="old_password" placeholder="Old Password" required />
                                </div>
                                <div><p class="text-danger">{{session('invalidMassage')}}</p></div>
                                <div class="input-box mb--30">
                                    <input type="password"  name="new_password" placeholder="New Password" />
                                </div>
                                <div><p class="text-danger">{{session('notequalMassage')}}</p></div>
                                <div class="input-box mb--30">
                                    <input type="file"  name="image"  />
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Update</span>
                                </button>
                                <div class="input-box">
                                    <input id="checkbox-2" type="checkbox" />
                                    <label for="checkbox-2">I read & agree the terms & conditions.</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
