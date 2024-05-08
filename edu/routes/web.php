<?php

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submitMessage']);
