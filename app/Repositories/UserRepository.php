<?php

namespace App\Repositories;

// A 'contract' for working with users; if you want to implement this, you have to use these methods
interface UserRepository 
{

    public function create($attributes);

}