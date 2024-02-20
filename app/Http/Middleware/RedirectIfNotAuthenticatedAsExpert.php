<?php

namespace App\Http\Middleware;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticatedAsExpert
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->active_profile == ProfileType::Expert) {
            if (auth()->user()->profile->status == ProfileStatus::Draft && Route::currentRouteName() != 'auth.expert.profile-setup') {
                return redirect()->route('auth.expert.profile-setup');
            }
            if (auth()->user()->profile->status == ProfileStatus::InReview && Route::currentRouteName() != 'expert.profile.edit') {
                return redirect()->route('expert.profile.edit');
            }
            return $next($request);
        }
        return redirect()->route('home');
    }
}
