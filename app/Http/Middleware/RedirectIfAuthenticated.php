<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null, $redirectTo = '/home')
    {
        
            // switch ($guard) {
            //     case 'therapist':
            //         if (Auth::guard($guard)->check()) {
            //             return redirect()->route('therapist.therapist-home');
            //         }
            //         break;
            //     default:
            //         if (Auth::guard($guard)->check()) {
            //             return redirect()->route('/');
            //         }
            //         break;
            // }

            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }

            return $next($request);
        
    }
}
