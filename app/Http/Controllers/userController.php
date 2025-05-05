<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class userController extends Controller
{
    function showLogin()
    {
        return Inertia::render('auth/pages/Login');
    }

    function showRegister()
    {
        return Inertia::render('auth/pages/Register');
    }
}
