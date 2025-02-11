<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PelangganController extends Controller
{
    public function storePelanggan(Request $request)
    {
        // Ambil timezone lokal dari aplikasi Laravel
        $timezone = config('app.timezone', 'UTC');
        
        // Waktu lokal yang sesuai dengan timezone Laravel
        $currentTime = Carbon::now($timezone);
    
        // Insert the new customer with role_id = 2
        DB::table('users')->insert([
            'id_role' => 2, // Set role_id to 2 for customers
            'email' => $request->email,
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'domisili' => $request->domisili,
            'tanggal_lahir' => $request->tanggal_lahir,
            'password' => Hash::make($request->password),
            'created_at' => $currentTime
        ]);
    
        return redirect()->route('customer.login')->with('success', 'Akun berhasil dibuat');
    }
}
