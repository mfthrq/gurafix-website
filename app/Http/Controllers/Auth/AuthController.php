<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // =================== ADMIN =================
    public function showLoginFormAdmin()
    {
        return view('admin.login-admin');
    }

    public function loginAdmin(Request $request)
    {
        // Update the validation rules to match the input names in the form
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required|string', 
        ]);
    
        // Attempt to authenticate with the updated input names
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'id_role' => 1])) {
            return redirect()->intended('admin')->with('success', 'Login Admin berhasil');
        }
    
        return redirect()->back()->withErrors(['loginError' => 'Email atau Password Salah!']); 
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login-admin')->with('success', 'Berhasil logout.');
    }

    // =================== CUSTOMER =================
    public function showLoginFormCustomer(){
        return view('customer.login');
    }

    public function loginCustomer(Request $request)
    {
        // Update the validation rules to match the input names in the form
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required|string', 
        ]);
    
        // Attempt to authenticate with the updated input names
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'id_role' => 2])) {
            return redirect()->intended('profile')->with('success', 'Login Pelanggan berhasil');
        }
    
        return redirect()->back()->withErrors(['loginError' => 'Email atau Password Salah!']); 
    }

    public function logoutCustomer(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer.login')->with('success', 'Berhasil logout.');
    }
}
