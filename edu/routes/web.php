<?php

use App\Http\Controllers\backend\AdminAddCoursesController;
use App\Http\Controllers\backend\AdminCoursesController;
use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;


//Frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submitMessage']);




//Admin ROutes
Route::get('/admin', [AdminDashboardController::class, 'index']);
Route::get('/admin/courses', [AdminCoursesController::class, 'index']);
Route::get('/admin/courses/add', [AdminAddCoursesController::class, 'index']);
Route::post('/admin/courses/add', [AdminAddCoursesController::class, 'addcourses']);
