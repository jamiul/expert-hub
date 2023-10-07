<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (isClient() || isExpert()) && !Auth::user()->banned) {
            return $next($request);
        } else {
            session(['link' => url()->current()]);
            return redirect()->route('user.login');
        }
    }
}
