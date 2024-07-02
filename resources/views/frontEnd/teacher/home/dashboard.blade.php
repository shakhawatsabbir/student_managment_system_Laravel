@extends('frontEnd.teacher.master')
@section('title')
        Teacher Dashboard
@endsection
@section('content')
    <div class="container-fluid px-4 mt-3">
        <h1 class="mt-4">Teacher Dashboard</h1>
        <div class="row mt-5 ">
            <div class="col-xl-3 col-md-6 ">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body d-flex"> All Courses <span class="ms-5 ps-5"><h5>{{count($courses)}}</h5></span></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link text-decoration-none" href="{{route('manage.teacher.course')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body  d-flex">Approved Courses <span class="ms-4 ps-4"><h5>{{count($approveds)}}</h5></span></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link text-decoration-none" href="{{route('teacher.approved.course')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
