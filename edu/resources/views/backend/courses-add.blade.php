@extends('backend.layouts.main')
@section('title', 'Courses')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <p class="bg-primary w-100 rounded text-center"
                style="height: 50px; font-size: 20px; line-height: 50px; color: white;">Add
                Courses</p>
            @if ($message = Session::get('success'))
                <div class="alert alert-block p-4 border-left-warning" style="background-color:green; opacity:1">
                    <strong>
                        <h1 style="color:#ffffff;">{{ $message }}</h1>
                    </strong>
                </div>
            @endif
            <form class="forms-sample" method="POST" action="{{ url('/admin/courses/add') }}" enctype="multipart/form-data">
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
                    <label for="instructor">Instructor Name</label>
                    <input type="text" class="form-control form-control-lg" id="instructor" name="instructor"
                        placeholder="Instructor Name" value="{{ old('instructor') }}">
                    @if ($errors->has('instructor'))
                        <span class="text-danger">
                            {{ $errors->first('instructor') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
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
                        placeholder="Total Lectures eg: 10, 20" name="courselectures" value="{{ old('courselectures') }}">
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
                        <option value="python">Python</option>
                        <option value="javascript">Javascript</option>
                        <option value="webdevelopment">Web Development</option>
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
                <div class="w-100">
                    <button type="submit" class="btn btn-success w-100 mb-3 form-control-lg rounded"
                        style="font-size: 18px;" name="submit">Submit</button>
            </form>
            <a href="{{ url('/admin/courses') }}" class="btn btn-danger w-100 mb-3 form-control-lg rounded text-center"
                style="font-size: 18px; line-height: 35px;">Cancel</a>
        </div>
    @endsection
