@extends('frontend.layouts.main')
@section('title', 'Blog-details')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container">
                <h1 class="page_heading">Blog Details</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href='{{ route('home.show') }}'>Home</a></li>
                    <li>Blog Details</li>
                </ul>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                <img src="{{ url('frontend/images/shapes/line_shape_1.png') }}" alt="Line Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                <img src="{{ url('frontend/images/shapes/dot_shape_2.png') }}" alt="Line Shape Image">
            </div>
        </section>
        <section class="details_section blog_details_section section_space_md pt-0">
            <div class="container">
                @php
                    use Illuminate\Support\Str;
                    use Carbon\Carbon;
                @endphp
                <div class="row justify-content-lg-between">

                    <div class="col col-lg-8">
                        <div class="details_image">
                            <img src="{{ url($blog_details->image) }}" alt="Blog Image"
                                style="width: 800px; height: 500px; object-fit:cover;">
                        </div>

                        <div class="details_content">
                            <ul class="post_meta unordered_list">
                                <li>
                                    <a href="#!">{{ $blog_details->name }}</a>
                                </li>
                                <li>
                                    {{ Carbon::parse($blog_details->date)->format('d') }}
                                    {{ Carbon::parse($blog_details->date)->format('F') }}
                                </li>
                                <li>
                                    <a href="#!">0 Comments</a>
                                </li>
                            </ul>
                            <h3 class="details_item_title">
                                {{ $blog_details->heading }}
                            </h3>
                            <p>
                                {{ $blog_details->details }}
                            </p>
                            {{-- <p class="mb-0">
                                From browsing the internet with a tree-planting search engine to lending your skills to
                                environmental open-source projects, here's a list of ways you can reduce your carbon
                                footprint and become a more sustainable programmer.
                            </p> --}}
                            <blockquote>
                                <span class="quote_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="30px" height="26px">
                                        <path fill-rule="evenodd" fill="rgb(58, 16, 229)"
                                            d="M30.000,18.835 C30.000,22.792 26.909,25.999 23.096,25.999 C19.284,25.999 16.193,22.792 16.193,18.835 C16.193,18.831 16.194,18.829 16.194,18.826 C16.186,18.616 15.780,7.204 22.921,1.762 C29.362,-3.146 22.414,2.817 20.861,12.063 C21.563,11.813 22.313,11.672 23.096,11.672 C26.909,11.672 30.000,14.879 30.000,18.835 ZM7.909,25.999 C4.097,25.999 1.006,22.792 1.006,18.835 C1.006,18.831 1.007,18.829 1.007,18.826 C0.999,18.616 0.593,7.204 7.734,1.762 C14.175,-3.146 7.227,2.817 5.674,12.063 C6.376,11.813 7.126,11.672 7.909,11.672 C11.722,11.672 14.813,14.879 14.813,18.835 C14.813,22.792 11.722,25.999 7.909,25.999 Z" />
                                    </svg>
                                </span>
                                <p class="blockquote_comment m-0">
                                    While it's most certainly not on individuals to single-handedly reverse climate change,
                                    it can feel good to take actions that make a positive impact on the environment.
                                </p>
                                <cite>- Rakibul Dewan</cite>
                            </blockquote>
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

                    <div class="col col-lg-3">
                        <aside class="sidebar">
                            <div class="widget form_item mb-3">
                                <form action="#">
                                    <input type="search" name="search" placeholder="Write your keyword...">
                                    <button type="submit" class="submit_icon">
                                        <img src="{{ url('frontend/images/icons/icon_search.svg') }}" alt="Icon Search">
                                    </button>
                                </form>
                            </div>

                            <div class="widget sidebar_post_admin text-center">
                                @foreach ($Admin_details as $Admin)
                                    <div class="admin_image">
                                        <img src="{{ url($Admin->image) }}" alt="Post Admin Image">
                                    </div>
                                    <h3 class="admin_name">{{ $Admin->name }}</h3>
                                    <p>
                                        {{ $Admin->email }}
                                    </p>
                                    <ul class="social_icon unordered_list_center">
                                        <li>
                                            <a href="https://www.facebook.com/">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/">
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/">
                                                <i class="fab fa-linkedin-in"></i>
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>

                            <div class="widget category_list">
                                <h3 class="widget_title">Categories</h3>
                                <ul class="unordered_list_block">
                                    <li>
                                        <a href="#!">
                                            <span>Chemistry</span>
                                            <span>(2)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span>Management</span>
                                            <span>(5)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span>Fine Arts</span>
                                            <span>(3)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span>Business</span>
                                            <span>(7)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span>Astrology</span>
                                            <span>(2)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span>SEO</span>
                                            <span>(4)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span>Cosmology</span>
                                            <span>(2)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <span>Biology</span>
                                            <span>(2)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget recent_post">
                                <h3 class="widget_title">Popular Posts</h3>
                                <ul class="unordered_list_block">
                                    <li>
                                        <a class='blog_item_small' href='blog_details.html'>
                                            <span class="item_image">
                                                <img src="{{ url('frontend/images/blogs/small_blog_image_1.png') }}"
                                                    alt="Blog Image">
                                            </span>
                                            <span class="item_content">
                                                <strong class="item_title d-block">
                                                    there are a few easy changes we can make
                                                </strong>
                                                <small class="post_date d-block">9 Aug, 2022</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class='blog_item_small' href='blog_details.html'>
                                            <span class="item_image">
                                                <img src="{{ url('frontend/images/blogs/small_blog_image_2.png') }}"
                                                    alt="Blog Image">
                                            </span>
                                            <span class="item_content">
                                                <strong class="item_title d-block">
                                                    there are a few easy changes we can make
                                                </strong>
                                                <small class="post_date d-block">9 Aug, 2022</small>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class='blog_item_small' href='blog_details.html'>
                                            <span class="item_image">
                                                <img src="{{ url('frontend/images/blogs/small_blog_image_3.png') }}"
                                                    alt="Blog Image">
                                            </span>
                                            <span class="item_content">
                                                <strong class="item_title d-block">
                                                    there are a few easy changes we can make
                                                </strong>
                                                <small class="post_date d-block">9 Aug, 2022</small>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget">
                                <a class="advertisement_banner tilt" href="#!" data-cursor="-opaque">
                                    <img src="{{ url('frontend/images/banner/advertisement_banner_img_1.jpg') }}"
                                        alt="Advertisement Image">
                                </a>
                            </div>

                            <div class="widget">
                                <h3 class="widget_title">Tags</h3>
                                <ul class="tags_list unordered_list">
                                    <li><a href="#!">Learning</a></li>
                                    <li><a href="#!">Course</a></li>
                                    <li><a href="#!">Kids</a></li>
                                    <li><a href="#!">Business</a></li>
                                    <li><a href="#!">Udemo</a></li>
                                    <li><a href="#!">Online</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>

                </div>
            </div>
        </section>
        <!-- Details Section - End
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
                <img src="{{ url('frontend/images/shapes/line_shape_4.png') }}" alt="Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 130, "smoothness": 6}'>
                <img src="{{ url('frontend/images/shapes/shape_5.png') }}" alt="Shape Image">
            </div>
        </section>
    </main>
@endsection
