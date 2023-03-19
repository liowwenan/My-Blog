<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show List of users
    function index()
    {
        //Process
        $users = User::get();//Select * FROM users
        return view ('users.index', compact('users'));
    }
}
