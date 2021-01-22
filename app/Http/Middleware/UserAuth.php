<?php

namespace App\Http\Middleware;

use Closure;

class UserAuth
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
        //echo "user middle called";
        //die();
        //The path method returns the request's path information
        if($request->path()=="index" && $request->session()->has('user'))
        {
            return redirect('/home_page');
        }
        return $next($request);
    }
}
