<?php

use App\Http\Controllers\backend\AdminAddCoursesController;
use App\Http\Controllers\backend\AdminAuthController;
use App\Http\Controllers\backend\AdminCourseCatageoryController;
use App\Http\Controllers\backend\AdminCoursesController;
use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\backend\AdminEventController;
use App\Http\Controllers\backend\AdminInstructorController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AuthController;
use App\Http\Controllers\frontend\BlogDetailsController;
use App\Http\Controllers\frontend\BlogsController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CourseCatageoryController;
use App\Http\Controllers\frontend\CourseDetailsController;
use App\Http\Controllers\frontend\CoursesController;
use App\Http\Controllers\frontend\EventDetailsController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;


//Frontend
Route::get('/', [HomeController::class, 'index'])->name('home.show');
Route::get('/login', [AuthController::class, 'login'])->name('login.show');
Route::post('/login/submit', [AuthController::class, 'login_auth'])->name('login.auth');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup.show');
Route::post('/signup/submit', [AuthController::class, 'register'])->name('signup.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitMessage'])->name('contact.add');
Route::get('/catageory', [CourseCatageoryController::class, 'index'])->name('course_catageory.show');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses.show');
Route::get('/course-details', [CourseDetailsController::class, 'index'])->name('course_details.show');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.show');
Route::get('/about', [AboutController::class, 'index'])->name('about.show');
Route::get('/blog-details', [BlogDetailsController::class, 'index'])->name('blog_details.show');
Route::get('/events/details', [EventDetailsController::class, 'index'])->name('events_details');




//Admin ROutes
Route::get('/admin', [AdminAuthController::class, 'login'])->name('login.show');
Route::post('/admin/login', [AdminAuthController::class, 'login_auth'])->name('login.auth');
Route::get('/admin/register', [AdminAuthController::class, 'register'])->name('register.show');
Route::post('/admin/register/submit', [AdminAuthController::class, 'admin_register'])->name('register.submit');


//Admin Middleware
Route::middleware('isAdmin')->group(function () {
    Route::get('/admin/profile/{token}', [AdminProfileController::class, 'profile'])->name('profile.show');
    Route::get('/admin/profile-edit/{token}', [AdminProfileController::class, 'profile_edit'])->name('profile_edit.show');
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.show');
    Route::get('/admin/courses', [AdminCoursesController::class, 'index']);
    Route::get('/admin/courses/add', [AdminAddCoursesController::class, 'index']);
    Route::post('/admin/courses/add', [AdminAddCoursesController::class, 'addcourses']);
    Route::get('/admin/courses/catageory', [AdminCourseCatageoryController::class, 'catageory']);
    Route::get('/admin/courses/catageory/add', [AdminCourseCatageoryController::class, 'add_catageory']);
    Route::post('/admin/courses/catageory/add', [AdminCourseCatageoryController::class, 'submit_catageory']);
    Route::get('/admin/instructor', [AdminInstructorController::class, 'index']);
    Route::get('/admin/instructor/add', [AdminInstructorController::class, 'instructor']);
    Route::post('/admin/instructor/add', [AdminInstructorController::class, 'add_instructor']);
    Route::get('/admin/events', [AdminEventController::class, 'index']);
    Route::get('/admin/events/add', [AdminEventController::class, 'add_event']);
    Route::post('/admin/events/add', [AdminEventController::class, 'submit_event']);
    Route::get('/admin/signout', [AdminAuthController::class, 'signout'])->name('admin.signout');
});
