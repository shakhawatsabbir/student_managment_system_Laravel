@extends('backEnd.master.home')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Course</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin Dashboard</li>

        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
               Course DataTable
            </div>
            <div class="card-body">
                <div> <p class="text-success text-center">{{Session::get('massage')}}</p></div>
                <div> <p class="text-success text-center text-danger">{{Session::get('massage2')}}</p></div>
                <table id="datatablesSimple">
                    <thead >
                    <tr >
                        <th class="text-center">#ID</th>
                        <th class="text-center">Course Title</th>
                        <th class="text-center"> Course  Code</th>
                        <th class="text-center">Fee</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr >
                            <td>{{$loop->iteration}}</td>
                            <td>{{$course->course_title}}</td>
                            <td>{{$course->course_code}}</td>
                            <td>{{$course->fee}}</td>
                            <td>{{$course->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td><img src="{{asset($course->image)}}" alt="" height="25" width="25"></td>
                            <td>
                                <div class="d-flex text-center">
                                    <a href="{{route('admin.course.view',['id'=>$course->id])}}" class="btn btn-info btn-sm me-2 ">View</a>
                                    <a href="{{route('admin.course.status',['id'=>$course->id])}}" class="btn {{$course->status == 1 ? 'btn-warning' : 'btn-success'}} btn-sm me-2 ">{{$course->status == 1 ? 'Unpublished' : 'Published'}}</a>
                                    <form action="{{route('admin.course.delete')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure this!')">Delete</button>
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
@endsection
