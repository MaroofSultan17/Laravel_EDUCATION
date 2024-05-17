<?php

use App\Http\Controllers\backend\AdminAddCoursesController;
use App\Http\Controllers\backend\AdminCoursesController;
use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\frontend\BlogDetailsController;
use App\Http\Controllers\frontend\BlogsController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\CourseCatageoryController;
use App\Http\Controllers\frontend\CourseDetailsController;
use App\Http\Controllers\frontend\CoursesController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;


//Frontend
Route::get('/', [HomeController::class, 'index'])->name('home.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitMessage'])->name('contact.add');
Route::get('/catageory', [CourseCatageoryController::class, 'index'])->name('course_catageory.show');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses.show');
Route::get('/course-details', [CourseDetailsController::class, 'index'])->name('course_details.show');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.show');
Route::get('/blog-details', [BlogDetailsController::class, 'index'])->name('blog_details.show');




//Admin ROutes
Route::get('/admin', [AdminDashboardController::class, 'index']);
Route::get('/admin/courses', [AdminCoursesController::class, 'index']);
Route::get('/admin/courses/add', [AdminAddCoursesController::class, 'index']);
Route::post('/admin/courses/add', [AdminAddCoursesController::class, 'addcourses']);
