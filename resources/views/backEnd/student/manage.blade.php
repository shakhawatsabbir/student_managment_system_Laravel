@extends('backEnd.master.home')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Student</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin Dashboard</li>
            <p class="text-success">{{Session::get('massage')}}</p>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
               Student DataTable
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead >
                    <tr >
                        <th class="text-center">#ID</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr >
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->mobile}}</td>
                            <td>{{$student->status== 1 ? 'Active' : 'Inactive'}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('student.status',['id'=>$student->id])}}" class="btn  btn-sm {{$student->status == 1 ? 'btn-warning' : 'btn-info'}} " data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Status" aria-label="Status">
                                        {{$student->status == 1 ? 'Inactive' : 'Active'}}
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
