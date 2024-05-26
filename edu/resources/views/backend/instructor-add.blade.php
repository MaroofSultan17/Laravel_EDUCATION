@extends('backend.layouts.main')
@section('title', 'Add Instructor')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4">
                <a href="{{ url('/admin/instructor') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1c45ef; color: white;"
                        type="button">Instructor List</button>
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
            <form class="forms-sample" method="POST" action="{{ url('/admin/instructor/add') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="instructor_name">Full Name</label>
                    <input type="text" class="form-control form-control-lg" id="instructor_name" name="instructor_name"
                        placeholder="Instructor Name" value="{{ old('instructor_name') }}">
                    @if ($errors->has('instructor_name'))
                        <span class="text-danger">
                            {{ $errors->first('instructor_name') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="instructor_email">Email</label>
                    <input type="email" class="form-control form-control-lg" id="instructor_email"
                        placeholder="abc@gmail.com" name="instructor_email" value="{{ old('instructor_email') }}">
                    @if ($errors->has('instructor_email'))
                        <span class="text-danger">
                            {{ $errors->first('instructor_email') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="instructor_contact">Contact</label>
                    <input type="text" class="form-control form-control-lg" id="instructor_contact"
                        placeholder="03090742546" name="instructor_contact" value="{{ old('instructor_contact') }}">
                    @if ($errors->has('instructor_contact'))
                        <span class="text-danger">
                            {{ $errors->first('instructor_contact') }}
                        </span>
                    @endif
                </div>
                {{-- <div class="form-group">
                    <label>Upload Image</label>
                    <div class="input-group ">
                        <input type="file" class="form-control form-control-lg file-upload-browse" id="image"
                            name="image" value="{{ old('image') }}" accept=".png,.jpeg,.jpg">
                        @if ($errors->has('image'))
                            <span class="text-danger">
                                {{ $errors->first('image') }}
                            </span>
                        @endif
                    </div>
                </div> --}}
                <div class="form-group">
                    <label for="instructor_experties">Experties</label>
                    <textarea class="form-control" id="instructor_experties" rows="2" name="instructor_experties"></textarea>
                    @if ($errors->has('instructor_experties'))
                        <span class="text-danger">
                            {{ $errors->first('instructor_experties') }}
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
