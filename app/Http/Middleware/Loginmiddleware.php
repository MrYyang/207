<?php

namespace App\Http\Middleware;

use Closure;

class Loginmiddleware
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
         //通过session来判断用户是否登录
        if(session('id')) {
            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
