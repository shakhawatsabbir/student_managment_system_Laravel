@extends('frontEnd.teacher.master')
@section('title')
    Enroll Student
@endsection
@section('content')
    <div class="col-md-10 mx-auto mt-3">
        <div class="card radius-10">
            <div class="card-header bg-transparent">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h5 class="mb-0"> Enroll Student</h5>
                        <p class="text-center text-success">{{session('massage')}}</p>
                        <p class="text-center text-danger">{{session('massage2')}}</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-bordered "  id="datatablesSimple">
                        <thead class="table-light">
                        <tr>
                            <th>#ID</th>
                            <th>Course Title</th>
                            <th>Student Name</th>
                            <th>Student Id</th>
                            <th>Enroll Status</th>
                            <th>Payment Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$course->course_title}}</td>
                                <td>{{$course->student_name}}</td>
                                <td> {{$course->student_id }}</td>
                                <td>{{$course->enroll_status}} </td>
                                <td>{{$course->payment_status}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
