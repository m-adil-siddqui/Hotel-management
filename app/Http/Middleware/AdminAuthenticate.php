<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check())
        {
           return view('auth.login');
        }
        return $next($request);
    }
}
