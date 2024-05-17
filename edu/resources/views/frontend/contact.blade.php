@extends('frontend.layouts.main')
@section('title', 'Contact')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container">
                <h1 class="page_heading">Contact Us</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href='{{ url('/') }}'>Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                <img src="{{ url('frontend/images/shapes/line_shape_1.png') }}" alt="Line Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                <img src="{{ url('frontend/images/shapes/dot_shape_2.png') }}" alt="Line Shape Image">
            </div>
        </section>
        <section class="contact_section section_space_lg pt-0">
            <div class="container">
                <div class="section_space_lg pt-0">
                    <div class="row justify-content-center">
                        <div class="col col-lg-4">
                            <div class="contact_info_box"
                                style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                                <div class="inner_wrap tilt">
                                    <div class="item_icon">
                                        <img src="frontend/images/icons/icon_support.png" alt="Icon Support">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Our Telephone</h3>
                                        <ul class="icon_list unordered_list_block">
                                            <li><a
                                                    href="tel:{{ constant('sitecontact') }}">{{ constant('sitecontact') }}</a>
                                            </li>
                                            <li><a
                                                    href="tel:{{ constant('sitecontact') }}">{{ constant('sitecontact') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4">
                            <div class="contact_info_box"
                                style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                                <div class="inner_wrap tilt">
                                    <div class="item_icon">
                                        <img src="frontend/images/icons/icon_email.png" alt="Icon Email">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Send us mail</h3>
                                        <ul class="icon_list unordered_list_block">
                                            <li><a href="mailto:{{ constant('siteemail') }}">{{ constant('siteemail') }}</a>
                                            </li>
                                            <li><a
                                                    href="mailto:{{ constant('siteemail') }}">{{ constant('siteemail') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4">
                            <div class="contact_info_box"
                                style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                                <div class="inner_wrap tilt">
                                    <div class="item_icon">
                                        <img src="frontend/images/icons/icon_support.png" alt="Icon Support">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Address</h3>
                                        <ul class="icon_list unordered_list_block">
                                            <li>{{ constant('siteaddres') }}</li>
                                            <li>{{ constant('siteaddres') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col col-lg-9">
                        <div class="contact_form_wrapper">
                            <h2 class="contact_title text-center">Have a quetions?</h2>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-block p-4 border-left-warning"
                                    style="background-color:#3a10e5; opacity:1">
                                    <strong>
                                        <h1 style="color:#ffffff">{{ $message }}</h1>
                                    </strong>
                                </div>
                            @endif
                            <form action="{{ route('contact.add') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col col-md-6">
                                        <div class="form_item m-0">
                                            <input type="text" name="name" placeholder="Your Full Name"
                                                value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">
                                                    {{ $errors->first('name') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col col-md-6">
                                        <div class="form_item m-0">
                                            <input type="email" name="email" placeholder="Your Email"
                                                value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">
                                                    {{ $errors->first('email') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col col-md-6">
                                        <div class="form_item m-0">
                                            <input type="tel" name="phone" placeholder="Phone Number"
                                                value="{{ old('phone') }}">
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">
                                                    {{ $errors->first('phone') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col col-md-6">
                                        <div class="form_item m-0">
                                            <input type="text" name="subject" placeholder="Suject"
                                                value="{{ old('subject') }}">
                                            @if ($errors->has('subject'))
                                                <span class="text-danger">
                                                    {{ $errors->first('subject') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form_item">
                                            <textarea name="message" placeholder="Write A Massage">{{ old('message') }}</textarea>
                                            @if ($errors->has('message'))
                                                <span class="text-danger">
                                                    {{ $errors->first('message') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn_primary" name="submit">
                                                <span>
                                                    <small>Send Message</small>
                                                    <small>Send Message</small>
                                                </span>
                                                <i class="fal fa-paper-plane ms-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="getstart_section decoration_wrap text-center">
            <div class="container">
                <h2 class="title_text">Ready to kick-start your career?</h2>
                <a class="btn btn_primary" href="#!">
                    <span>
                        <small>Try It For Free</small>
                        <small>Try It For Free</small>
                    </span>
                    <i class="far fa-angle-double-right ms-1"></i>
                </a>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                <img src="frontend/images/shapes/line_shape_4.png" alt="Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 130, "smoothness": 6}'>
                <img src="frontend/images/shapes/shape_5.png" alt="Shape Image">
            </div>
        </section>
    </main>
@endsection
