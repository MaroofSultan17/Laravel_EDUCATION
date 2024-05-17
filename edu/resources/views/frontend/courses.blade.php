@extends('frontend.layouts.main')
@section('title', 'Courses')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container">
                <h1 class="page_heading">Our Courses</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href='{{ route('home.show') }}'>Home</a></li>
                    <li>Our Courses</li>
                </ul>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                <img src="frontend/images/shapes/line_shape_1.png" alt="Line Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                <img src="frontend/images/shapes/dot_shape_2.png" alt="Line Shape Image">
            </div>
        </section>
        <section class="course_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <h2 class="heading_text mb-0">
                                Most popular
                                <span class="heading_focus_text">courses</span>
                            </h2>
                        </div>
                        <div class="col col-lg-6">
                            <ul class="tabs_nav nav unordered_list_end" role="tablist">
                                <li role="presentation">
                                    <button class="active" data-bs-toggle="tab" data-bs-target="#tab_javascript"
                                        type="button" role="tab" aria-selected="true" data-magnetic>
                                        Javascript
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button data-bs-toggle="tab" data-bs-target="#tab_python" type="button" role="tab"
                                        aria-selected="false" data-magnetic>
                                        Python
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button data-bs-toggle="tab" data-bs-target="#tab_web_development" type="button"
                                        role="tab" aria-selected="false" data-magnetic>
                                        Web Development
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button data-bs-toggle="tab" data-bs-target="#tab_art_design" type="button"
                                        role="tab" aria-selected="false" data-magnetic>
                                        Art & Design
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button data-bs-toggle="tab" data-bs-target="#tab_business" type="button"
                                        role="tab" aria-selected="false" data-magnetic>
                                        Business
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab_javascript" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_1.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_2.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_3.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_4.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_5.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_6.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_7.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_8.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab_python" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_1.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_2.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_3.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_4.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_5.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_6.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_7.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_8.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab_web_development" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_1.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_2.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_3.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_4.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_5.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_6.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_7.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_8.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab_art_design" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_1.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_2.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_3.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_4.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_5.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_6.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_7.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_8.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab_business" role="tabpanel">
                        <div class="row">
                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_1.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_2.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_3.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_4.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_warning" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_5.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_primary" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_6.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3 Lessons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_danger" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_7.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3
                                                    Lessons</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-3 col-md-6 col-sm-6">
                                <div class="course_item">
                                    <div class="item_image">
                                        <ul class="badge_group unordered_list">
                                            <li><a class="badge badge_success" href="#!">New</a></li>
                                        </ul>
                                        <a class='image_wrap' href='course_details.html'>
                                            <img src="frontend/images/course/course_img_8.jpg"
                                                alt="Education, Online Course, LMS Creative Site Template">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <a class="course_instructor btn_unfill" href="#!">Alen Mask</a>
                                        <h3 class="item_title">
                                            <a href='course_details.html'>
                                                Why Learn Intermediate SQL for Marketers?
                                            </a>
                                        </h3>
                                        <ul class="course_meta unordered_list">
                                            <li><a href="#!"><i class="far fa-bars me-1"></i> Beginner</a>
                                            </li>
                                            <li><a href="#!"><i class="fal fa-clone me-1"></i> 3
                                                    Lessons</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Course Section - End
                                    ================================================== -->

        <!-- Get Start Section - Start
                                    ================================================== -->
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
        <!-- Get Start Section - End
                                    ================================================== -->

    </main>
@endsection
