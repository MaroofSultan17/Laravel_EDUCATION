@extends('backend.layouts.main')
@section('title', 'Add Course')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
                <a href="{{ url('/admin/courses') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1c45ef; color: white;"
                        type="button">Show Courses</button>
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
            <form class="forms-sample" method="POST" action="{{ url('/admin/courses/add') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="badge">Badge</label>
                    <select class="form-control form-control-lg" id="badge" name="badge" required>
                        <option value="" disabled selected>-- Badge --</option>
                        <option value="New">New</option>
                        <option value="Old">Old</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="instructor">Select Instructor</label>
                    <select class="form-control form-control-lg" id="instructor" name="instructor" required>
                        <option value="" disabled selected>-- Select Instructor --</option>
                        @foreach ($instructor as $instructordata)
                            <option value="{{ $instructordata->instructor_id }}">{{ $instructordata->instructor_name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="form-group mt-2">
                        <label for="courselevel">Course Level</label>
                        <select class="form-control form-control-lg" id="courselevel" name="courselevel" required>
                            <option value="" disabled selected>-- Course Level --</option>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="courselectures">Total Lectures</label>
                        <input type="number" class="form-control form-control-lg" id="courselectures"
                            placeholder="Total Lectures eg: 10, 20" name="courselectures"
                            value="{{ old('courselectures') }}">
                        @if ($errors->has('courselectures'))
                            <span class="text-danger">
                                {{ $errors->first('courselectures') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="coursecatageory">Course Catageory</label>
                        <select class="form-control form-control-lg" id="coursecatageory" name="coursecatageory" required>
                            <option value="" disabled selected>-- Course Catageory --</option>
                            @foreach ($catageory as $catageorydata)
                                <option value="{{ $catageorydata->catageory_id }}">{{ $catageorydata->catageory_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
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
                    </div>
                    <div class="form-group">
                        <label for="coursedetails">Course Details</label>
                        <textarea class="form-control" id="coursedetails" rows="2" name="coursedetails"></textarea>
                        @if ($errors->has('coursedetails'))
                            <span class="text-danger">
                                {{ $errors->first('coursedetails') }}
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
