<?php

namespace App\Http\Middleware;

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
        if(auth()->user()->is_Admin == 1){
            return $next($request);
            }
                return redirect('home')->with('error','You don\'t have admin access');
        // return $next($request);
        //     return redirect('dashboard')->with('error','You do not have admin access');
    }
    
}
