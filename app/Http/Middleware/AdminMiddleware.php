<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and is an admin
        if ( Auth::check() && Auth::user()-> status === 'is_admin' ) {
            return $next($request);  // Allow the request to proceed if the user is an admin
        }

        // If the user is not an admin, redirect to the home page or show an error
        return redirect('/')->with('error', 'You do not have admin access.');
    }

}
