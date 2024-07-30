<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | EDUCATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/ionicons/dist/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/demo_1/style.css') }}">
    <link rel="shortcut icon" href="{{ url('backend/images/favourite_icon.png') }}" />
</head>

<body>
    <?php
    $Admin = App\Models\backend\AdminAuthModel::first();
    ?>
    <div class="container-scroller">
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('home.show') }}">
                    <img src="{{ url('frontend/images/logo/site_logo.png') }}"
                        alt="Education, Online Course, LMS Creative" class="mt-4">
                </a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('home.show') }}">
                    <img src="{{ url('frontend/images/logo/site_logo.png') }}" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +92 309 0742546</li>
                </ul>
                <form class="ml-auto search-form d-none d-md-block" action="#">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="Search Here">
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-primary">Search</button>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            @if ($Admin->image)
                                <img class="img-xs rounded-circle" src="{{ url($Admin->image) }}" alt="profile image">
                            @else
                                <img class="img-xs rounded-circle" src="{{ url('backend/images/profile.png') }}"
                                    alt="default profile image">
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                @if ($Admin->image)
                                    <img class="img-xs rounded-circle" src="{{ url($Admin->image) }}"
                                        alt="profile image">
                                @else
                                    <img class="img-xs rounded-circle" src="{{ url('backend/images/profile.png') }}"
                                        alt="default profile image">
                                @endif
                                <p class="mb-1 mt-3 font-weight-semibold">{{ $Admin->name }}</p>
                                <p class="font-weight-light text-muted mb-0">{{ $Admin->email }}</p>
                            </div>
                            <a class="dropdown-item" href="{{ route('profile.show', ['token' => $Admin->token]) }}">My
                                Profile<i class="dropdown-item-icon ti-dashboard"></i></a>
                            <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                            <a class="dropdown-item" href="{{ route('admin.signout') }}">Sign Out<i
                                    class="dropdown-item-icon ti-power-off"></i></a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                @if ($Admin->image)
                                    <img class="img-xs rounded-circle" src="{{ url($Admin->image) }}"
                                        alt="profile image">
                                @else
                                    <img class="img-xs rounded-circle" src="{{ url('backend/images/profile.png') }}"
                                        alt="default profile image">
                                @endif
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">{{ $Admin->name }}</p>
                                <p class="designation">Supeer Admin</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Main Menu</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.show') }}">
                            <i class="menu-icon typcn typcn-document-text"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#coursesManagement" data-toggle="collapse" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon typcn typcn-shopping-bag"></i>
                            <span class="menu-title">Courses Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="coursesManagement">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/courses') }}">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/courses/catageory') }}">Catageory</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#instructor" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Instructor Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="instructor">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/instructor ') }}">Instructors List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#event" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon typcn typcn-coffee"></i>
                            <span class="menu-title">Event Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="event">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/events') }}">Event List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
