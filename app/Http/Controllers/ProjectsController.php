<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function titles() 
    {
        // get model
        // $titles = ['temp1','temp2','temp3']; // debug code
        // $projects = \App\Project::all();
        $projects = \App\Episode::all();
        // return $projects; // default returns as JSON format
        $guests = \App\Guest::all();
            // create a new model for each table? i.e. in PowerShell:
            // php artisan make:model Guest
            // creates Guest.php in app/http/

        $titles = $projects->map->title; // created w/ php artisan make:model Project
            // PS4 namespace structure


        // get view
        // return view('projects.titles',[ // searches 'projects' directory in 'views'
        //     'titles' => $titles
        // ]);
        // return view('projects.titles', compact('projects','titles')); // shortened code
        return view('projects.titles', compact('projects','titles','guests')); // shortened code
    }
}
