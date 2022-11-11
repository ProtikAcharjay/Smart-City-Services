<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('loggeduser')&&($request->path() !='auth/login' && $request->path() !='auth/register')){
            return redirect('auth/login')->with('fail','you must be logged in');
        }
        if(session()->has('loggeduser') && ($request->path()=='auth/login' || $request->path()=='auth/register')){
            return back();
        }
        return $next($request)  -> header('Cache-Control','no-cache, no-store, mac-age=0, must-revalidate')
                                -> header('Pragma','no-cache')
                                -> header('Expires','Sat 01 Jan 1990 00:00:00 GMT')

        ;
    }
}
