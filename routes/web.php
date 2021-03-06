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
 Route::get('/', 'ccc\fronthomeController@index');
 Route::resource('client', 'ccc\frontclientsController');
 Route::resource('Projects', 'ccc\frontProjectsController');
 Route::resource('about', 'ccc\frontaboutController');
 Route::resource('service', 'ccc\frontservicesController');
 Route::resource('contact', 'ccc\frontcontactController');
 




Auth::routes();

Route::group(['middleware' => 'auth' , 'prefix' => 'admin' ], function ()
{

Route::get('/', 'clientsController@index');

Route::resource('clients', 'clientsController');

Route::resource('projects', 'ProjectsController');

Route::resource('galleryProjects', 'gallery_ProjectController');

Route::resource('catProjects', 'catProjectController');

Route::resource('services', 'servicesController');

Route::resource('siteStings', 'siteStingsController');

Route::resource('sliders', 'sliderController');

Route::resource('reviews', 'ReviewsController');
});
