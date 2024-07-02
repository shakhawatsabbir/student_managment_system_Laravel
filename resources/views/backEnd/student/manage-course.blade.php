@extends('backEnd.master.home')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Student Course</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin Dashboard</li>
            <p class="text-success">{{Session::get('massage')}}</p>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Student Course DataTable
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead >
                    <tr >
                        <th class="text-center">#ID</th>
                        <th class="text-center">Course Title</th>
                        <th class="text-center">Teacher Name</th>
                        <th class="text-center">Student Name</th>
                        <th class="text-center">Enroll Status</th>
                        <th class="text-center">Payment Status</th>
                        <th class="text-center">Update Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($enrolls as $enroll)
                        <tr >
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$enroll['course_title']}}</td>
                                <td>{{$enroll['teacher_name']}}</td>
                                <td>{{$enroll['student_name'].' '.'('. $enroll['student_email'] .')'}} </td>
                                <td>{{$enroll['payment_status']}} </td>
                                <td>{{$enroll['enroll_status']}} </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6 me-3">
                                        <a href="{{route('update.enroll.status',['id'=>$enroll['enroll_id']])}}" class="btn  btn-sm {{$enroll['enroll_status'] == 'Pending' ? 'btn-warning' : 'btn-info '}} ">
                                            {{$enroll['enroll_status'] == 'Pending' ? 'Complete' : 'Pending'}}
                                        </a>
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
