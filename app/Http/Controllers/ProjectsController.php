<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    // Require authentication
    public function __construct() 
    {
        $this->middleware('auth');  // for any function in this controller
        // $this->middleware('auth')->only(['store','update']);  // for specific functions
        // $this->middleware('auth')->exfept(['show']);  // except specific functions
    } 


// php artisan make:controller PostsController -r  
//              ---> in terminal can make controller w/ standard RESTful convention
// php artisan make:controller PostsController -r -m [modelname]  
//              ---> in terminal can make controller w/ standard RESTful convention
//                   that also references a particular model for the EDIT/PATCH/etc functions

    public function index() 
    {
        // $projects = Project::all();  // usually don't ever want to get ALL of the data...
        // auth()-id() // gives null if guest, number if user
        // auth()-user() // user
        // auth()->check() // boolean checks if user is signed in (true)
        // auth()->guest() // is it a guest
        $projects = Project::where('owner_id', auth()->id())->get();

        return view('projects.projects', compact('projects')); // could've been called index.blade.php 
            // ...to follow standard 'resourceful' naming conventions
    }

    public function create() 
    {
        return view('projects.create');
    }

    public function store()
    {
        // return request()->all(); // debug: outputs all data

        // validate data; if errors detected, refresh the page with error inputs
        $attributes = request()->validate([
            'title' => ['required','min:3','max:255'],
            'description' => ['required','min:5','max:10000']
        ]);

        $attributes['owner_id'] = auth()->id();

        // Create a new row/entry in database
        // Accept data
        // Persist it
        Project::create($attributes);

        // Important security tip! Don't do Project::create(request()->all()), which accepts anything coming in
        // Be specific about what elements you accept/modify
        // You can be extra-safe by specificing what is fillable in the Model php file

        // reload projects list (fetch it again)
        return redirect('/projects'); // default as GET request
    }

    public function show(Project $project) 
    {
        // ****How to handle authentication here?
        // abort_if($project->owner_id !== auth()->id(), 403);  // access denied
        // abort_unless(auth()->user()->owns($project), 403); // more object-oriented approach
        //          or:  php artisan make:policy ProjectPolicy --model=Project
        // $this->authorize('update', $project);
        //     <---- use that code to allow users to access the function
        // OR create Project Policy and add this to deny/allow user access:
        // if (\Gate::denies('update',$project)){abort(403);}
        // abort_if( \Gate::denies('update', $project), 403 );
        // abort_if( \Gate::denies('update', $project), 403 );
        abort_unless( \Gate::allows('update', $project), 403 );
        
        return view('projects.show', compact('project'));
    }


    public function edit(Project $project) 
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) 
    {
        // dd( request()->all() ); // debugging function that outputs messages (die and dump)

        // Set the desired attributes and persist it
        $project->update(request(['title','description']));

        return redirect('/projects');

    }


    public function destroy(Project $project) 
    {

        $project->delete();
        return redirect('/projects');

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
