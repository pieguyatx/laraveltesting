<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function titles() 
    {
        // get model
        // $titles = ['temp1','temp2','temp3']; // debug code
        $titles = \App\Project::all()->map->title; // created w/ php artisan make:model Project
            // PS4 namespace structure

        // get view
        return view('projects.titles',[ // searches 'projects' directory in 'views'
            'titles' => $titles
        ]);
    }
}
