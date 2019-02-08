<?php

namespace App\Repositories;


// specific implementation related to users

class DbUserRepository implements UserRepository
{
    public function create($attributes)
    {
        // put Eloquent code... User::create();
        dd('creating the user');
    }
}