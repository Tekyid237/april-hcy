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
        if(auth()->user()->role > 0 ){
            return $next($request);
        }
        return redirect('home')->with('error',"Vous n'avez pas le droit d'acceder à cette page");
    }
}
