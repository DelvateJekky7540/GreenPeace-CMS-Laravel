<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    
    public function index() {
        return view('public.auth.login');        
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            // Jika Admin atau Editor, masuk ke Dashboard Utama
            if (in_array(Auth::user()->role, ['admin', 'editor'])) {
                return redirect()->intended(route('admin.dashboard'));
            } 
            
            // Jika Author, masuk ke Dashboard Author
            return redirect()->intended(route('author.dashboard'));
        }

        return back()->withErrors([
            'username' => 'Username Atau Password Salah'
        ])->onlyInput('username');
    } // <--- KURUNG KURAWAL PENUTUP UNTUK auth() DITAMBAHKAN DI SINI

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}