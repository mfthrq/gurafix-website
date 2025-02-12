<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function IndexDataLayanan(){
        $layanans = Layanan::all();
        return view('admin.data-layanan', compact('layanans'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:100',
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
}
