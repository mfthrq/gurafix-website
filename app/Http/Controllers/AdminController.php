<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Layanan;
use App\Models\Pemesanan;
use App\Models\Paket;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalPelanggan = User::where('id_role', 2)->count();
        $totalLayanan = Layanan::all()->count();
        $totalPaket = Paket::all()->count();
        $totalPemesanan = Pemesanan::all()->count();
    
        // Ambil total pemesanan berdasarkan pekerjaan (hanya user dengan id_role = 2)
        $pemesananByPekerjaan = Pemesanan::join('users', 'pemesanan.id_pelanggan', '=', 'users.id')
            ->where('users.id_role', 2)
            ->select('users.pekerjaan', DB::raw('COUNT(pemesanan.id) as total'))
            ->groupBy('users.pekerjaan')
            ->get()
            ->toArray(); // Convert ke array agar lebih mudah digunakan di frontend

        // Ambil total pelanggan berdasarkan domisili
        $domisiliData = User::where('id_role', 2)
        ->select('domisili', DB::raw('COUNT(id) as total'))
        ->groupBy('domisili')
        ->get();

        // Total pemesanan berdasarkan layanan
        $pemesananByLayanan = Pemesanan::join('layanan', 'pemesanan.id_layanan', '=', 'layanan.id')
        ->select('layanan.nama', DB::raw('COUNT(pemesanan.id) as total'))
        ->groupBy('layanan.nama')
        ->get();

        return view('admin.index-admin', compact(
            'totalPelanggan', 
            'totalLayanan', 
            'totalPaket', 
            'totalPemesanan',
            'pemesananByPekerjaan',
            'domisiliData',
            'pemesananByLayanan'
        ));
    }
    
}
