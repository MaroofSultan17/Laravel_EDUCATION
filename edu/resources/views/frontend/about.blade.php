@extends('frontend.layouts.main')
@section('title', 'About')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container">
                <h1 class="page_heading">About Us</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href="{{ route('home.show') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                <img src="frontend/images/shapes/line_shape_1.png" alt="Line Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                <img src="frontend/images/shapes/dot_shape_2.png" alt="Line Shape Image">
            </div>
        </section>
        <section class="about_section section_space_lg pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col col-lg-5">
                        <div class="about_image" style="background-image: url('frontend/images/shapes/dot_shape_8.png');">
                            <div class="image_wrap">
                                <img src="frontend/images/about/about_img_1.jpg" alt="Person Image">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="about_content">
                            <h2 class="about_title">
                                We want to create a world where anyone can build something meaningful
                            </h2>
                            <p>
                                Give your team the knowledge, experience, and confidence they need to tackle any problem.We
                                want to create a world where anyone can build something meaningful
                            </p>
                            <a class='btn btn_primary' href="{{ route('contact.show') }}">
                                <span>
                                    <small>Contact Us</small>
                                    <small>Contact Us</small>
                                </span>
                                <i class="far fa-long-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="partner_section section_space_lg bg_info">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        Our Partners
                    </h2>
                </div>

                <ul class="sponsors_logo_wrap unordered_list_center">
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_1.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_2.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_3.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_4.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_5.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_1.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_2.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_3.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_4.png" alt="Miranda">
                        </a>
                    </li>
                    <li>
                        <a href="#!" data-magnetic>
                            <img src="frontend/images/sponsors/sponsor_logo_5.png" alt="Miranda">
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="goal_section section_space_lg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-4">
                        <div class="section_heading mb-lg-0">
                            <h2 class="heading_text mb-0">
                                We have helped millions of people worldwide unlock technical skills
                            </h2>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6">
                        <div class="about_item">
                            <div class="item_image">
                                <img src="frontend/images/about/about_img_2.jpg" alt="Our History">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    Our History
                                </h3>
                                <p class="mb-0">
                                    our goal was to give anyone in the world the ability to learn the skills they’d need to
                                    succeed in the 21st century
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6">
                        <div class="about_item">
                            <div class="item_image">
                                <img src="frontend/images/about/about_img_3.jpg" alt="Our Mission">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">
                                    Our Mission
                                </h3>
                                <p class="mb-0">
                                    our goal was to give anyone in the world the ability to learn the skills they’d need to
                                    succeed in the 21st century
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="counter_section decoration_wrap">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col col-lg-4 col-12">
                        <h2 class="area_title text-white">
                            <span class="d-lg-block">Join in on</span> something big
                        </h2>
                    </div>
                    <div class="col col-lg-2 col-md-4 col-sm-4">
                        <div class="counter_item text-center">
                            <h3 class="counter_value text-white">
                                <span class="value_text">50</span>M
                            </h3>
                            <h4 class="counter_title text-white mb-0">Learners</h4>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-4 col-sm-4">
                        <div class="counter_item text-center">
                            <h3 class="counter_value text-white">
                                <span class="value_text">190</span>+
                            </h3>
                            <h4 class="counter_title text-white mb-0">Countries</h4>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-4 col-sm-4">
                        <div class="counter_item text-center">
                            <h3 class="counter_value text-white">
                                <span class="value_text">3.5</span>B
                            </h3>
                            <h4 class="counter_title text-white mb-0">Code Submits</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deco_item shape_1" data-parallax='{"y" : 80, "smoothness": 6}'>
                <img src="frontend/images/shapes/shape_3.png" alt="Shape Image">
            </div>
            <div class="deco_item shape_2" data-parallax='{"y" : -80, "smoothness": 6}'>
                <img src="frontend/images/shapes/line_shape_3.png" alt="Shape Image">
            </div>
            <div class="deco_item shape_3" data-parallax='{"y" : 100, "smoothness": 6}'>
                <img src="frontend/images/shapes/dot_shape_4.png" alt="Shape Image">
            </div>
            <div class="deco_item shape_4" data-parallax='{"y" : -80, "smoothness": 6}'>
                <img src="frontend/images/shapes/shape_4.png" alt="Shape Image">
            </div>
        </section>
        <section class="testimonial_section section_space_lg">
            <div class="container">
                <div class="testimonial_carousel_box decoration_wrap">
                    <div class="testimonial_carousel row" data-slick='{"dots": false}'>
                        <div class="carousel_item col" data-cursor-text="Drag">
                            <div class="testimonial_item">
                                <div class="item_image"
                                    style="background-image: url('frontend/images/shapes/dot_shape_5.png');">
                                    <img src="frontend/images/testimonial/testimonial_img_1.jpg" alt="Testimonial Image">
                                </div>
                                <div class="item_content">
                                    <div class="section_heading">
                                        <h3 class="heading_text mb-0">
                                            Learner
                                            <span class="heading_focus_text">Stories</span>
                                        </h3>
                                    </div>
                                    <div class="item_icon">
                                        <img src="frontend/images/icons/icon_chat.png" alt="Chat Icon">
                                    </div>
                                    <p>
                                        We could actually read something and then practice it right away and get feedback on
                                        it. The other platforms were more theoretical and expected you to go figure out
                                    </p>
                                    <h4 class="client_name">Allen Hiroda</h4>
                                    <span class="client_designation">Full stack web developer</span>
                                </div>
                            </div>
                        </div>

                        <div class="carousel_item col" data-cursor-text="Drag">
                            <div class="testimonial_item">
                                <div class="item_image"
                                    style="background-image: url('frontend/images/shapes/dot_shape_5.png');">
                                    <img src="frontend/images/testimonial/testimonial_img_1.jpg" alt="Testimonial Image">
                                </div>
                                <div class="item_content">
                                    <div class="section_heading">
                                        <h3 class="heading_text mb-0">
                                            Learner
                                            <span class="heading_focus_text">Stories</span>
                                        </h3>
                                    </div>
                                    <div class="item_icon">
                                        <img src="frontend/images/icons/icon_chat.png" alt="Chat Icon">
                                    </div>
                                    <p>
                                        We could actually read something and then practice it right away and get feedback on
                                        it. The other platforms were more theoretical and expected you to go figure out
                                    </p>
                                    <h4 class="client_name">Allen Hiroda</h4>
                                    <span class="client_designation">Full stack web developer</span>
                                </div>
                            </div>
                        </div>

                        <div class="carousel_item col" data-cursor-text="Drag">
                            <div class="testimonial_item">
                                <div class="item_image"
                                    style="background-image: url('frontend/images/shapes/dot_shape_5.png');">
                                    <img src="frontend/images/testimonial/testimonial_img_1.jpg" alt="Testimonial Image">
                                </div>
                                <div class="item_content">
                                    <div class="section_heading">
                                        <h3 class="heading_text mb-0">
                                            Learner
                                            <span class="heading_focus_text">Stories</span>
                                        </h3>
                                    </div>
                                    <div class="item_icon">
                                        <img src="frontend/images/icons/icon_chat.png" alt="Chat Icon">
                                    </div>
                                    <p>
                                        We could actually read something and then practice it right away and get feedback on
                                        it. The other platforms were more theoretical and expected you to go figure out
                                    </p>
                                    <h4 class="client_name">Allen Hiroda</h4>
                                    <span class="client_designation">Full stack web developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deco_item shape_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                        <img src="frontend/images/shapes/dot_shape_2.png" alt="Shape Image">
                    </div>
                    <div class="deco_item shape_2" data-parallax='{"y" : 130, "smoothness": 6}'>
                        <img src="frontend/images/shapes/line_shape_1.png" alt="Shape Image">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
