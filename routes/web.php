<?php

use App\Services\Twitter;
use App\Repositories\UserRepository;

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

// Route::get('/', 'PagesController@home');
Route::get('/', function (UserRepository $users) {
    dd($users);
    return view('welcome');
});

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

// testing new controller

// common conventions: GET request to "/endpoint controller@index" endpoint for starting page
//                     GET /projects (index)
//                      POST request to "/endpoint controller@store" endpoint for storing new data
//                      GET /projects (store)
//                      GET request to "/endpoint/create controller@create" endpoint for adding data 
//                      GET /projects/create (create)
//                      GET /projects/1 (show)
//                      GET /projects/1/edit (edit)
//          PUT --> updating resource
//          PATCH   --> updating resource; can just use this instead of PUT for now
//                        PATCH /projects/1 (update)
//          DELETE   --> /projects/1 (destroy)

Route::get('/titles', 'ProjectsController@titles');  // test endpoint


// tutorial endpoints below
// php artisan route:list in terminal will list all registered routes

// Route::get('/projects', 'ProjectsController@projects');   // typically should be @index

// Route::get('/projects/create', 'ProjectsController@create');

// Route::post('/projects', 'ProjectsController@store'); // standard naming convention for storing new resources

// Route::get('/projects/{project}', 'ProjectsController@show');

// Route::get('/projects/{project}/edit', 'ProjectsController@edit');

// Route::patch('/projects/{project}', 'ProjectsController@update');

// Route::delete('/projects/{project}', 'ProjectsController@destroy');

// "Register a 'projects' resource" with the following:
Route::resource('projects','ProjectsController');  // shortcut for everything above

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');