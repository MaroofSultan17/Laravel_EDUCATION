@extends('frontend.layouts.main')
@section('title', 'Courses')
@section('main-container')
    <main class="page_content">
        <section class="details_section course_details_section">
            <div class="details_content decoration_wrap">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <div class="content_wrap">
                                <h1 class="details_item_title">
                                    Why Learn Intermediate SQL for Marketers?
                                </h1>
                                <p>
                                    Changing lives, businesses, and nations through talent transformation in digital
                                    technologies.
                                </p>
                                <ul class="course_meta_info unordered_list">
                                    <li>
                                        <div class="post_admin d-flex align-items-center">
                                            <div class="thumbnail_wrap">
                                                <img src="frontend/images/meta/thumbnail_img_2.png" alt="Rakibul Thumbnail">
                                            </div>
                                            <div class="meta_info">
                                                <span class="d-block">Created By</span>
                                                <small class="d-block">Marina Ndrose</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="d-block">Last update</span>
                                        <small class="d-block">11 Nov, 2022</small>
                                    </li>
                                    <li>
                                        <span>Review</span>
                                        <div class="review_star">
                                            <i class="fas fa-star"></i>
                                            <small>(4.5)</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-4">
                            <div class="course_details_video">
                                <img src="frontend/images/course/course_details_img.jpg" alt="Course Details Video Poster">
                                <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                                    <span>
                                        <small>
                                            <i class="fas fa-play"></i>
                                        </small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                    <img src="frontend/images/shapes/line_shape_1.png" alt="Line Shape Image">
                </div>
                <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                    <img src="frontend/images/shapes/dot_shape_2.png" alt="Line Shape Image">
                </div>
            </div>

            <div class="details_info_tab section_space_lg pt-0">
                <div class="container">
                    <div class="row justify-content-lg-between">
                        <div class="col col-lg-7">
                            <ul class="nav" role="tablist">
                                <li role="presentation">
                                    <button class="active" data-bs-toggle="tab" data-bs-target="#tab_overview"
                                        type="button" role="tab" aria-selected="true">
                                        Overview
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button data-bs-toggle="tab" data-bs-target="#tab_curriculam" type="button"
                                        role="tab" aria-selected="false">
                                        Curriculam
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button data-bs-toggle="tab" data-bs-target="#tab_instructor" type="button"
                                        role="tab" aria-selected="false">
                                        Instructor
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button data-bs-toggle="tab" data-bs-target="#tab_review" type="button" role="tab"
                                        aria-selected="false">
                                        Review
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_overview" role="tabpanel">
                                    <h3 class="details_info_title">Short Overview</h3>
                                    <p>
                                        Python is a general-purpose, versatile and popular programming language. Python is
                                        also a great first language because it is concise and easy to read. A good language
                                        to have in any programmer’s stack, Python can be used for everything from web
                                        development to software development and data science applications.
                                    </p>

                                    <h3 class="details_info_title">Short Overview</h3>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            <ul class="icon_list unordered_list_block">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    <span>Fundamental programming concepts</span>
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    <span>Python 3 is the most up-to-date version</span>
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    <span>increase the efficiency and simplicity of the Python</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col col-md-6">
                                            <ul class="icon_list unordered_list_block">
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    <span>Fundamental programming concepts</span>
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    <span>Python 3 is the most up-to-date version</span>
                                                </li>
                                                <li>
                                                    <i class="far fa-check"></i>
                                                    <span>increase the efficiency and simplicity of the Python</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab_curriculam" role="tabpanel">
                                    <p>
                                        Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Sequi maiores dolorum
                                        reprehenderit nulla optio doloremque dolor nostrum voluptates, debitis libero itaque
                                        deleniti, sapiente pariatur ut eum aliquid voluptatum architecto! Magni.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="tab_instructor" role="tabpanel">
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto non dolores
                                        quaerat quod maxime. Amet sapiente incidunt dicta dolorem aperiam veniam eligendi.
                                        Nihil facilis laboriosam tempore, quae neque natus quisquam!
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="tab_review" role="tabpanel">
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto non dolores
                                        quaerat quod maxime. Amet sapiente incidunt dicta dolorem aperiam veniam eligendi.
                                        Nihil facilis laboriosam tempore, quae neque natus quisquam!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4">
                            <aside class="sidebar">
                                <div class="widget course_cart_info">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="item_price">
                                            <span class="sale_price">$49.99</span>
                                            <del class="remove_price">$102.00</del>
                                        </div>
                                        <div class="badge badge_warning">78% Off</div>
                                    </div>
                                    <a class="btn btn_warning" href="#!">
                                        <i class="fas fa-cart-plus me-1"></i>
                                        <span>
                                            <small>Add To Cart</small>
                                            <small>Add To Cart</small>
                                        </span>
                                    </a>
                                    <ul class="cart_info_list unordered_list_block">
                                        <li>
                                            <span><i class="far fa-clock me-1"></i> Duration</span>
                                            <span>52 Mins</span>
                                        </li>
                                        <li>
                                            <span><i class="fal fa-abacus me-1"></i> Level</span>
                                            <span>Beginner</span>
                                        </li>
                                        <li>
                                            <span><i class="fal fa-file-alt me-1"></i> Lectures</span>
                                            <span>05 Lectures</span>
                                        </li>
                                        <li>
                                            <span><i class="far fa-user me-1"></i> Enrolled</span>
                                            <span>03 Enrolled</span>
                                        </li>
                                    </ul>
                                    <h3 class="details_info_title text-center">Share This Course</h3>
                                    <div class="social_activity_links m-0 justify-content-center">
                                        <ul class="social_icon unordered_list">
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
                                                <a class="bg_linkedin" href="https://www.linkedin.com/">
                                                    <i class="fab fa-linkedin-in"></i>
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="bg_youtube" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget">
                                    <h3 class="widget_title">Popular Courses</h3>
                                    <ul class="course_item_list unordered_list_block">
                                        <li>
                                            <a class='course_item_small' href='course_details.html'>
                                                <span class="item_image">
                                                    <img src="frontend/images/course/course_small_img_1.png"
                                                        alt="Popular Courses">
                                                </span>
                                                <span class="item_content">
                                                    <strong class="item_title">Build a Machine Learning Model with
                                                        Python</strong>
                                                    <small class="item_price">$45.00</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class='course_item_small' href='course_details.html'>
                                                <span class="item_image">
                                                    <img src="frontend/images/course/course_small_img_2.png"
                                                        alt="Popular Courses">
                                                </span>
                                                <span class="item_content">
                                                    <strong class="item_title">Analyze Financial Data with Python</strong>
                                                    <small class="item_price">$45.00</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class='course_item_small' href='course_details.html'>
                                                <span class="item_image">
                                                    <img src="frontend/images/course/course_small_img_3.png"
                                                        alt="Popular Courses">
                                                </span>
                                                <span class="item_content">
                                                    <strong class="item_title">Build Deep Learning Models with
                                                        TensorFlow</strong>
                                                    <small class="item_price">$45.00</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
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
