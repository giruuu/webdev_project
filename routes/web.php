<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;

// Route for displaying the age verification form
Route::get('/check-age', function () {
    return view('Components.check-age');
})->name('check-age');

// Handle the form submission for age verification
Route::post('/check-age', [AgeController::class, 'storeAge'])->name('store-age');

// Age restricted route for 18+
Route::get('/restricted', function () {
    return view('Components.restricted');
})->middleware('check.age:18')->name('restricted');

// Age restricted route for 21+
Route::get('/restricted-21', function () {
    return view('Components.restricted-21');
})->middleware('check.age:21')->name('restricted-21');

// Route for access denied
Route::get('/access-denied', function () {
    return view('Components.access-denied');
})->name('access-denied');

// Home page route
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
