@extends('backEnd.master.home')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage User</h1>
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
                        <th class="text-center">Email</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr >
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td >
                                <div class="d-flex">
                                    <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-info btn-sm me-2 {{$user->id == 1 ? 'disabled' : '' }}">Edit</a>
                                    <form action="{{route('delete.user')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        <button type="submit" class="btn btn-danger btn-sm {{$user->id == 1 ? 'disabled' : '' }}">Delete</button>
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
