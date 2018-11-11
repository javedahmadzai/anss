<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', 'PageController@index')->name('home');

// About
Route::get('/about', 'PageController@about');
Route::get('/strategic-plans', 'PageController@strategicPlans');
Route::get('/board-of-directors', 'PageController@boardOfDirectors');

// Services
Route::get('/services', 'PageController@services');
Route::get('/immigration-and-settlement', 'PageController@immigrationAndSettlement');
Route::get('/cultural-environmental-and-educational', 'PageController@culturalEnvironmentalAndEducational');
Route::get('/networking-and-community-based-research', 'PageController@networkingAndCommunityBasedResearch');

// Events
Route::get('/events', 'PageController@events');
Route::get('/upcoming-events', 'PageController@upcomingEvents');
Route::get('/past-events', 'PageController@pastEvents');

// Latest News
Route::get('/latest-news/{id?}', 'PageController@latestNews');

// Gallery
Route::get('/gallery', 'PageController@gallery');

// Appointments
Route::get('/appointments', 'PageController@appointments');
Route::get('/appointments/{id}', 'PageController@appointmentsPage');
Route::post('/appointments/{id}', 'PageController@appointmentsBook');

// Donate
Route::get('/donate', 'PageController@donate');

// Contact
Route::get('/contact', 'PageController@contact');
Route::post('/contact', 'PageController@contactMail');

// Authentication
Auth::routes(['verify' => true]);

// Admin
Route::prefix('/admin')->group(function() {

    // Home
    Route::get('/', 'AdminController@index');

    // Categories
    Route::resource('/categories', 'CategoryController');

    // Images
    Route::resource('/images', 'ImageController');

    // Appointments
    Route::resource('/appointments', 'AppointmentController');

    // News
    Route::resource('/news', 'NewsController');

    // Events
    Route::resource('/events', 'EventsController');

});
