<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Add this so that the store() function works properly
    // Which fields are we OK with being 'mass-assigned'?

    // Here's one way to do it: Say which fields can be mass-assigned:
    // protected $fillable = [
    //     'title', 'description'
    // ];

    // Here's another way to do it: Say nothing is 'guarded' from being mass-assigned
    protected $guarded = [];

}
