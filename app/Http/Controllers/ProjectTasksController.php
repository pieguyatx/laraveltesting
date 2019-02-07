<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class ProjectTasksController extends Controller
{
    // Update the 'completed' attribute of the Task
    public function update(Task $task)
    {
        $task->update([
            // save the new completed attribute as whether or not 'completed' exists 
            // in the requested attribute list
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}
