<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Admin 
{
    
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->acesso =='leitor') {
            return response('Unauthorized.', 401);
        }
        else {
            return $next($request);
        }
    }
}