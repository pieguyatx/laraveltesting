<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{

// php artisan make:controller PostsController -r  
//              ---> in terminal can make controller w/ standard RESTful convention
// php artisan make:controller PostsController -r -m [modelname]  
//              ---> in terminal can make controller w/ standard RESTful convention
//                   that also references a particular model for the EDIT/PATCH/etc functions

    public function index() 
    {
        $projects = Project::all();

        return view('projects.projects', compact('projects'));
    }

    public function create() 
    {
        return view('projects.create');
    }

    public function store()
    {
        // return request()->all(); // debug: outputs all data

        // Create a new row/entry in database
        $project = new Project();

        // Accept data
        $project->title = request('title');
        $project->description = request('description');

        // Persist it
        $project->save();

        // reload projects list (fetch it again)
        return redirect('/projects'); // default as GET request
    }

    public function show() 
    {

    }


    public function edit() 
    {

    }

    public function update() 
    {

    }


    public function destroy() 
    {

    }


    public function titles() 
    {
        // get model
        // $titles = ['temp1','temp2','temp3']; // debug code
        // $projects = \App\Project::all();
        $episodes = \App\Episode::all();
        // return $projects; // default returns as JSON format
        $guests = \App\Guest::all();
            // create a new model for each table? i.e. in PowerShell:
            // php artisan make:model Guest
            // creates Guest.php in app/http/

        $titles = $episodes->map->title; // created w/ php artisan make:model Project
            // PS4 namespace structure


        // get view
        // return view('projects.titles',[ // searches 'projects' directory in 'views'
        //     'titles' => $titles
        // ]);
        // return view('projects.titles', compact('projects','titles')); // shortened code
        return view('projects.titles', compact('episodes','titles','guests')); // shortened code
    }

}
