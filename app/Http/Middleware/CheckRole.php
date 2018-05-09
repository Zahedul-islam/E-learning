<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(!Auth::user()->hasRole($role)) {

            return redirect('/');
            
            // Redirect somewhere as user is not authorized to access this route

            /*if($role == "student") {

            } elseif($role == "teacher") {

            } elseif($role == "admin") {

            }*/
        }

        return $next($request);
    }
}
