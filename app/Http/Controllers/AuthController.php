<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function showLogin()
    {
        return Inertia::render('auth/pages/Login');
    }

    public function showRegister()
    {
        $documentTypes = Cache::remember('document_types', 60 * 60, function () {
            return DocumentType::all();
        });

        return Inertia::render(
            'auth/pages/Register',
            ['documentTypes' => $documentTypes]
        );
    }

    public function showForgotPassword()
    {
        return Inertia::render('auth/pages/ForgotPassword');
    }
}
