<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class Authentication
{
    
    
    public function handle(Request $request, Closure $next)
    {
        if(!$request->session()->get('logged_in')){
            
            error_log('----------came----------');
            
            // return redirect()->route('login')->with('error', 'session expired');
        }

        error_log('----------came----------');

        return $next($request);
    }
}
