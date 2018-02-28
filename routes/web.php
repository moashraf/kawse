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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('clients', 'clientsController');

Route::resource('projects', 'ProjectsController');

Route::resource('galleryProjects', 'gallery_ProjectController');

Route::resource('catProjects', 'catProjectController');

Route::resource('services', 'servicesController');

Route::resource('siteStings', 'siteStingsController');

Route::resource('sliders', 'sliderController');

Route::resource('reviews', 'ReviewsController');