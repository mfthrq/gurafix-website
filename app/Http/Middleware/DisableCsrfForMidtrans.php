<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session; // Import Session

class DisableCsrfForMidtrans
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Mengecek apakah request ke rute '/midtrans-callback'
        if ($request->is('midtrans-callback')) {
            // Menonaktifkan CSRF token
            $request->offsetUnset('_token');
        }

        return $next($request);
    }
}
