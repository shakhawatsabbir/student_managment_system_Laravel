@extends('frontEnd.master')

@section('content')
    <div class="login-register-page-wrapper edu-section-gap bg-color-white">
        <div class="container checkout-page-style">
            <div class="row g-5">
                <div class="col-lg-6  mx-auto py-5">
                    <div class="login-form-box">
                        <h3 class="mb-30">Enroll Course</h3>
                        <form class="login-form" action="{{route('new,enroll',['id'=> $id])}}" method="post">
                            @csrf
                            <div class="input-box mb--30">
                                <input type="text" name="student_name" placeholder="Full Name" />
                            </div>
                            <div class="input-box mb--30">
                                <input type="number"  name="mobile" placeholder="Mobile" />
                            </div>
                            <div class="input-box mb--30">
                                <input type="email"  name="email" placeholder="Email" />
                            </div>
                            <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                <span>Enroll Now</span>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
