<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Publik
Route::get('/', function () { return view('public.home'); });


// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');

// Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['cekLogin', 'role:admin'])->group(function () {

    // Validasi role admin lalu diarahkan ke dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});

// 
// Route::middleware(['cekLogin', 'role:user'])->group(function () {

//     Route::get('/user/dashboard', function () {
//         return view('user.dashboard');
//     })->name('user.dashboard');

// });