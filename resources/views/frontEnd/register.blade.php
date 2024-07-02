@extends('backEnd.master.home')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-2">Create User</h3></div>
                        <div class="card-body">
                            <form action="{{route('new.user')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputFullName" type="text" name="user_name" placeholder="Enter your Full name" />
                                            <label for="inputFullName">Full Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="inputMobile" type="number" name="user_mobile" placeholder="012315613643" />
                                            <label for="inputMobile">Mobile Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating  mb-3">
                                    <input class="form-control" id="inputEmail" type="email"  name="user_email" placeholder="name@example.com" />
                                    <label for="inputEmail">Email Address</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPassword" type="password" name="password"  placeholder="Create a password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPasswordConfirm" type="password" name="Confirm_password" placeholder="Confirm password" />
                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Create User</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="{{route('add.user')}}">Have an account? Go to login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

