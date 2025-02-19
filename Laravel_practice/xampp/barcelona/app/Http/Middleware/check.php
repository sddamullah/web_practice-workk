<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class check
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
       
        if(Auth::check())
        {
        if(Auth::user()->role == 1){
            return $next($request);
        } else {
                return redirect('/home')->with('message', 'you are not admin');
            }
        }
        else{
            return redirect('/login')->with('message', 'you are not authenticated');

        }
        
         return $next($request);
    }
}
