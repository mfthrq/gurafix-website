<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Layanan;

class PaketController extends Controller
{

    // ===== admin ======
    public function IndexDataPaket(){
        $pakets = Paket::all();
        $layanans = Layanan::all();
        return view('admin.data-paket', compact('pakets', 'layanans'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:500',
            'gambar_paket' => 'required|image|mimes:jpg,jpeg,png|max:10048',
            'id_layanan' => 'required',
            'fitur' => 'required|string',
            'harga' => 'required|numeric',
            'durasi_pengerjaan' => 'required|numeric',
        ]);

        // Mengambil file gambar
        $file = $request->file('gambar_paket');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets_admin/gambar_paket'), $filename);

        // Simpan data ke database
        Paket::create([
            'nama' => $request->nama,
            'gambar_paket' => $filename,
            'id_layanan' => $request->id_layanan,
            'fitur' => $request->fitur,
            'harga' => $request->harga,
            'durasi_pengerjaan' => $request->durasi_pengerjaan,
        ]);

        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('admin.data-paket')->with('success', 'Data paket berhasil ditambahkan!');
    }

    public function update(Request $request, $id){

        $paket = Paket::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:500',
            'gambar_paket' => 'nullable|image|mimes:jpg,jpeg,png|max:10048',
            'id_layanan' => 'required',
            'fitur' => 'required|string',
            'harga' => 'required|numeric',
            'durasi_pengerjaan' => 'required|numeric',
        ]);

        // Memperbarui data produk
        $paket->nama = $request->nama;
        $paket->id_layanan = $request->id_layanan;
        $paket->fitur = $request->fitur;
        $paket->harga = $request->harga;
        $paket->durasi_pengerjaan = $request->durasi_pengerjaan;

        // Mengambil file gambar
        $file = $request->file('gambar_paket');
        
        // Jika ada file gambar baru yang diupload
        if ($request->hasFile('gambar_paket')) {
            // Menghapus gambar lama jika ada
            if ($paket->gambar_paket) {
                $oldFilePath = public_path('assets_admin/gambar_paket/' . $paket->gambar_paket);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Mengambil file gambar baru
            $file = $request->file('gambar_paket');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets_admin/gambar_paket'), $filename);

            // Update foto_produk dengan nama file baru
            $paket->gambar_paket = $filename;
        }

        $paket->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.data-paket')->with('success', 'Data paket berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $paket = Paket::findOrFail($id);
        $paket->delete();

        return redirect()->route('admin.data-paket')->with('success', 'Data berhasil dihapus!');
    } 

    // ===== customer ======
    public function showDetailPaket($id)
    {
        // Cari layanan berdasarkan id
        $paket = Paket::findOrFail($id);
        
        // Kirim data layanan dan paket ke view
        return view('customer.detail-paket', compact('paket'));
    }
    
}
