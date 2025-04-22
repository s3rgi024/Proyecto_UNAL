<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class userController extends Controller
{
    function index(){

        $users = User::all();

        return Inertia::render('index', [
            'users' => $users
        ]);

    }
}