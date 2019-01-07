<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Name of the function below corresponds with call from web.php routes
    public function home()
    {
        // GET NECESSARY DATA (MODEL)
        $tasks = [
            'Kick back',
            'Relax',
            'Being all cool',
            'Running on the track',
            'Playing pool'
        ];
    
        // RETURN APPROPRIATE VIEW
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
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
