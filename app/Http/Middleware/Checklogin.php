<?php

namespace App\Http\Middleware;

use Closure;

class Checklogin
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
        $logged = $request->session()->get('logged');
        if($logged){
            return $next($request);

        }else{
            return redirect('/');
        }

    }
}
