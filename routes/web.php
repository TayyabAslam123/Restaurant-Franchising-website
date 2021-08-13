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


  ## ADMIN PANEL

  ##URL-GROUPING
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/dashboard', function () {
            return view('adminpanel.welcome');
        });

        Route::resource('news', 'NewsController');
        Route::resource('downloads', 'DownloadController');
        Route::resource('careers', 'CareersController');
        Route::resource('franchise', 'FranchiseController');
        //
        Route::resource('contact', 'ContactController');


    });
