<?php

namespace App\Http\Middleware;

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
        $isAuthenticated = session('is_admin_authenticated');
        $loginTime = session('admin_authenticated_at');

        if (!$isAuthenticated || !$loginTime || now()->diffInMinutes($loginTime) > 60) {
            session()->forget(['is_admin_authenticated', 'admin_authenticated_at']);
            return redirect()->route('encore.login')->withErrors(['expired' => 'Your session has expired. Please login again.']);
        }

        return $next($request);
    }

}
