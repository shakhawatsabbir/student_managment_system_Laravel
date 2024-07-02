@extends('backEnd.master.home')

@section('content')
    <div class="container-fluid px-4 my-4">
        <div class="card mb-4">
            <div class="card-header text-center">
                Course Details
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>Course Title</th>
                        <td>{{$course->course_title}}</td>
                    </tr>
                    <tr>
                        <th>Course Code</th>
                        <td>{{$course->course_code}}</td>
                    </tr>
                    <tr>
                        <th>Teacher Name</th>
                        <td>{{$course->teacher->teacher_name}}</td>
                    </tr>
                    <tr>
                        <th>Course Fee</th>
                        <td>{{$course->fee}}</td>
                    </tr>
                    <tr>
                        <th>Short Description</th>
                        <td>{{$course->	short_description}}</td>
                    </tr>
                    <tr>
                        <th>Long Description</th>
                        <td>{{$course->long_description}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$course->status == 1 ? 'Published' : 'Unpublished'}}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><img src="{{asset($course->image)}}" alt="" height="180" width="200"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

