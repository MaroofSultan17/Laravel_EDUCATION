@extends('backend.layouts.main')
@section('title', 'Courses')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ url('/admin/courses/add') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1c45ef; color: white;"
                        type="button">Add
                        Courses</button>
                </a>
            </div>
            <div class="container-fluid mt-4 mb-3">
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
                                <th scope="row">{{ $courses->id }}</th>
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
            </div>
        </div>
    @endsection
