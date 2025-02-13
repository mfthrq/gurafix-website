<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function IndexChatAdmin(){
        $chats = Chat::all();
        $users = User::where('id_role', 2)->get();
        return view('admin.chat-admin', compact('chats', 'users'));
    }

    public function getChat($id)
    {
        $adminId = Auth::id();

        $chats = Chat::where(function ($query) use ($adminId, $id) {
                $query->where('id_sender', $adminId)->where('id_receiver', $id);
            })
            ->orWhere(function ($query) use ($adminId, $id) {
                $query->where('id_sender', $id)->where('id_receiver', $adminId);
            })
            ->orderBy('created_at', 'asc')
            ->get()
            ->map(function ($chat) {
                $chat->created_at = \Carbon\Carbon::parse($chat->created_at)->format('d M Y, H:i:s');
                return $chat;
            });

        return response()->json([
            'chats' => $chats,
            'admin_id' => $adminId
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'id_sender' => 'required',
            'id_receiver' => 'required',
            'message' => 'required',
            'attachments' => 'nullable|image|mimes:jpg,jpeg,png|max:10048',
        ]);
    
        // Inisialisasi filename sebagai null
        $filename = null;
    
        // Cek apakah ada file yang diunggah
        if ($request->hasFile('attachments')) {
            $file = $request->file('attachments');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets_admin/attachments'), $filename);
        }
    
        // Simpan data ke database
        Chat::create([
            'id_sender' => $request->id_sender,
            'id_receiver' => $request->id_receiver,
            'message' => $request->message,
            'attachments' => $filename, // Jika tidak ada file, tetap null
        ]);
    
        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('admin.chat-admin')->with('success', 'Pesan berhasil dikirim!');
    }

    public function storeCustomer(Request $request){
        $request->validate([
            'id_sender' => 'required',
            'id_receiver' => 'required',
            'message' => 'required',
            'attachments' => 'nullable|image|mimes:jpg,jpeg,png|max:10048',
        ]);
    
        // Inisialisasi filename sebagai null
        $filename = null;
    
        // Cek apakah ada file yang diunggah
        if ($request->hasFile('attachments')) {
            $file = $request->file('attachments');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets_admin/attachments'), $filename);
        }
    
        // Simpan data ke database
        Chat::create([
            'id_sender' => $request->id_sender,
            'id_receiver' => $request->id_receiver,
            'message' => $request->message,
            'attachments' => $filename, // Jika tidak ada file, tetap null
        ]);
    
        session()->flash('success', 'Data berhasil ditambahkan!');    
        return redirect()->route('chat')->with('success', 'Pesan berhasil dikirim!');
    }

    public function getChatForCustomer()
    {
        $customerId = Auth::id(); // ID user yang login

        // Ambil chat yang melibatkan user & admin (ID 1)
        $chats = Chat::where(function ($query) use ($customerId) {
            $query->where('id_sender', $customerId)
                  ->orWhere('id_receiver', $customerId);
        })->orderBy('created_at', 'asc')->get();

        return response()->json(['chats' => $chats]);
    }
    
}
