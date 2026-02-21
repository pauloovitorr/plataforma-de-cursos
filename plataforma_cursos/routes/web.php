<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)
    ->group(function () {

        Route::get('/', 'index')->name('home.index');

    });


Route::controller(CourseController::class)
    ->group(function () {

        Route::get('/course', 'index')->name('course.index');

    });


Route::controller(LessonController::class)
    ->group(function () {

        Route::get('/lesson', 'index')->name('lesson.index');

    });


Route::controller(CoursesController::class)
    ->group(function () {

        Route::get('/courses', 'index')->name('courses.index');

    });


Route::controller(ContactController::class)
    ->group(function () {

        Route::get('/contact', 'index')->name('contact.index');

    });


Route::controller(LoginController::class)
    ->group(function () {

        Route::get('/login', 'index')->name('login.index');
        Route::post('/login', 'store')->name('login.store');

    });


Route::controller(CheckoutController::class)
    ->group(function () {

        Route::get('/checkout', 'index')->name('checkout.index');

    });




