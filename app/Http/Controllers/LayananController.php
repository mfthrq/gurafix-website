<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Paket;

class LayananController extends Controller
{

    // ===== admin ======
    public function IndexDataLayanan(){
        $layanans = Layanan::all();
        return view('admin.data-layanan', compact('layanans'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:500',
            'deskripsi' => 'required|string',
            'gambar_layanan' => 'required|image|mimes:jpg,jpeg,png|max:10048'
        ]);

        // Mengambil file gambar
        $file = $request->file('gambar_layanan');
        
        // Menentukan nama file dan menyimpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets_admin/gambar_layanan'), $filename);

        // Simpan data ke database
        Layanan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar_layanan' => $filename,
        ]);

        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('admin.data-layanan')->with('success', 'Data layanan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        // Mencari produk berdasarkan ID
        $layanan = Layanan::findOrFail($id);
    
        // Validasi data yang masuk
        $request->validate([
            'nama' => 'required|string|max:500',
            'deskripsi' => 'required|string',
            'foto_produk' => 'nullable|image|mimes:jpg,jpeg,png|max:5048',
        ]);
    
        // Memperbarui data produk
        $layanan->nama = $request->nama;
        $layanan->deskripsi = $request->deskripsi;
        
        // Jika ada file gambar baru yang diupload
        if ($request->hasFile('gambar_layanan')) {
            // Menghapus gambar lama jika ada
            if ($layanan->gambar_layanan) {
                $oldFilePath = public_path('assets_admin/gambar_layanan/' . $layanan->gambar_layanan);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Mengambil file gambar baru
            $file = $request->file('gambar_layanan');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets_admin/gambar_layanan'), $filename);

            // Update foto_produk dengan nama file baru
            $layanan->gambar_layanan = $filename;
        }

        $layanan->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.data-layanan')->with('success', 'Data layanan berhasil diperbarui!');
    } 

    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return redirect()->route('admin.data-layanan')->with('success', 'Data berhasil dihapus!');
    }  

    // ===== customer ======
    public function IndexLayanan(){
        $layanans = Layanan::all();
        return view('customer.service', compact('layanans'));
    }

    public function showDetailLayanan($id)
    {
        // Cari layanan berdasarkan id
        $layanan = Layanan::findOrFail($id);

        // Ambil data paket yang memiliki id_layanan sama dengan parameter $id
        $pakets = Paket::where('id_layanan', $id)->get();

        // Kirim data layanan dan paket ke view
        return view('customer.detail-layanan', compact('layanan', 'pakets'));
    }
}
