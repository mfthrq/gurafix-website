<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Paket;
use App\Models\Pemesanan;
use App\Models\User;

class PemesananController extends Controller
{
    public function IndexDataPemesanan(){
        $pemesanans = Pemesanan::all();
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
            'bukti_transaksi' => 'required|image|mimes:jpg,jpeg,png|max:10048',
            'tanggal_pemesanan' => 'required',
            'status' => 'required',
            'link_desain' => 'nullable',
        ]);

        // Mengambil file gambar
        $file = $request->file('bukti_transaksi');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets_admin/bukti_transaksi'), $filename);

        // Simpan data ke database
        Pemesanan::create([
            'id_pelanggan' => $request->id_pelanggan,
            'id_layanan' => $request->id_layanan,
            'id_paket' => $request->id_paket,
            'bukti_transaksi' => $filename,
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
            'bukti_transaksi' => 'nullable|image|mimes:jpg,jpeg,png|max:10048',
            'tanggal_pemesanan' => 'required',
            'status' => 'required',
            'link_desain' => 'nullable',
        ]);

        $pemesanan->id_pelanggan = $request->id_pelanggan;
        $pemesanan->id_layanan = $request->id_layanan;
        $pemesanan->id_paket = $request->id_paket;
        $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
        $pemesanan->status = $request->status;
        $pemesanan->link_desain = $request->link_desain;

        // Mengambil file gambar
        $file = $request->file('bukti_transaksi');
        
        // Jika ada file gambar baru yang diupload
        if ($request->hasFile('bukti_transaksi')) {
            // Menghapus gambar lama jika ada
            if ($pemesanan->bukti_transaksi) {
                $oldFilePath = public_path('assets_admin/bukti_transaksi/' . $pemesanan->bukti_transaksi);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Mengambil file gambar baru
            $file = $request->file('bukti_transaksi');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets_admin/bukti_transaksi'), $filename);

            // Update foto_produk dengan nama file baru
            $pemesanan->bukti_transaksi = $filename;
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
}
