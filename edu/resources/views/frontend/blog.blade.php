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
                        @php
                            use Illuminate\Support\Str;
                            use Carbon\Carbon;
                        @endphp
                        @foreach ($blog_details as $blog)
                            <div class="row">
                                <div class="col">
                                    <div class="blog_item">
                                        <a class='item_image' href="{{ route('blog_details.show', ['blog_id' => $blog->id]) }}">
                                            <img src="{{ url($blog->image) }}" alt="Blog Image"
                                                style="width: 800px; height: 500px; object-fit:cover;">
                                        </a>
                                        <div class="item_content">
                                            <ul class="post_meta unordered_list">
                                                <li><a href="#!">{{ $blog->name }}</a></li>
                                                <li>
                                                    {{ Carbon::parse($blog->date)->format('d') }}
                                                    {{ Carbon::parse($blog->date)->format('F') }}
                                                </li>
                                                <li><a href="#!">0 Comments</a></li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="{{ route('blog_details.show', ['blog_id' => $blog->id]) }}">
                                                    {{ $blog->heading }}
                                                </a>
                                            </h3>
                                            <p>{{ Str::words($blog->details, 30, '...') }}</p>
                                            <a class='btn_unfill' href="{{ route('blog_details.show', ['blog_id' => $blog->id]) }}">
                                                Read More
                                                <i class="far fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                                            <a href="{{ constant('sitefacebook') }}">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ constant('sitetwitter') }}">
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ constant('sitelinkedin') }}">
                                                <i class="fab fa-linkedin-in"></i>
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ constant('siteyoutube') }}">
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
                                        <a class='blog_item_small' href="#">
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
                                        <a class='blog_item_small' href="#">
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
                                        <a class='blog_item_small' href="#">
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
