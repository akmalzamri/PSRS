<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TherapistMiddleware
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
        if(Auth::user()->usertype == '1')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','You are Not Allowed To Therapist Dashboard');
        }
    }
}
