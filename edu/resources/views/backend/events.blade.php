@extends('backend.layouts.main')
@section('title', 'Events')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
                <a href="{{ url('/admin/events/add') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1c45ef; color: white;"
                        type="button">Add
                        Events</button>
                </a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-block p-4 border-left-warning text-center mb-3"
                    style="background-color:#3a10e5; opacity:1">
                    <strong>
                        <h1 style="color:#ffffff">{{ $message }}</h1>
                    </strong>
                </div>
            @endif
            <div class="container-fluid mt-4 mb-3">
                <table class="table table-hover">
                    @php
                        use Carbon\Carbon;
                    @endphp

                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Day</th>
                            <th scope="col">Month</th>
                            <th scope="col">Location</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $eventsdata)
                            <tr>
                                <th scope="row">{{ $eventsdata->id }}</th>
                                <td>{{ $eventsdata->title }}</td>
                                <td>{{ Carbon::parse($eventsdata->date)->format('d') }}</td>
                                <td>{{ Carbon::parse($eventsdata->date)->format('F') }}</td>
                                <td>{{ $eventsdata->address }}</td>
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
