@extends('frontend.layouts.main')
@section('title', 'Register')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container text-center">
                <h1 class="page_heading mb-2">Create Account</h1>
                <p class="mb-0">
                    Already have account? <a href="{{ route('flogin.show') }}">Login</a>
                </p>
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
                        <form action="{{ route('signup.register') }}" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="name" placeholder="Full Name"
                                        value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form_item">
                                    <input type="password" name="password" placeholder="Password"
                                        value="{{ old('password') }}">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn_primary mb-5">
                                    <span>
                                        <small>Signup Now</small>
                                        <small>Signup Now</small>
                                    </span>
                                    <i class="fal fa-paper-plane ms-2"></i>
                                </button>

                                <p class="text-center">Or Login With</p>

                                <ul class="social_icon unordered_list_center">
                                    <li>
                                        <a class="bg_facebook" href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="bg_twitter" href="https://twitter.com/">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="bg_google" href="{{ route('login.google') }}">
                                            <i class="fab fa-google"></i>
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
