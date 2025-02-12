<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    public function IndexDataPaket(){
        $pakets = Paket::all();
        return view('admin.data-paket', compact('pakets'));
    }
}
