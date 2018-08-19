<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class User
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
        if (Auth::check() && Auth::user()->role == 'User') {
            return $next($request);

            //return new Response(view(‘unauthorized’)->with(‘role’, ‘USER’));
        }
        else if(Auth::check() && Auth::user()->role == 'Admin')
        {
            return redirect('/unauthorized')->with('role','USER');

        }
        else {
            return redirect('/login')->with('role','USER');
        }
    }
}
