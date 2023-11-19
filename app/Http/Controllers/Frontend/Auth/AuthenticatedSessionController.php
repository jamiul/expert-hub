<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Frontend\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('frontend.auth.login');
    }

    public function logout()
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('home');
    }
}
