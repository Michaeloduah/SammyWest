<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectToEditProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user) {
            switch ($user->is_admin) {
                case 'admin':
                    return redirect()->intended(route('admin.dashboard.editprofile'));
                case 'vendor':
                    return redirect()->intended(route('vendor.dashboard.editprofile'));
                case 'user':
                default:
                    return redirect()->intended(route('user.dashboard.editprofile'));
            }
        }

        return $next($request);
    }
}
