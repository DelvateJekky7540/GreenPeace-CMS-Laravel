<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller {
    public function index() {
        $hero = Hero::firstOrCreate([], [
            'title'       => '',
            'subtitle'    => '',
            'image'       => '',
        ]);

        return view('admin.hero', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $hero = Hero::firstOrFail();

        $validated = $request->validate([
            'title'    => 'required|string|max:40',
            'subtitle' => 'required|string|max:150',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // ← nullable
        ]);

        // hanya ganti gambar jika user upload file baru
        if ($request->hasFile('image')) {
            // hapus gambar lama
            if ($hero->image && Storage::disk('public')->exists($hero->image)) {
                Storage::disk('public')->delete($hero->image);
            }
            // simpan gambar baru
            $validated['image'] = $request->file('image')->store('hero', 'public');
        } else {
            // tidak upload → hapus 'image' dari array agar tidak menimpa dengan null
            unset($validated['image']);
        }

        $hero->update($validated);

        return redirect()->route('admin.hero')->with('success', 'Hero berhasil diperbarui.');
    }
}
