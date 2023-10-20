<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       //admin role = 1
        //user role = 0
        if(Auth::check()){
            if(Auth::user()->role == '1'){
                return $next($request);

            }else{
                return redirect('/')->with('access denied as you are not admin');

            }
        }else{
            return redirect('/login')->with('login to access the admin panel');

        }
    }
}
