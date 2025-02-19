<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Layanan;
use App\Models\Paket;
use App\Models\Pemesanan;
use App\Models\User;

class PemesananController extends Controller
{
    // ========= admin ========
    public function IndexDataPemesanan(){
        // Mengurutkan berdasarkan created_at secara descending, sehingga data terbaru muncul di atas
        $pemesanans = Pemesanan::orderBy('created_at', 'desc')->get();
    
        // Jika kamu ingin menggunakan id, kamu bisa gunakan:
        // $pemesanans = Pemesanan::orderBy('id', 'desc')->get();
    
        $pakets = Paket::all();
        $layanans = Layanan::all();
        $users = User::where('id_role', 2)->get();
        
        return view('admin.data-pemesanan', compact('pemesanans', 'pakets', 'layanans', 'users'));
    }

    public function store(Request $request){
        $request->validate([
            'id_pelanggan' => 'required',
            'id_layanan' => 'required',
            'id_paket' => 'required',
            'pelanggan_referensi_desain' => 'required|image|mimes:jpg,jpeg,png|max:10048',
            'pelanggan_brief' => 'required',
            'tanggal_pemesanan' => 'required',
            'status' => 'required',
            'link_desain' => 'nullable',
        ]);

        // Mengambil file gambar
        $file = $request->file('pelanggan_referensi_desain');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets_admin/pelanggan_referensi_desain'), $filename);

        // Simpan data ke database
        Pemesanan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'id_layanan' => $request->id_layanan,
            'id_paket' => $request->id_paket,
            'pelanggan_referensi_desain' => $filename,
            'pelanggan_brief' => $request->pelanggan_brief,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'status' => $request->status,
            'link_desain' => $request->link_desain,
        ]);

        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('admin.data-pemesanan')->with('success', 'Data pemesanan berhasil ditambahkan!');
    }

    public function update(Request $request, $id){

        $pemesanan = Pemesanan::findOrFail($id);

        $request->validate([
            'id_pelanggan' => 'required',
            'id_layanan' => 'required',
            'id_paket' => 'required',
            'pelanggan_referensi_desain' => 'nullable|image|mimes:jpg,jpeg,png|max:10048',
            'pelanggan_brief' => 'required',
            'bukti_transaksi' => 'nullable|image|mimes:jpg,jpeg,png|max:10048',
            'tanggal_pemesanan' => 'required',
            'status' => 'required',
            'link_desain' => 'nullable',
        ]);

        $pemesanan->id_pelanggan = $request->id_pelanggan;
        $pemesanan->id_layanan = $request->id_layanan;
        $pemesanan->id_paket = $request->id_paket;
        $pemesanan->pelanggan_brief = $request->pelanggan_brief;
        $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
        $pemesanan->status = $request->status;
        $pemesanan->link_desain = $request->link_desain;

        // Mengambil file gambar
        $file = $request->file('pelanggan_referensi_desain');
        
        // Jika ada file gambar baru yang diupload
        if ($request->hasFile('pelanggan_referensi_desain')) {
            // Menghapus gambar lama jika ada
            if ($pemesanan->pelanggan_referensi_desain) {
                $oldFilePath = public_path('assets_admin/pelanggan_referensi_desain/' . $pemesanan->pelanggan_referensi_desain);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Mengambil file gambar baru
            $file = $request->file('pelanggan_referensi_desain');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets_admin/pelanggan_referensi_desain'), $filename);

            // Update foto_produk dengan nama file baru
            $pemesanan->pelanggan_referensi_desain = $filename;
        }

        $pemesanan->save();

        return redirect()->route('admin.data-pemesanan')->with('success', 'Data pemesanan berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('admin.data-pemesanan')->with('success', 'Data berhasil dihapus!');
    } 

    // ========= customer ========
    public function indexRiwayat(){
        // Pastikan user sudah login
        $userId = Auth::id();
        if(!$userId){
            abort(403, 'Anda harus login.');
        }
        
        // Ambil data pemesanan berdasarkan id_pelanggan
        $pemesanans = Pemesanan::where('id_pelanggan', $userId)
            ->with(['pelanggan', 'layanan', 'paket'])
            ->get();
    
        // Array untuk menyimpan snap token tiap pemesanan pending
        $snapTokens = [];
    
        // Loop melalui semua pemesanan yang statusnya Menunggu Pembayaran
        $pendingPemesanans = $pemesanans->where('status', 'Menunggu Pembayaran');
    
        foreach ($pendingPemesanans as $pemesanan) {
            $pelanggan = $pemesanan->pelanggan;
            $paket = $pemesanan->paket;
    
            // Konfigurasi Midtrans
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;
        
            $params = [
                'transaction_details' => [
                    'order_id' => $pemesanan->id,
                    'gross_amount' => $paket->harga ?? 0,
                ],
                'customer_details' => [
                    'nama'    => $pelanggan->nama ?? 'Guest',
                    'email'   => $pelanggan->email ?? 'guest@example.com',
                    'no_telp' => $pelanggan->no_telp ?? '0000000000',
                ],
            ];
    
            try {
                $snapTokens[$pemesanan->id] = \Midtrans\Snap::getSnapToken($params);
            } catch (\Exception $e) {
                Log::error("Midtrans Snap Error (Order {$pemesanan->id}): " . $e->getMessage());
                $snapTokens[$pemesanan->id] = '';
            }
            
            // Opsional: Perbarui status jika token sudah berhasil diambil (bisa juga dilakukan via webhook)
            // Misalnya, ambil status transaksi dan update jika perlu.
            try {
                $client = new \GuzzleHttp\Client();
                $orderId = $pemesanan->id;
                $response = $client->request('GET', "https://api.sandbox.midtrans.com/v2/{$orderId}/status", [
                    'headers' => [
                        'accept' => 'application/json',
                        'authorization' => 'Basic ' . base64_encode(config('midtrans.server_key') . ':'),
                    ],
                ]);
                $statusData = json_decode($response->getBody()->getContents(), true);
                if (isset($statusData['transaction_status']) && $statusData['transaction_status'] === 'capture') {
                    $pemesanan->update(['status' => 'Pembayaran Berhasil']);
                }
            } catch (\Exception $e) {
                Log::error("Midtrans Status Request Error (Order {$pemesanan->id}): " . $e->getMessage());
            }
        }
        
        return view('customer.riwayat', compact('pemesanans', 'snapTokens'));
    }
    

    public function storeCustomer(Request $request){
        $request->validate([
            'id_pelanggan' => 'required',
            'id_layanan' => 'required',
            'id_paket' => 'required',
            'pelanggan_referensi_desain' => 'required|image|mimes:jpg,jpeg,png|max:10048',
            'pelanggan_brief' => 'required',
        ]);

        // Mengambil file gambar
        $file = $request->file('pelanggan_referensi_desain');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets_admin/pelanggan_referensi_desain'), $filename);

        // Mengatur zona waktu Indonesia
        date_default_timezone_set('Asia/Jakarta');
        $tanggalPemesanan = date('Y-m-d H:i');

        // Simpan data ke database
        Pemesanan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'id_layanan' => $request->id_layanan,
            'id_paket' => $request->id_paket,
            'pelanggan_referensi_desain' => $filename,
            'pelanggan_brief' => $request->pelanggan_brief,
            'tanggal_pemesanan' => $tanggalPemesanan,
            'status' => 'Menunggu Pembayaran',
        ]);

        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('riwayat')->with('success', 'Data pemesanan berhasil ditambahkan!');
    }

}
