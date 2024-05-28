@extends('backend.layouts.main')
@section('title', 'Add Events')
@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4">
                <a href="{{ url('/admin/events') }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1c45ef; color: white;"
                        type="button">Show
                        Events</button>
                </a>
            </div>
            <form class="forms-sample" method="POST" action="{{ url('/admin/events/add') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control form-control-lg" id="title" name="title"
                        placeholder="Title" value="{{ old('title') }}">
                    @if ($errors->has('title'))
                        <span class="text-danger">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="date">Title</label>
                    <input type="date" class="form-control form-control-lg" id="date" name="date"
                        placeholder="Date" value="{{ old('date') }}">
                    @if ($errors->has('date'))
                        <span class="text-danger">
                            {{ $errors->first('date') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="address">Location</label>
                    <input type="text" class="form-control form-control-lg" id="address" name="address"
                        placeholder="Location" value="{{ old('address') }}">
                    @if ($errors->has('address'))
                        <span class="text-danger">
                            {{ $errors->first('address') }}
                        </span>
                    @endif
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
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success w-20 mb-3 form-control-lg rounded"
                        style="font-size: 18px;" name="submit">Submit</button>
                </div>
            </form>
        </div>
    @endsection
