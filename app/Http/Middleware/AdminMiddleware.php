<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::check()){
            if(Auth::user()->role_as == '1'){   //1 is admin and 0 is common user
                return $next($request);
                // return redirect('/admin');
            }
            else{
               return redirect('/dashboard')->with('status','Access Denied! As you are not an Admin');
            }
        }
        else{
            return redirect('/login')->with('status','Please Login First');
        }
    
    }
}
