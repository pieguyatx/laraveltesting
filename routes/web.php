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
    $tasks = [
        'Kick back',
        'Relax',
        'Being all cool'
    ];

    return view('welcome', [
        'tasks' => $tasks,
        'arbitrary' => request('adjective')  
        // Looking for variable set in query string ?adjective=asdasda
    ]);

    // Equivalent to:
    // return view('welcome')->withTasks($tasks)->withArbitrary(request('adjective'));
    //  or
    // return view('welcome')->withTasks([
    //     'Kick back',
    //     'Relax',
    //     'Being all cool'
    // ]);
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact/index.php', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});
