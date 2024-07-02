@extends('backEnd.master.home')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Create Teacher</h3><br/>
                            <p class="text-center text-success">{{Session('massage')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('new.teacher')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating  mb-3">
                                    <input class="form-control" id="inputFullName" type="text" name="teacher_name" placeholder="Enter your Full name" />
                                    <label for="inputFullName">Full Name</label>
                                </div>
                                <div class="form-floating  mb-3">
                                    <input class="form-control" id="inputEmail" type="email"  name="teacher_email" placeholder="name@example.com" />
                                    <label for="inputEmail">Email Address</label>
                                </div>
                                <div class="form-floating  mb-3">
                                    <input class="form-control" id="inputMobile" type="number"  name="teacher_mobile" placeholder="name@example.com" />
                                    <label for="inputMobile">Mobile Number</label>
                                </div>
                                <div class="form-floating  mb-3">
                                    <textarea class="form-control" id="inputAddress" type="text"  name="address"  placeholder="address"></textarea>
                                    <label for="inputAddress">Address</label>
                                </div>

                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Create Teacher</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
