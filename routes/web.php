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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

// testing new controller

Route::get('/titles', 'ProjectsController@titles');

Route::get('/projects', 'ProjectsController@projects');

Route::post('/projects', 'ProjectsController@store'); // standard naming convention for storing new resources

Route::get('/projects/create', 'ProjectsController@create');