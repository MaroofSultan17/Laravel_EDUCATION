<?php

namespace App\Http\Middleware\backend;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('token') && session()->has('token')) {
            return $next($request);
        } else {
            return redirect()->route('login.show')->with('error', 'You have to Signin First.');
        }
    }
}
