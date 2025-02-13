<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && ($request->user()->is_admin === 'vendor' || strtolower($request->user()->is_admin) === 'true')) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }
}
