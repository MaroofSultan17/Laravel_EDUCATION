@extends('frontend.layouts.main')
@section('title', 'Login')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container text-center">
                <h1 class="page_heading mb-2">Account Login</h1>
                <p class="mb-0">
                    Please enter your User/Email & Password
                </p>
                @if (session()->has('success') || session()->has('error'))
                    @if (session()->has('success'))
                        <div class="alert alert-block p-4 border-left-warning text-center"
                            style="background-color:#3A10E5; opacity:1">
                            <strong>
                                <h5 style="color: #ffffff">{{ session('success') }}</h5>
                            </strong>
                        </div>
                    @elseif (session()->has('error'))
                        <div class="alert alert-block p-4 border-left-warning text-center"
                            style="background-color:red; opacity:1">
                            <strong>
                                <h5 style="color: #ffffff">{{ session('error') }}</h5>
                            </strong>
                        </div>
                    @endif
                @endif
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                <img src="frontend/images/shapes/line_shape_1.png" alt="Line Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                <img src="frontend/images/shapes/dot_shape_2.png" alt="Line Shape Image">
            </div>
        </section>
        <div class="register_section section_space_lg pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-5">
                        <form action="{{ route('flogin.auth') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="register_form signup_login_form">
                                <div class="form_item">
                                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form_item">
                                    <input type="password" name="password" placeholder="**********"
                                        value="{{ old('password') }}">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="remenber_forget row mb-3 align-items-center justify-content-between">
                                    <div class="col col-6">
                                        <div class="checkbox_item mb-0">
                                            <input id="checkbox_remenber" type="checkbox">
                                            <label for="checkbox_remenber">Remenber me</label>
                                        </div>
                                    </div>
                                    <div class="col col-6">
                                        <div class="forget_password text-end">
                                            <a href="#!">Forget Password</a>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn_primary mb-5">
                                    <span>
                                        <small>Login</small>
                                        <small>Login</small>
                                    </span>
                                    <i class="fal fa-paper-plane ms-2"></i>
                                </button>
                                <p class="mb-0 text-center">don't have an account? <a
                                        href="{{ route('signup.show') }}">Register
                                        Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
