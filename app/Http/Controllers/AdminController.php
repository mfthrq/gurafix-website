<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Layanan;
use App\Models\Pemesanan;
use App\Models\Paket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalPelanggan = User::where('id_role', 2)->count();
        $totalLayanan = Layanan::all()->count();
        $totalPaket = Paket::all()->count();
        $totalPemesanan = Pemesanan::all()->count();
        
        return view('admin.index-admin', compact('totalPelanggan', 'totalLayanan', 'totalPaket', 'totalPemesanan'));
    }
}
