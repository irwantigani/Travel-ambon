<?php

namespace App\Http\Controllers;

use App\Models\KategoriWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriWisataController extends Controller
{
    public function index()
    {
        $kategoriWisata = KategoriWisata::all();
        return view('kategoriWisata.index', compact('kategoriWisata'));
    }

    public function create()
    {
        return view('kategoriWisata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kategoriWisata = new KategoriWisata;
        $kategoriWisata->nama = $request->nama;
        $kategoriWisata->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('kategori-wisata', 'public');
            $kategoriWisata->gambar = $path;
        }

        $kategoriWisata->save();

        return redirect()->route('kategori-wisata.index')->with('success', 'Kategori Wisata berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kategoriWisata = KategoriWisata::findOrFail($id);
        $kategoriWisata->nama = $request->nama;
        $kategoriWisata->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($kategoriWisata->gambar) {
                Storage::disk('public')->delete($kategoriWisata->gambar);
            }

            // Simpan gambar baru
            $path = $request->file('gambar')->store('kategori-wisata', 'public');
            $kategoriWisata->gambar = $path;
        }

        $kategoriWisata->save();

        return redirect()->route('kategori-wisata.index')->with('success', 'Kategori Wisata berhasil diperbarui.');
    }
    
    public function edit($id)
    {
        $category = KategoriWisata::findOrFail($id); // Mendapatkan data kategori berdasarkan $id
        return view('kategoriWisata.edit', compact('category'));
    }

    public function destroy($id)
    {
        $kategoriWisata = KategoriWisata::findOrFail($id);
        $kategoriWisata->delete();
        return redirect()->route('kategori-wisata.index')->with('success', 'Kategori Wisata berhasil dihapus');
    }
}
