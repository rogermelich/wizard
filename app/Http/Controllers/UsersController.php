<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Fetch all users.
     *
     * @return mixed
     */
    public function fetchUsers()
    {
        return User::all();
    }
}
