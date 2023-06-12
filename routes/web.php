<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/all-course', function () {
    return view('course.all-course');
})->name('all-course');

Route::get('/ui-ux', function () {
    return view('course.ui-ux');
})->name('ui-ux');

Route::get('/full-stack-dev', function () {
    return view('course.full-stack-development');
})->name('full-stack-dev');

Route::get('/react-js', function () {
    return view('course.react-course');
})->name('react-js');

Route::get('/web-development', function () {
    return view('course.web-development');
})->name('web-development');

Route::get('/node-js', function () {
    return view('course.node-js');
})->name('node-js');

Route::get('/react-native', function () {
    return view('course.react-native');
})->name('react-native');

Route::get('/advance-laravel', function () {
    return view('course.advance-laravel');
})->name('advance-laravel');

Route::get('/web-design', function () {
    return view('course.web-design');
})->name('web-design');

Route::get('/basic-php', function () {
    return view('course.basic-php');
})->name('basic-php');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/event', function () {
    return view('event');
})->name('event');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::post('/contacts',[ContactsController::class,'store'])->name('contact.store');
Route::post('/courses',[CourseController::class,'store'])->name('courses.store');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes([]);
Route::get('/admin-panel', function () {
    return view('admin.index');
})->middleware('auth');
Route::get('/admin/contacts', [ContactsController::class, 'index'])->name('contact.show')->middleware('auth');;
Route::get('/admin/courses', [CourseController::class, 'index'])->name('course.show')->middleware('auth');;
