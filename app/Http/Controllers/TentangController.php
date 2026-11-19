<?php

namespace App\Http\Controllers;

// use App\Models\Tentang;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class TentangController extends Controller {

    public function index() {
        return view('admin.tentang-kami');
    }

    // public function update(Request $request)
    // {
    //     $hero = Tentang::firstOrFail();

    //     $validated = $request->validate([
    //         'deskripsi'    => 'required|string|max:40',
    //         'subtitle' => 'required|string|max:150',
    //         'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    //     ]);

    //     // hanya ganti gambar jika user upload file baru
    //     if ($request->hasFile('image')) {
    //         // hapus gambar lama
    //         if ($hero->image && Storage::disk('public')->exists($hero->image)) {
    //             Storage::disk('public')->delete($hero->image);
    //         }
    //         // simpan gambar baru
    //         $validated['image'] = $request->file('image')->store('hero', 'public');
    //     } else {
    //         // tidak upload → hapus 'image' dari array agar tidak menimpa dengan null
    //         unset($validated['image']);
    //     }

    //     $hero->update($validated);

    //     return redirect()->route('admin.tentang')->with('success', 'Profil berhasil diperbarui.');
    // }
}
