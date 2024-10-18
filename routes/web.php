<?php

use Illuminate\Support\Facades\Route;

// Route for the root URL (default home page)
Route::get('/', function () {
    return view('components.home');
})->name('home');

// Route for the about page
Route::get('/about', function () {
    return view('components.about');
})->name('about');

// Route for the content page
Route::get('/content', function () {
    return view('components.content');
})->name('content');

// Route for the Routes activity
Route::get('/routes', function () {
    return view('components.routes'); 
})->name('routes');

// Route for the Layouts activity
Route::get('/layouts', function () {
    return view('components.layouts'); 
})->name('layouts');

// Route for the Middleware activity
Route::get('/middleware', function () {
    return view('components.middleware');
})->name('middleware');
