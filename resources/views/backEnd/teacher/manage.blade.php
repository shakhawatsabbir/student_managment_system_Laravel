@extends('backEnd.master.home')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Teacher</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admin Dashboard</li>
            <p class="text-success">{{Session::get('massage')}}</p>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead >
                    <tr >
                        <th class="text-center">#ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Code</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr >
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->teacher_name}}</td>
                            <td>{{$teacher->teacher_code}}</td>
                            <td>{{$teacher->teacher_email}}</td>
                            <td>{{$teacher->teacher_mobile}}</td>
                            <td>{{$teacher->address}}</td>
                            <td><img src="{{$teacher->image}}" alt="" height="25" width="25"></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('user.edit',['id'=>$teacher->id])}}" class="btn btn-info btn-sm me-2 ">Edit</a>
                                    <form action="{{route('delete.user')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{$teacher->id}}">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
