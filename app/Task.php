<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = true){
        $this->update(compact('completed'));
        // $task->update([
        //     // save the new completed attribute as whether or not 'completed' exists 
        //     // in the requested attribute list
        //     'completed' => request()->has('completed')
        // ]);
    }

    public function incomplete(){
        $this->complete(false);
    }

}
