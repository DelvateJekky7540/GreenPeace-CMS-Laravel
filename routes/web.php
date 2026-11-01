<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('public.home'); });

// Auth Routes
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'auth'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Dashboard Utama (Dilindungi Login)
Route::middleware(['auth'])->group(function () {
    
    // Dashboard untuk Admin & Editor
    Route::get('/admin/dashboard', function () {
        if (!in_array(auth()->user()->role, ['admin', 'editor'])) {
            abort(403, 'Akses Ditolak.');
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');

});