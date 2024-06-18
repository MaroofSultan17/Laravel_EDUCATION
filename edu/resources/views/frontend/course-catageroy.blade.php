@extends('frontend.layouts.main')
@section('title', 'Course-Catageories')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container">
                <h1 class="page_heading">Our Categories</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href='{{ route('home.show') }}'>Home</a></li>
                    <li>Our Categories</li>
                </ul>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                <img src="frontend/images/shapes/line_shape_1.png" alt="Line Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                <img src="frontend/images/shapes/dot_shape_2.png" alt="Line Shape Image">
            </div>
        </section>
        <section class="category_section section_space_lg pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-6">
                        <div class="section_heading text-center">
                            <h2 class="heading_text">
                                Most popular
                                <span class="heading_focus_text">categories</span>
                            </h2>
                            <p class="mb-0">
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                it has a more-or-less normal distribution of letters,
                            </p>
                        </div>
                    </div>
                </div>

                <div class="category_items_wrapper row">
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item" style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                            <a data-cursor='-opaque' data-magnetic href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_test_tube.png" alt="Icon Test Tube">
                                </span>
                                <strong class="item_title">Chemistry</strong>
                                <small class="item_counter">2 courses</small>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item" style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                            <a data-cursor='-opaque' data-magnetic href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_calendar.png" alt="Icon Calender">
                                </span>
                                <strong class="item_title">Managemant</strong>
                                <small class="item_counter">2 courses</small>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item" style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                            <a data-cursor='-opaque' data-magnetic href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_design.png" alt="Icon Design">
                                </span>
                                <strong class="item_title">Fine Art</strong>
                                <small class="item_counter">2 courses</small>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item" style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                            <a data-cursor='-opaque' data-magnetic href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_briefcase.png" alt="Icon Briefcase">
                                </span>
                                <strong class="item_title">Business</strong>
                                <small class="item_counter">2 courses</small>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item" style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                            <a data-cursor='-opaque' data-magnetic href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_design.png" alt="Icon Design">
                                </span>
                                <strong class="item_title">Fine Art</strong>
                                <small class="item_counter">2 courses</small>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item" style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                            <a data-cursor='-opaque' data-magnetic href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_briefcase.png" alt="Icon Briefcase">
                                </span>
                                <strong class="item_title">Business</strong>
                                <small class="item_counter">2 courses</small>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item" style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                            <a data-cursor='-opaque' data-magnetic href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_calendar.png" alt="Icon Calender">
                                </span>
                                <strong class="item_title">Managemant</strong>
                                <small class="item_counter">2 courses</small>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item" style="background-image: url('frontend/images/shapes/dot_shape_3.png');">
                            <a data-cursor='-opaque' data-magnetic href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_test_tube.png" alt="Icon Test Tube">
                                </span>
                                <strong class="item_title">Chemistry</strong>
                                <small class="item_counter">2 courses</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="category_section section_space_lg bg_info">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        Get the most popular courses of
                        <span class="d-block">Science & Technology</span>
                    </h2>
                </div>

                <div class="category2_items_wrapper row justify-content-center">
                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="{{ url('frontend/images/icons/icon_test_tube.png') }}"
                                        alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">Chemistry</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="{{ url('frontend/images/icons/icon_calendar.png') }}" alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">Management</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="{{ url('frontend/images/icons/icon_design.png') }}" alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">Fine Arts</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="{{ url('frontend/images/icons/icon_briefcase.png') }}"
                                        alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">Business</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="{{ url('frontend/images/icons/icon_science.png') }}" alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">Astrology</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="{{ url('frontend/images/icons/icon_rocket.png') }}" alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">SEO</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="{{ url('frontend/images/icons/icon_space.png') }}" alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">Cosmology</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="{{ url('frontend/images/icons/icon_microscope.png') }}"
                                        alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">Biology</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="category_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        The popular online <span class="heading_focus_text">freelancing</span> courses
                        <span class="d-block">for self-employment future</span>
                    </h2>
                </div>

                <div class="row">
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item_3">
                            <a class='tilt bg_primary' href="{{ route('course_details.show') }}">
                                <span class="item_image">
                                    <img src="{{ url('frontend/images/category/category_img_1.png') }}"
                                        alt="Category Image">
                                </span>
                                <span class="item_content text-white">Development</span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item_3">
                            <a class='tilt bg_danger' href="{{ route('course_details.show') }}">
                                <span class="item_image">
                                    <img src="{{ url('frontend/images/category/category_img_2.png') }}"
                                        alt="Category Image">
                                </span>
                                <span class="item_content text-white">Design</span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item_3">
                            <a class='tilt bg_success' href="{{ route('course_details.show') }}">
                                <span class="item_image">
                                    <img src="{{ url('frontend/images/category/category_img_3.png') }}"
                                        alt="Category Image">
                                </span>
                                <span class="item_content text-white">Photography</span>
                            </a>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="category_item_3">
                            <a class='tilt bg_warning' href="{{ route('course_details.show') }}">
                                <span class="item_image">
                                    <img src="{{ url('frontend/images/category/category_img_4.png') }}"
                                        alt="Category Image">
                                </span>
                                <span class="item_content">Marketing</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
