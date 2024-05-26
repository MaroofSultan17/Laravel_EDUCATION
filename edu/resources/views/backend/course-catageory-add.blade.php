@extends('backend.layouts.main')
@section('title', 'Add Catageory')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4">
                <a href="{{ url('/admin/courses/catageory') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1c45ef; color: white;"
                        type="button">Show
                        Catageory</button>
                </a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-block p-4 border-left-warning text-center"
                    style="background-color:#3a10e5; opacity:1">
                    <strong>
                        <h1 style="color:#ffffff">{{ $message }}</h1>
                    </strong>
                </div>
            @endif
            <form class="forms-sample" method="POST" action="{{ url('/admin/courses/catageory/add') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="catageory_name">Catageory Name</label>
                    <input type="text" class="form-control form-control-lg" id="catageory_name" name="catageory_name"
                        placeholder="Catageory Name" value="{{ old('catageory_name') }}">
                    @if ($errors->has('catageory_name'))
                        <span class="text-danger">
                            {{ $errors->first('catageory_name') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="catageory_details">Catageory Details</label>
                    <textarea class="form-control" id="catageory_details" rows="2" name="catageory_details">{{ old('catageory_details') }}</textarea>
                    @if ($errors->has('catageory_details'))
                        <span class="text-danger">
                            {{ $errors->first('catageory_details') }}
                        </span>
                    @endif
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success w-20 mb-3 form-control-lg rounded"
                        style="font-size: 18px;" name="submit">Submit</button>
                </div>
            </form>
        </div>
    @endsection
