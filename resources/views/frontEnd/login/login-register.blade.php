@extends('frontEnd.master')

@section('content')
    <div class="login-register-page-wrapper edu-section-gap bg-color-white">
        <div class="container checkout-page-style">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="login-form-box">
                        <h3 class="mb-30">Login</h3>
                        <form class="login-form" action="{{route('front.user.login')}}" method="post">
                            @csrf
                            <div class="input-box mb--30">
                                <input type="text" placeholder="Username or Email" name="email" />
                                <spen class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</spen>
                                <p class="text-danger">{{session('massage2')}}</p>
                            </div>
                            <div class="input-box mb--30">
                                <input type="password" placeholder="Password" name="password" />
                                <spen class="text-danger">{{$errors->has('password') ? $errors->first('password') : ''}}</spen>
                                <p class="text-danger">{{session('massage')}}</p>
                            </div>
                            <div class="input-box mb--30">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user" id="flexRadioDefault1" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">Teacher</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user" id="flexRadioDefault2" checked value="0">
                                    <label class="form-check-label" for="flexRadioDefault2">Student</label>
                                </div>
                            </div>
                            <button class="rn-btn edu-btn w-100 mb--30" type="submit">Login</button>
                            <div class="input-box">
                                <a href="#" class="lost-password">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form-box">
                        <h3 class="mb-30">Student Register</h3>
                        <div><p class="text-success text-center">{{session('massage')}}</p></div>
                        <form class="login-form" action="{{route('front.user.register')}}" method="post">
                            @csrf
                            <div class="input-box mb--30">
                                <input type="text" name="student_name" placeholder="Full Name" />
                                <spen class="text-danger">{{$errors->has('student_name') ? $errors->first('student_name') : ''}}</spen>
                            </div>
                            <div class="input-box mb--30">
                                <input type="number"  name="mobile" placeholder="Mobile" />
                                <spen class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</spen>
                            </div>
                            <div class="input-box mb--30">
                                <input type="email"  name="email" placeholder="Email" />
                                 <spen class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</spen>
                            </div>
                            <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                <span>Register</span>
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
@endsection
