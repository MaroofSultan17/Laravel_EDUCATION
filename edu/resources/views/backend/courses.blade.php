@extends('backend.layouts.main')
@section('title', 'Courses')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <a href="{{ url('/admin/courses/add') }}">
                <button class="btn btn-outline-primary w-100 rounded" style="height: 50px; font-size: 20px;">Add
                    Courses</button>
            </a>
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
                                    <a href="#"><button class="btn btn-danger">Delete</button></a>
                                    <button class="btn btn-primary">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
