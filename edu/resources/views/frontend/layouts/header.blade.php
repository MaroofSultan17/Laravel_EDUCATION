@if (url()->current() == url('/'))
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') | EDUCATION</title>
        <link rel="shortcut icon" href="{{ url('frontend/images/logo/favourite_icon.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/fontawesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/cursor.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('rontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">
    </head>


    <body>
        <div class="page_wrapper">
            <div class="backtotop">
                <a href="#" class="scroll">
                    <i class="far fa-arrow-up"></i>
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
            <header class="site_header header_style_2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-lg-3 col-6">
                            <div class="site_logo">
                                <a class='site_link' href="{{ url('/') }}">
                                    <img src="{{ url('frontend/images/logo/site_logo.png') }}"
                                        alt="Education, Online Course, LMS Creative">
                                </a>
                            </div>
                        </div>
                        <div class="col col-lg-3">
                            <div class="header_search">
                                <input type="search" name="search" placeholder="Search Courses">
                                <button type="submit">
                                    <img src="{{ url('frontend/images/icons/icon_search.svg') }}" alt="Icon Search">
                                </button>
                            </div>
                        </div>
                        <div class="col col-lg-6 col-6">
                            <nav class="main_menu navbar navbar-expand-lg">
                                <div class="main_menu_inner collapse navbar-collapse justify-content-center"
                                    id="main_menu_dropdown">
                                    <ul class="main_menu_list unordered_list_center">
                                        <li class="{{ url()->current() == url('/') ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ url('/') }}" id="home_submenu"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link" href="#" id="pages_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Pages
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="pages_submenu">
                                                <li><a href='about.html'>About Us</a></li>
                                                <li class="dropdown">
                                                    <a class="nav-link" href="#" id="register_submenu"
                                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        My Account
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="register_submenu">
                                                        <li><a href='login.html'>Login Form</a></li>
                                                        <li><a href='signup.html'>Sign Up Form</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href='instructor.html'>Instructors</a></li>
                                                <li><a href='membership.html'>Membership</a></li>
                                                <li><a href='event_details.html'>Event Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link" href="#" id="courses_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Courses
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="courses_submenu">
                                                <li><a href='category.html'>Course Categories</a></li>
                                                <li><a href='course.html'>Our Courses</a></li>
                                                <li><a href='course_details.html'>Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link" href="#" id="blog_submenu" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Blog
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="blog_submenu">
                                                <li><a href='blog.html'>Our Blogs</a></li>
                                                <li><a href='blog_details.html'>Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a class='nav-link' href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                                <ul class="header_btns_group unordered_list_end">
                                    <li>
                                        <button data-magnetic data-cursor="-opaque" class="mobile_menu_btn"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <i class="far fa-bars"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <a class='login_btn' data-cursor='-opaque' data-magnetic href='login.html'>
                                            <i class="far fa-user"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <button data-magnetic data-cursor="-opaque" type="button" class="cart_btn"
                                            id="cart_dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="far fa-shopping-cart"></i>
                                            <span class="cart_counter">0</span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="cart_dropdown">
                                            <h3 class="cart_empty_text text-center mb-0"><span class="d-block">No
                                                    products</span> in the cart.</h3>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        @else
            <!doctype html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <title>@yield('title') | EDUCATION</title>
                <link rel="shortcut icon" href="{{ url('frontend/images/logo/favourite_icon.png') }}">
                <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/bootstrap.min.css') }}">
                <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/fontawesome.css') }}">
                <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/cursor.css') }}">
                <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/slick.css') }}">
                <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/animate.css') }}">
                <link rel="stylesheet" type="text/css" href="{{ url('rontend/css/magnific-popup.css') }}">
                <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">
            </head>

            <body>
                <div class="page_wrapper">
                    <div class="backtotop">
                        <a href="#" class="scroll">
                            <i class="far fa-arrow-up"></i>
                            <i class="far fa-arrow-up"></i>
                        </a>
                    </div>
                    <header class="site_header header_style_1">
                        <div class="header_top text-center">
                            <p class="m-0">Learn more with exclusive courses, quizzes, and extra practice content
                            </p>
                            <a class='btn btn_warning' href='about.html'>
                                <span>
                                    <small>Learn more</small>
                                    <small>Learn more</small>
                                </span>
                                <i class="far fa-long-arrow-right ms-1"></i>
                            </a>
                        </div>
                        <div class="header_bottom">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col col-lg-3 col-5">
                                        <div class="site_logo">
                                            <a class='site_link' href='index.html'>
                                                <img src="{{ url('frontend/images/logo/site_logo.png') }}"
                                                    alt="Education, Online Course, LMS Creative">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col col-lg-6 col-2">
                                        <nav class="main_menu navbar navbar-expand-lg">
                                            <div class="main_menu_inner collapse navbar-collapse justify-content-center"
                                                id="main_menu_dropdown">
                                                <ul class="main_menu_list unordered_list_center">
                                                    <li class="{{ url()->current() == url('/') ? 'active' : '' }}">
                                                        <a class='nav-link' href="{{ url('/') }}">Home</a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="nav-link" href="#" id="pages_submenu"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Pages
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="pages_submenu">
                                                            <li><a href='about.html'>About Us</a></li>
                                                            <li class="dropdown">
                                                                <a class="nav-link" href="#"
                                                                    id="register_submenu" role="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    My Account
                                                                </a>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="register_submenu">
                                                                    <li><a href='login.html'>Login Form</a></li>
                                                                    <li><a href='signup.html'>Sign Up Form</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href='instructor.html'>Instructors</a></li>
                                                            <li><a href='membership.html'>Membership</a></li>
                                                            <li><a href='event_details.html'>Event Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="nav-link" href="#" id="courses_submenu"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Courses
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="courses_submenu">
                                                            <li><a href='category.html'>Course Categories</a></li>
                                                            <li><a href='course.html'>Our Courses</a></li>
                                                            <li><a href='course_details.html'>Course Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="nav-link" href="#" id="blog_submenu"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Blog
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="blog_submenu">
                                                            <li><a href='blog.html'>Our Blogs</a></li>
                                                            <li><a href='blog_details.html'>Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="{{ url()->current() == url('/contact') ? 'active' : '' }}">
                                                        <a class='nav-link' href="{{ url('/contact') }}">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="col col-lg-3 col-5">
                                        <ul class="header_btns_group unordered_list_end">
                                            <li>
                                                <button data-magnetic data-cursor="-opaque" class="mobile_menu_btn"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#main_menu_dropdown"
                                                    aria-controls="main_menu_dropdown" aria-expanded="false"
                                                    aria-label="Toggle navigation">
                                                    <i class="far fa-bars"></i>
                                                </button>
                                            </li>
                                            <li class="dropdown">
                                                <button data-magnetic data-cursor="-opaque" type="button"
                                                    class="cart_btn" id="cart_dropdown" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="far fa-shopping-cart"></i>
                                                    <span class="cart_counter">0</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="cart_dropdown">
                                                    <h3 class="cart_empty_text text-center mb-0"><span
                                                            class="d-block">No
                                                            products</span> in the cart.</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a class='login_btn' data-cursor='-opaque' data-magnetic
                                                    href='login.html'>
                                                    <i class="far fa-user"></i>
                                                    <span>Login</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class='btn btn_primary' href='signup.html'>
                                                    <i class="far fa-user-plus me-1"></i>
                                                    <span>
                                                        <small>Sign Up</small>
                                                        <small>Sign Up</small>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
@endif
