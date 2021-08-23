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

#### Front End Routing

//MAIN 5 PAGES

//home
Route::get('/', function () {
    return view('user.home');
});
//about
Route::get('/about', function () {
    return view('user.about');
});
//frenchise
Route::get('/get-frenchise', function () {
    return view('user.frenchise');
});
//gallery
Route::get('/gallery', function () {
    return view('user.gallery');
});
//menu
Route::get('/menu', function () {
    return view('user.menu');
});
//contact us
Route::get('/contact-us', function () {
    return view('user.contact');
});


//MORE PAGES

//profile
Route::get('/profile', function () {
    return view('user.profile');
});
//faqs
Route::get('/faqs', function () {
    return view('user.faqs');
});
//news
Route::get('/news', function () {
    return view('user.news');
});
//careers
  Route::get('/careers', function () {
    return view('user.careers');
  });
//downloads
  Route::get('/downloads', function () {
    return view('user.downloads');
  });

  //vendors
  Route::get('/our-vendors', function () {
    return view('user.vendors');
  });

  //our clients
  Route::get('/our-clients', function () {
    return view('user.client');
  });


  ## ADMIN PANEL

  ##URL-GROUPING
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/dashboard','GetFrenchiseController@dashboard')->middleware('auth');
        Route::resource('news', 'NewsController')->middleware('auth');
        Route::resource('downloads', 'DownloadController')->middleware('auth');
        Route::resource('careers', 'CareersController')->middleware('auth');
        Route::resource('franchise', 'FranchiseController')->middleware('auth');
        //
        Route::resource('contact', 'ContactController');
        Route::resource('order', 'OrderController');
        Route::resource('faq', 'FaqsController');
        Route::resource('get-frenchise', 'GetFrenchiseController');
    });

    Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
    ]);
##route to log out the user
    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('/home', 'HomeController@index')->name('home');
