<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\Roles; // Import the Roles class where you defined role constants

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check the user's role
        if ($request->user() && $request->user()->role === Roles::ADMIN) {
            // User is an admin, proceed with the middleware logic for admin users
            return $next($request);
        } else {
            // User is not an admin, deny access with a 403 Forbidden response
            return response('Access denied. Please use your provided user account.', 403);
        }
    }
}
