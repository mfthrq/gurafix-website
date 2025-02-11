<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelangganMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna sudah login dan id_role-nya adalah 2
        if (Auth::check() && Auth::user()->id_role === 2) {
            return $next($request); // Jika pengguna adalah pelanggan, lanjutkan ke rute berikutnya
        }

        // Jika bukan pelanggan, redirect atau tampilkan pesan error
        return redirect()->route('customer.login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
