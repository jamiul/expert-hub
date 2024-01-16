<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('admin.auth.login');
    }

    public function logout()
    {
        auth()->guard('admin')->logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('home');
    }
}
