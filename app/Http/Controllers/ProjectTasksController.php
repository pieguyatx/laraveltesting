<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;


class ProjectTasksController extends Controller
{
    // Save a new task to a project
    public function store(Project $project)
    {
        $attributes = request()->validate([
            'description' => ['required','min:10']
        ]);
        $project->addTask($attributes);

        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);

        return back();
    }

    // Update the 'completed' attribute of the Task
    public function update(Task $task)     // Use 'route model binding' to fetch the associated object
    {
        $task->update([
            // save the new completed attribute as whether or not 'completed' exists 
            // in the requested attribute list
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}
