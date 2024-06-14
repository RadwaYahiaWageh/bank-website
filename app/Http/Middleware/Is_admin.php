<?php

namespace App\Http\Middleware;

use Closure;

class Is_admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }else{
            auth()->logout();
            return redirect()->route('login');
        }
    }
}
