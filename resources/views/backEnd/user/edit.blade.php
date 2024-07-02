@extends('backEnd.master.home')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Edit User</h3><br/>
                            <p class="text-center text-danger">{{Session('massage')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.user')}}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <div class="form-floating  mb-3">
                                    <input class="form-control" id="inputFullName" type="text" name="name" value="{{$user->name}}" />
                                    <label for="inputFullName">Full Name</label>
                                </div>
                                <div class="form-floating  mb-3">
                                    <input class="form-control" id="inputEmail" type="email"  name="email" value="{{$user->email}}"  readonly/>
                                    <label for="inputEmail">Email Address</label>
                                </div>
                                <div class="form-floating mb-3 ">
                                    <input class="form-control" id="inputPassword" type="password" name="old_password"  placeholder="Create a password" />
                                    <label for="inputPassword">Old Password</label>
                                </div>
                                <div class="form-floating mb-3 ">
                                    <input class="form-control" id="inputPassword" type="password" name="new_password"  placeholder="Create a password" />
                                    <label for="inputPassword">New Password</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Update User</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
