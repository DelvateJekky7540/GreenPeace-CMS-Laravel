<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

// Publik
Route::get('/', [HomeController::class, 'index'])->name('home');


// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');

// Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['cekLogin', 'role:admin'])->group(function () {

    // Validasi role admin lalu diarahkan ke dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('dashboard/hero', [HeroController::class, 'index'])->name('admin.hero');
    Route::put('dashboard/hero', [HeroController::class, 'update'])->name('hero.update');

});

// 
// Route::middleware(['cekLogin', 'role:user'])->group(function () {

//     Route::get('/user/dashboard', function () {
//         return view('user.dashboard');
//     })->name('user.dashboard');

// });