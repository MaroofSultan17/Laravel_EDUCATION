@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
    <main class="page_content">
        <section class="banner_section banner_style_2">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="order-lg-last col col-lg-5">
                        <div class="banner_image_2" style="background-image: url('frontend/images/shapes/shape_6.png');">
                            <img src="frontend/images/banner/banner_img_4.png" alt="Person Image">
                        </div>
                    </div>
                    <div class="col col-lg-5">
                        <div class="banner_content">
                            <h1 class="banner_title wow fadeInUp">
                                Join the millions learning to new things from us
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".2s">
                                Changing lives, businesses, and nations through talent transformation in digital
                                technologies.
                            </p>
                            <div class="wow fadeInUp" data-wow-delay=".4s">
                                <a class='btn btn_primary' href={{ route('about.show') }}>
                                    <span>
                                        <small>Go For Business Learning</small>
                                        <small>Go For Business Learning</small>
                                    </span>
                                    <i class="far fa-long-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="policy_section decoration_wrap">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-4">
                        <div class="policy_item">
                            <div class="item_icon">
                                <img src="frontend/images/icons/icon_online_education_2.png" alt="Icon Online Education">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Build A Career</h3>
                                <p class="mb-0">Everything you need to land job</p>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-4">
                        <div class="policy_item">
                            <div class="item_icon">
                                <img src="frontend/images/icons/icon_globe.png" alt="Icon Globe">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Explore Subjects</h3>
                                <p class="mb-0">See how varies skills you have</p>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-4">
                        <div class="policy_item">
                            <div class="item_icon">
                                <img src="frontend/images/icons/icon_online_education_1.png" alt="Icon Online Education">
                            </div>
                            <div class="item_content">
                                <h3 class="item_title">Gain A Skill</h3>
                                <p class="mb-0">Focus on what’s you need</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deco_item deco_img_1" data-parallax='{"rotateZ" : 180, "smoothness": 6}'>
                <img src="frontend/images/shapes/shape_7.png" alt="Shape Image">
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"y" : -130, "smoothness": 6}'>
                <img src="frontend/images/shapes/shape_8.png" alt="Shape Image">
            </div>
            <div class="deco_item deco_img_3" data-parallax='{"x" : -130, "smoothness": 6}'>
                <img src="frontend/images/shapes/dot_shape_6.png" alt="Shape Image">
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
                                @foreach ($catageory as $category)
                                    <li role="presentation">
                                        <button class="{{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab"
                                            data-bs-target="#{{ $category->catageory_name }}" type="button" role="tab"
                                            aria-selected="{{ $loop->first ? 'true' : 'false' }}" data-magnetic>
                                            {{ strtoupper($category->catageory_name) }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    @foreach ($catageory as $category)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                            id="{{ $category->catageory_name }}" role="tabpanel">
                            <div class="row">
                                @foreach ($courses as $coursedata)
                                    @if ($coursedata->catageory_name == $category->catageory_name)
                                        <div class="col col-lg-3 col-md-6 col-sm-6">
                                            <div class="course_item">
                                                <div class="item_image">
                                                    <ul class="badge_group unordered_list">
                                                        <li><a class="badge bg-danger"
                                                                href="#!">{{ $coursedata->badge }}</a>
                                                        </li>
                                                    </ul>
                                                    <a class='image_wrap p-2' href="{{ route('course_details.show') }}">
                                                        <img style="object-fit: cover; width: 400px; height: 300px;"
                                                            src="{{ url($coursedata->image) }}"
                                                            alt="Education, Online Course, LMS Creative Site Template">
                                                    </a>
                                                </div>
                                                <div class="item_content">
                                                    <a class="course_instructor btn_unfill"
                                                        href="#!">{{ strtoupper($coursedata->instructor_name) }}</a>
                                                    <h3 class="item_title">
                                                        <a href="{{ route('course_details.show') }}">
                                                            {{ $coursedata->coursedetails }}
                                                        </a>
                                                    </h3>
                                                    <ul class="course_meta unordered_list">
                                                        <li><a href="#!"><i class="far fa-bars me-1"></i>
                                                                {{ $coursedata->courselevel }}</a></li>
                                                        <li><a href="#!"><i class="fal fa-clone me-1"></i>
                                                                {{ $coursedata->courselectures }} Lessons</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="promembership_section decoration_wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-3">
                        <div class="item_image">
                            <div class="image_wrap">
                                <img src="frontend/images/meta/thumbnail_img_1.png" alt="Person Image">
                            </div>
                            <div class="deco_item deco_img_1" data-parallax='{"rotateZ" : 180, "smoothness": 6}'>
                                <img src="frontend/images/shapes/dot_shape_7.png" alt="Shape Image">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <h2 class="title_text">
                            Get free Pro memberships for your high school class
                        </h2>
                    </div>
                    <div class="col col-lg-3">
                        <a class='btn btn_primary' href={{ route('courses.show') }}>
                            <span>
                                <small>Explore All Courses</small>
                                <small>Explore All Courses</small>
                            </span>
                            <i class="far fa-long-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="deco_item deco_img_2" data-parallax='{"rotateZ" : 45, "smoothness": 6}'>
                <img src="frontend/images/shapes/shape_9.png" alt="Shape Image">
            </div>
        </section>
        <section class="category_section section_space_md">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        Most popular
                        <span class="heading_focus_text">categories</span>
                    </h2>
                </div>

                <div class="category2_items_wrapper row justify-content-center">
                    <div class="col col-lg-3">
                        <div class="category_item_2">
                            <a href="{{ route('course_details.show') }}">
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_test_tube.png" alt="Icon Test Tube">
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
                                    <img src="frontend/images/icons/icon_calendar.png" alt="Icon Test Tube">
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
                                    <img src="frontend/images/icons/icon_design.png" alt="Icon Test Tube">
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
                                    <img src="frontend/images/icons/icon_briefcase.png" alt="Icon Test Tube">
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
                                    <img src="frontend/images/icons/icon_science.png" alt="Icon Test Tube">
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
                                    <img src="frontend/images/icons/icon_rocket.png" alt="Icon Test Tube">
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
                                    <img src="frontend/images/icons/icon_space.png" alt="Icon Test Tube">
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
                            <a href='href="{{ route('course_details.show') }}"'>
                                <span class="item_icon">
                                    <img src="frontend/images/icons/icon_microscope.png" alt="Icon Test Tube">
                                </span>
                                <span class="item_content">
                                    <strong class="item_title d-block">Biology</strong>
                                    <small class="item_counter d-block">2 courses</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="btn_wrap text-center">
                    <a class='btn_unfill' href="{{ route('course_catageory.show') }}">
                        Explore All Courses
                        <i class="far fa-angle-double-right"></i>
                    </a>
                </div>
            </div>
        </section>
        <section class="getstart_section_2">
            <div class="container">
                <div class="content_box decoration_wrap">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <div class="item_image">
                                <div class="image_wrap">
                                    <img src="frontend/images/meta/thumbnail_img_2.png" alt="Person Image">
                                </div>
                                <div class="deco_item deco_img_1">
                                    <img src="frontend/images/shapes/shape_10.png" alt="Shape Image">
                                </div>
                                <div class="deco_item deco_img_2" data-parallax='{"rotateZ" : 90, "smoothness": 6}'>
                                    <img src="frontend/images/shapes/shape_11.png" alt="Shape Image">
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="item_content">
                                <h2 class="title_text">
                                    Level up your team's skills
                                </h2>
                                <p>
                                    Give your team the knowledge, experience, and confidence they need to tackle any
                                    problem.We want to create a world where anyone can build something meaningful
                                </p>
                                <a class="btn btn_primary" href="#!">
                                    <span>
                                        <small>Try For Business</small>
                                        <small>Try For Business</small>
                                    </span>
                                    <i class="far fa-long-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="deco_item deco_img_3" data-parallax='{"scale" : 0.6, "smoothness": 6}'>
                        <img src="frontend/images/shapes/shape_12.png" alt="Shape Image">
                    </div>
                    <div class="deco_item deco_img_4" data-parallax='{"scale" : 0.6, "smoothness": 6}'>
                        <img src="frontend/images/shapes/shape_13.png" alt="Shape Image">
                    </div>
                </div>
            </div>
        </section>
        <section class="event_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        On going
                        <span class="heading_focus_text">events</span>
                        near you
                    </h2>
                </div>
                <div class="row justify-content-center">
                    @php
                        use Carbon\Carbon;
                    @endphp
                    @foreach ($events as $eventdata)
                        <div class="col col-lg-4 col-md-6 col-sm-7 mb-4">
                            <div class="event_item">
                                <a class='item_image' href="{{ route('events_details') }}">
                                    <img src="{{ url($eventdata->image) }}" alt="Event Image"
                                        style="object-fit: cover; width: 400px; height: 300px;">
                                </a>
                                <div class="item_content">
                                    <ul class="post_meta post_meta unordered_list">
                                        <li class="date_text">
                                            <span class="d-block">
                                                <strong
                                                    class="d-block">{{ Carbon::parse($eventdata->date)->format('d') }}</strong>
                                                <small
                                                    class="d-block">{{ Carbon::parse($eventdata->date)->format('F') }}</small>
                                            </span>
                                        </li>
                                        <li><a href="#"><i
                                                    class="fas fa-map-marker-alt me-1"></i>{{ $eventdata->address }}</a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title mb-0">
                                        <a href="{{ route('events_details') }}">
                                            {{ $eventdata->title }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
