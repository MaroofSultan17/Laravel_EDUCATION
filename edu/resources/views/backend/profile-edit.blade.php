@extends('backend.layouts.main')
@section('title', 'Profile-Edit')
@section('main-container')
    <div class="main-panel">
        <div class="container-fluid m-2">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
                <a href="{{ route('profile.show', ['token' => $profiledata->token]) }}">
                    <button class="btn me-md-2 w-20 h-100 rounded" style="background: #1C45EF; color: white;"
                        type="button">Show Profile</button>
                </a>
            </div>
            <form action="{{ route('profile_edit.submit', ['token' => $profiledata->token]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                        value="{{ $profiledata->name }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <label for="phoneno">Phone Number</label>
                    <input type="text" class="form-control" id="phoneno" placeholder="phoneno" name="phoneno"
                        value="{{ $profiledata->phoneno }}">
                    @if ($errors->has('phoneno'))
                        <span class="text-danger">{{ $errors->first('phoneno') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email" name="email"
                        value="{{ $profiledata->email }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="address" name="address"
                        value="{{ $profiledata->address }}">
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label>Upload Image</label>
                    <div class="input-group mt-2">
                        <input type="file" class="form-control  file-upload-browse" id="image" name="image"
                            accept=".png,.jpg,,.jpeg" value="{{ $profiledata->image }}">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                </div>
                <div class="d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success w-20 mb-3  rounded"
                        style="font-size: 18px;">Submit</button>
                </div>
            </form>
        </div>
    @endsection
