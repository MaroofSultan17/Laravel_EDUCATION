@extends('backend.layouts.main')
@section('title', 'Instructor')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
                <a href="{{ url('/admin/instructor/add') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1c45ef; color: white;"
                        type="button">Add Instructor</button>
                </a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-block p-4 border-left-warning text-center mb-4"
                    style="background-color:#3a10e5; opacity:1">
                    <strong>
                        <h1 style="color:#ffffff">{{ $message }}</h1>
                    </strong>
                </div>
            @endif

            <div class="container-fluid mt-4 mb-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Instructor Name</th>
                            <th scope="col">Instructor Email</th>
                            <th scope="col">Instructor Contact</th>
                            <th scope="col">Instructor Experties</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($instructor as $instructordata)
                            <tr>
                                <th scope="row">{{ $instructordata->instructor_id }}</th>
                                <td>{{ $instructordata->instructor_name }}</td>
                                <td>{{ $instructordata->instructor_email }}</td>
                                <td>{{ $instructordata->instructor_contact }}</td>
                                <td>{{ $instructordata->instructor_experties }}</td>
                                <td>
                                    <a href="#"><button class="btn"
                                            style="background: #dc2e3f; color: white;">Delete</button></a>
                                    <button class="btn" style="background: #1c45ef; color: white;">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
