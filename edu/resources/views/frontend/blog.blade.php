@extends('frontend.layouts.main')
@section('title', 'Blogs')
@section('main-container')
    <main class="page_content">
        <section class="page_banner decoration_wrap">
            <div class="container">
                <h1 class="page_heading">Latest Blogs</h1>
                <ul class="breadcrumb_nav unordered_list_center">
                    <li><a href='{{ route('home.show') }}'>Home</a></li>
                    <li>Our Blogs</li>
                </ul>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"y" : -200, "smoothness": 6}'>
                <img src="frontend/images/shapes/line_shape_1.png" alt="Line Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : 200, "smoothness": 6}'>
                <img src="frontend/images/shapes/dot_shape_2.png" alt="Line Shape Image">
            </div>
        </section>
        <section class="blog_section section_space_md pt-0">
            <div class="container">
                <div class="row justify-content-lg-between">

                    <div class="col col-lg-8">
                        <div class="row">
                            <div class="col">
                                <div class="blog_item">
                                    <a class='item_image' href='blog_details.html'>
                                        <img src="frontend/images/blogs/blog_img_6.jpg" alt="Blog Image">
                                    </a>
                                    <div class="item_content">
                                        <ul class="post_meta unordered_list">
                                            <li><a href="#!">Alen Mask</a></li>
                                            <li>09 Aug</li>
                                            <li><a href="#!">0 Comments</a></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href='blog_details.html'>
                                                Everything You Need To Know To Kickstart A Career In UI/UX
                                            </a>
                                        </h3>
                                        <p>
                                            Want to learn how to become a UX Designer? Your first step is learning how to
                                            use Figma, which we'll cover in our new course.
                                        </p>
                                        <a class='btn_unfill' href='blog_details.html'>
                                            Read More
                                            <i class="far fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-md-6 col-sm-6">
                                <div class="blog_item">
                                    <a class='item_image' href='blog_details.html'>
                                        <img src="frontend/images/blogs/blog_img_2.jpg" alt="Blog Image">
                                    </a>
                                    <div class="item_content">
                                        <ul class="post_meta unordered_list">
                                            <li><a href="#!">Alen Mask</a></li>
                                            <li>09 Aug</li>
                                            <li><a href="#!">0 Comments</a></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href='blog_details.html'>
                                                Everything You Need To Know To Kickstart A Career In UI/UX
                                            </a>
                                        </h3>
                                        <p>
                                            Want to learn how to become a UX Designer? Your first step is learning how to
                                            use Figma.
                                        </p>
                                        <a class='btn_unfill' href='blog_details.html'>
                                            Read More
                                            <i class="far fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-md-6 col-sm-6">
                                <div class="blog_item">
                                    <a class='item_image' href='blog_details.html'>
                                        <img src="frontend/images/blogs/blog_img_3.jpg" alt="Blog Image">
                                    </a>
                                    <div class="item_content">
                                        <ul class="post_meta unordered_list">
                                            <li><a href="#!">Alen Mask</a></li>
                                            <li>09 Aug</li>
                                            <li><a href="#!">0 Comments</a></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href='blog_details.html'>
                                                Everything You Need To Know To Kickstart A Career In UI/UX
                                            </a>
                                        </h3>
                                        <p>
                                            Want to learn how to become a UX Designer? Your first step is learning how to
                                            use Figma.
                                        </p>
                                        <a class='btn_unfill' href='blog_details.html'>
                                            Read More
                                            <i class="far fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="blog_item">
                                    <div class="item_image">
                                        <img src="frontend/images/blogs/blog_img_5.jpg" alt="Blog Image">
                                        <a class="video_play_btn" href="#!">
                                            <span>
                                                <small>
                                                    <i class="fas fa-play"></i>
                                                </small>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <ul class="post_meta unordered_list">
                                            <li><a href="#!">Alen Mask</a></li>
                                            <li>09 Aug</li>
                                            <li><a href="#!">0 Comments</a></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href='blog_details.html'>
                                                Everything You Need To Know To Kickstart A Career In UI/UX
                                            </a>
                                        </h3>
                                        <p>
                                            Want to learn how to become a UX Designer? Your first step is learning how to
                                            use Figma, which we'll cover in our new course.
                                        </p>
                                        <a class='btn_unfill' href='blog_details.html'>
                                            Read More
                                            <i class="far fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="blog_item">
                                    <div class="quote_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29.406" height="26"
                                            viewBox="0 0 29.406 26">
                                            <path id="icon" class="cls-1"
                                                d="M383.006,1642.84a6.908,6.908,0,1,0,6.9-7.17,6.642,6.642,0,0,0-2.235.39c1.553-9.24,8.5-15.21,2.06-10.3-7.141,5.44-6.735,16.86-6.727,17.07A0.016,0.016,0,0,0,383.006,1642.84Zm15.187,0a6.908,6.908,0,1,0,6.9-7.17,6.642,6.642,0,0,0-2.235.39c1.553-9.24,8.5-15.21,2.06-10.3-7.141,5.44-6.735,16.86-6.727,17.07A0.016,0.016,0,0,0,398.193,1642.84Z"
                                                transform="translate(-382.594 -1624)" />
                                        </svg>
                                    </div>
                                    <div class="item_content">
                                        <ul class="post_meta unordered_list">
                                            <li><a href="#!">Alen Mask</a></li>
                                            <li>09 Aug</li>
                                            <li><a href="#!">0 Comments</a></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href='blog_details.html'>
                                                Everything You Need To Know To Kickstart A Career In UI/UX
                                            </a>
                                        </h3>
                                        <p>
                                            Want to learn how to become a UX Designer? Your first step is learning how to
                                            use Figma, which we'll cover in our new course.
                                        </p>
                                        <a class='btn_unfill' href='blog_details.html'>
                                            Read More
                                            <i class="far fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="blog_item">
                                    <div class="video_frame">
                                        <iframe allow="autoplay"
                                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1345110418&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                    </div>
                                    <div class="item_content">
                                        <ul class="post_meta unordered_list">
                                            <li><a href="#!">Alen Mask</a></li>
                                            <li>09 Aug</li>
                                            <li><a href="#!">0 Comments</a></li>
                                        </ul>
                                        <h3 class="item_title">
                                            <a href='blog_details.html'>
                                                Everything You Need To Know To Kickstart A Career In UI/UX
                                            </a>
                                        </h3>
                                        <p>
                                            Want to learn how to become a UX Designer? Your first step is learning how to
                                            use Figma, which we'll cover in our new course.
                                        </p>
                                        <a class='btn_unfill' href='blog_details.html'>
                                            Read More
                                            <i class="far fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pagination">
                            <div class="pagination_context">
                                <span>Page</span>
                            </div>
                            <div class="pagination_input">
                                <input type="number" name="page" max="200" value="1">
                            </div>
                            <div class="pagination_context">
                                <span>of</span>
                                <span class="pagination_pages">10</span>
                            </div>
                            <div class="pagination_button">
                                <button class="pagination_prev" type="button">
                                    <i class="fal fa-angle-left"></i>
                                </button>
                                <button class="pagination_next" type="button">
                                    <i class="fal fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3">
                        <aside class="sidebar">
                            <div class="widget form_item mb-3">
                                <form action="#">
                                    <input type="search" name="search" placeholder="Write your keyword...">
                                    <button type="submit" class="submit_icon">
                                        <img src="frontend/images/icons/icon_search.svg" alt="Icon Search">
                                    </button>
                                </form>
                            </div>

                            <div class="widget sidebar_post_admin text-center">
                                <div class="admin_image">
                                    <img src="frontend/images/meta/thumbnail_img_1.png" alt="Post Admin Image">
                                </div>
                                <h3 class="admin_name">Alen Mask</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
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
                                                <img src="frontend/images/blogs/small_blog_image_1.png" alt="Blog Image">
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
                                                <img src="frontend/images/blogs/small_blog_image_2.png" alt="Blog Image">
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
                                                <img src="frontend/images/blogs/small_blog_image_3.png" alt="Blog Image">
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
                                    <img src="frontend/images/banner/advertisement_banner_img_1.jpg"
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
    </main>
@endsection
