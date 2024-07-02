@extends('frontEnd.teacher.master')
@section('title')
    Manage Course
@endsection
@section('content')
    <div class="col-md-10 mx-auto mt-3">
        <div class="card radius-10">
            <div class="card-header bg-transparent">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Manage Course</h5>
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
                            <th>Subject Title</th>
                            <th>Code</th>
                            <th>Fee</th>
                            <th>Teacher Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$course->course_title}}</td>
                                <td>{{$course->course_code}}</td>
                                <td> {{number_format($course->fee) }}</td>
                                <td>{{$course->teacher_name}}</td>
                                <td>{{$course->status == 1 ? 'Active' : 'Inactive'}} </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('edit.course',['id'=>$course->id])}}"  class="btn  btn-info btn-sm "  data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit">Edit</a>
                                        <form action="{{route('teacher.course.delete')}}" method="post" >
                                            @csrf
                                            <input type="hidden" value="{{$course->id}}" name="course_id">
                                            <button type="submit " class="btn  btn-danger btn-sm  {{$course->status == 1 ? 'disabled' : ''}} " onclick="return confirm('Are you Delete this!')" >Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
