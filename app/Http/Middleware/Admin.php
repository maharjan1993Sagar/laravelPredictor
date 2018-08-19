<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
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
        if (Auth::check() && Auth::user()->role == 'Admin') {
            return $next($request);
        }
        else if(Auth::check() && Auth::user()->role == 'User')
        {
            return redirect()->to('/unauthorized')->with('role','ADMIN');
        }
        else {

           return redirect()->to('/login')->with('role','ADMIN');
        }
    }
}
