<?php

namespace App\Http\Middleware;

use App\Enums\ProfileType;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticatedAsClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->active_profile == ProfileType::Client){
            return $next($request);
        }
        return redirect()->route('home');
    }
}
