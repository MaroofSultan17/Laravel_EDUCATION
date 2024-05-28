@extends('backend.layouts.main')
@section('title', 'Catageory')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
                <a href="{{ url('/admin/courses/catageory/add') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1c45ef; color: white;"
                        type="button">Add
                        Catageory</button>
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
            {{-- <div class="container-fluid mt-4 mb-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Instructor Name</th>
                            <th scope="col">Course Details</th>
                            <th scope="col">Course Level</th>
                            <th scope="col">Total Lectures</th>
                            <th scope="col">Course Catageory</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $courses)
                            <tr>
                                <th scope="row">{{ $courses->course_id }}</th>
                                <td>{{ $courses->instructor }}</td>
                                <td>{{ $courses->coursedetails }}</td>
                                <td>{{ $courses->courselevel }}</td>
                                <td>{{ $courses->courselectures }}</td>
                                <td>{{ $courses->coursecatageory }}</td>
                                <td>
                                    <a href="#"><button class="btn"
                                            style="background: #dc2e3f; color: white;">Delete</button></a>
                                    <button class="btn" style="background: #1c45ef; color: white;">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}
        </div>
    @endsection