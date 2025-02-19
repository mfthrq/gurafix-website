<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Layanan;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{

    // ==== admin ====
    public function IndexDataPelanggan(){
        $users = User::where('id_role', 2)->get();
        return view('admin.data-pelanggan', compact('users'));
    }

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
            'pekerjaan' => $request->pekerjaan,
            'password' => Hash::make($request->password),
            'created_at' => $currentTime
        ]);
    
        return redirect()->route('customer.login')->with('success', 'Akun berhasil dibuat');
    }

    // ==== customer ====
    public function indexBeranda(){
        $layanans = Layanan::latest()->take(2)->get();
        return view('customer.index', compact('layanans'));
    }

    public function IndexPelanggan(){
        $userId = Auth::user()->id;

        $totalPemesanan = Pemesanan::where('id_pelanggan', $userId)->count();

        $menungguPembayaran = Pemesanan::where('id_pelanggan', $userId)
            ->where('status', 'Menunggu Pembayaran')
            ->count();

        $pembayaranBerhasil = Pemesanan::where('id_pelanggan', $userId)
            ->where('status', 'Pembayaran Berhasil')
            ->count();

        $progress = Pemesanan::where('id_pelanggan', $userId)
            ->where('status', 'Progress')
            ->count();

        $revisi = Pemesanan::where('id_pelanggan', $userId)
            ->where('status', 'Revisi')
            ->count();

        $selesai = Pemesanan::where('id_pelanggan', $userId)
            ->where('status', 'Selesai')
            ->count();

        $gagal = Pemesanan::where('id_pelanggan', $userId)
            ->where('status', 'Gagal')
            ->count();

        return view('customer.profile', compact(
            'totalPemesanan',
            'menungguPembayaran', 
            'pembayaranBerhasil', 
            'progress', 
            'revisi', 
            'selesai', 
            'gagal'
        ));
    }

    public function updatePelanggan(Request $request, $id)
    {
        // Mencari pelanggan berdasarkan ID
        $pelanggan = User::findOrFail($id); // Menggunakan findOrFail untuk langsung mengalihkan jika tidak ditemukan
    
        // Validasi data yang masuk
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string',
            'no_telp' => 'required|string',
            'domisili' => 'required|string',
            'pekerjaan' => 'required|string',
            'tanggal_lahir' => 'required',
            'password' => 'nullable', // Password opsional, min 6 karakter
        ]);
    
        // Memperbarui data pelanggan
        $pelanggan->nama = $request->nama;
        $pelanggan->email = $request->email;
        $pelanggan->no_telp = $request->no_telp;
        $pelanggan->domisili = $request->domisili;
        $pelanggan->pekerjaan = $request->pekerjaan;
        $pelanggan->tanggal_lahir = $request->tanggal_lahir;

        // Update password hanya jika diisi
        if ($request->filled('password')) {
            $pelanggan->password = bcrypt($request->password);
        }
    
        // Simpan perubahan ke database
        $pelanggan->save();
    
        // Perbarui session dengan data terbaru
        session([
            'id' => $pelanggan->id,
            'email' => $pelanggan->email,
            'nama' => $pelanggan->nama,
            'no_telp' => $pelanggan->no_telp,
            'domisili' => $pelanggan->domisili,
            'pekerjaan' => $pelanggan->pekerjaan,
            'tanggal_lahir' => $pelanggan->tanggal_lahir,
        ]);

        return redirect()->intended('profile')->with('success', 'Data berhasil diperbarui.');
    
        // Redirect ke /profile dengan pesan sukses
        return redirect('/profile')->with('success', 'Data berhasil diperbarui!');
    }
}