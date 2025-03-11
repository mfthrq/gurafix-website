<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function showLoginFormAdmin()
    // {
    //     return view('admin.login-admin');
    // }

    // public function loginAdmin(Request $request)
    // {
    //     // Update the validation rules to match the input names in the form
    //     $request->validate([
    //         'email' => 'required|email', 
    //         'password' => 'required|string', 
    //     ]);
    
    //     // Attempt to authenticate with the updated input names
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'id_role' => 1])) {
    //         return redirect()->intended('admin')->with('success', 'Login Admin berhasil');
    //     }
    
    //     return redirect()->back()->withErrors(['loginError' => 'Email atau Password Salah!']); 
    // }

    // =================== CUSTOMER & ADMIN LOGIN =================
    public function showLoginFormCustomerAndAdmin(){
        return view('customer.login');
    }

    public function login(Request $request) 
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required|string', 
        ]);

        // Attempt login tanpa membatasi id_role
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Ambil data user yang login
            $user = Auth::user();

            // Cek role dan redirect sesuai role
            if ($user->id_role == 1) { // Admin
                return redirect()->intended('/admin')->with('success', 'Login Admin berhasil');
            } elseif ($user->id_role == 2) { // Customer
                return redirect()->intended('/profile')->with('success', 'Login Pelanggan berhasil');
            } else {
                // Jika role tidak dikenali, logout dan kembalikan error
                Auth::logout();
                return redirect()->back()->withErrors(['loginError' => 'Role tidak dikenali!']);
            }
        }

        // Jika gagal login
        return redirect()->back()->withErrors(['loginError' => 'Email atau Password Salah!']);
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer.login')->with('success', 'Berhasil logout.');
    }

    public function logoutCustomer(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer.login')->with('success', 'Berhasil logout.');
    }
}
