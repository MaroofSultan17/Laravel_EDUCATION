@extends('frontend.layouts.main')
@section('title', 'Event-details')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-7">
                        <h1 class="page_heading">
                            Everything You Need To Know To Kickstart A Career In UI/UX
                        </h1>
                        <ul class="post_meta unordered_list_center">
                            <li><i class="far fa-calendar-alt me-1"></i> 21 March</li>
                            <li><a href="#!"><i class="fas fa-map-marker-alt me-1"></i> North Caroline United States</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                <img src="{{ url('frontend/images/shapes/line_shape_1.png') }}" alt="Line Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                <img src="{{ url('frontend/images/shapes/dot_shape_2.png') }}" alt="Line Shape Image">
            </div>
        </section>
        <!-- Page Banner - End
                                            ================================================== -->

        <!-- Details Section - Start
                                            ================================================== -->
        <section class="details_section event_details_section section_space_lg pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col col-lg-10">
                        <div class="details_image">
                            <img src="{{ url('frontend/images/events/event_details_img_1.jpg') }}"
                                alt="Education Event Image">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col col-lg-8">
                        <div class="details_content">
                            <p>
                                While it's most certainly not on individuals to single-handedly reverse climate change, it
                                can feel good to take actions that make a positive impact on the environment. And for
                                programmers and software developers, specifically, there are a few easy changes we can make
                                to our day-to-day that'll help us be more sustainable in our consumption and development of
                                tech.
                            </p>
                            <p>
                                From browsing the internet with a tree-planting search engine to lending your skills to
                                environmental open-source projects, here's a list of ways you can reduce your carbon
                                footprint and become a more sustainable programmer.
                            </p>
                            <div class="row mb-3">
                                <div class="col col-md-6 col-sm-6">
                                    <div class="details_image m-0">
                                        <img src="{{ url('frontend/images/events/event_img_1.png') }}"
                                            alt="Education Event">
                                    </div>
                                </div>
                                <div class="col col-md-6 col-sm-6">
                                    <div class="details_image m-0">
                                        <img src="{{ url('frontend/images/events/event_img_2.png') }}"
                                            alt="Education Event">
                                    </div>
                                </div>
                            </div>
                            <h3 class="details_info_title">
                                Contribute to environmental open-source projects
                            </h3>
                            <p class="mb-0">
                                From browsing the internet with a tree-planting search engine to lending your skills to
                                environmental open-source projects, here's a list of ways you can reduce your carbon
                                footprint and become a more sustainable programmer.
                            </p>
                            <hr>
                            <div class="social_activity_links">
                                <div class="item_tags">
                                    <span class="wrap_title">Tags:</span>
                                    <ul class="tags_list unordered_list">
                                        <li><a href="#!">Learning</a></li>
                                        <li><a href="#!">Course</a></li>
                                        <li><a href="#!">Online</a></li>
                                    </ul>
                                </div>
                                <div class="item_social_share">
                                    <span class="wrap_title">Share:</span>
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
                            <div class="other_post_nav">
                                <a href="#!">
                                    <span><i class="far fa-angle-left me-1"></i> Previous</span>
                                    <strong>
                                        Python is a general-purpose, versatile, and powerful programming
                                    </strong>
                                </a>
                                <a href="#!">
                                    <span>Next <i class="far fa-angle-right ms-1"></i></span>
                                    <strong>
                                        Python is a general-purpose, versatile, and powerful programming
                                    </strong>
                                </a>
                            </div>
                        </div>

                        <div class="comment_area">
                            <h3 class="comment_area_title">Comments (3)</h3>
                            <ul class="comments_list unordered_list_block">
                                <li>
                                    <div class="comment_item">
                                        <div class="comment_hero_thumbnail">
                                            <img src="{{ url('frontend/images/meta/thumbnail_img_1.png') }}"
                                                alt="Thumbnail">
                                        </div>
                                        <div class="comment_hero_content">
                                            <h4 class="comment_hero_name">Benjami Costa</h4>
                                            <ul class="comments_post_time unordered_list">
                                                <li>9 Nov, 2022</li>
                                                <li>10:21 am</li>
                                            </ul>
                                            <p>
                                                I believe everyone should have the opportunity to create the progress
                                                through the tech and develop the skills. Luxury home prices in Sydney
                                                declined for the first time. Across the world, our sports writers & arts
                                                critics.
                                            </p>
                                            <a class="reply_btn" href="#!"><i class="fas fa-reply-all me-1"></i>
                                                Reply</a>
                                        </div>
                                    </div>
                                    <ul class="comments_list unordered_list_block">
                                        <li>
                                            <div class="comment_item">
                                                <div class="comment_hero_thumbnail">
                                                    <img src="{{ url('frontend/images/meta/thumbnail_img_2.png') }}"
                                                        alt="WebRock Thumbnail">
                                                </div>
                                                <div class="comment_hero_content">
                                                    <h4 class="comment_hero_name">WebRock</h4>
                                                    <ul class="comments_post_time unordered_list">
                                                        <li>9 Nov, 2022</li>
                                                        <li>10:21 am</li>
                                                    </ul>
                                                    <p>
                                                        I believe everyone should have the opportunity to create the
                                                        progress through the tech and develop the skills. Luxury home prices
                                                        in Sydney declined for the first time. Across the world, our sports
                                                        writers & arts critics.
                                                    </p>
                                                    <a class="reply_btn" href="#!"><i
                                                            class="fas fa-reply-all me-1"></i> Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment_item">
                                        <div class="comment_hero_thumbnail">
                                            <img src="{{ url('frontend/images/meta/thumbnail_img_2.png') }}"
                                                alt="Thumbnail">
                                        </div>
                                        <div class="comment_hero_content">
                                            <h4 class="comment_hero_name">Benjami Costa</h4>
                                            <ul class="comments_post_time unordered_list">
                                                <li>9 Nov, 2022</li>
                                                <li>10:21 am</li>
                                            </ul>
                                            <p>
                                                I believe everyone should have the opportunity to create the progress
                                                through the tech and develop the skills. Luxury home prices in Sydney
                                                declined for the first time. Across the world, our sports writers & arts
                                                critics.
                                            </p>
                                            <a class="reply_btn" href="#!"><i class="fas fa-reply-all me-1"></i>
                                                Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="comment_form">
                            <h3 class="comment_form_title mb-2">Leave a Comment</h3>
                            <p>
                                Your email address will not be published. Required fields are marked*
                            </p>
                            <form action="#">
                                <div class="row">
                                    <div class="col col-md-6 col-sm-6">
                                        <div class="form_item mb-0">
                                            <input type="text" name="name" placeholder="Full Name">
                                        </div>
                                    </div>

                                    <div class="col col-md-6 col-sm-6">
                                        <div class="form_item mb-0">
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form_item">
                                            <textarea name="message" placeholder="Your message..."></textarea>
                                        </div>
                                        <button type="submit" class="btn btn_primary">
                                            <span>
                                                <small>Send Message</small>
                                                <small>Send Message</small>
                                            </span>
                                            <i class="fal fa-paper-plane ms-1"></i>
                                        </button>
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
                <img src="{{ url('frontend/images/shapes/line_shape_4.png') }}" alt="Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 130, "smoothness": 6}'>
                <img src="{{ url('frontend/images/shapes/shape_5.png') }}" alt="Shape Image">
            </div>
        </section>
    </main>
@endsection
