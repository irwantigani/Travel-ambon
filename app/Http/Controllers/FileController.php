<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('files.index', compact('files'));
    }

    public function create()
    {
        return view('files.create');
    }

    public function show($id)
    {
        $file = File::findOrFail($id);
        return view('files.show', compact('file'));
    }

    public function edit($id)
    {
        $file = File::findOrFail($id);
        return view('files.edit', compact('file'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'file' => 'nullable|mimes:jpg,png,jpeg,gif|max:2048',
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:500', // Menghapus validasi maksimal 255 karakter
        ]);

        $file = File::findOrFail($id);
        $file->title = $request->title;
        $file->deskripsi = $request->deskripsi;

        if ($request->hasFile('file')) {
            // Hapus file lama
            Storage::delete('public/'.$file->path);

            // Unggah file baru
            $fileName = time().'.'.$request->file('file')->extension();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $file->name = $fileName; // Ubah menjadi name jika sesuai dengan database
            $file->path = $filePath;
        }

        $file->save();

        return redirect()->route('files.index')->with('success', 'File has been updated.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg,gif|max:2048',
            'title' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:500', // Menghapus validasi maksimal 255 karakter
        ]);

        $fileName = time().'.'.$request->file('file')->extension();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        File::create([
            'name' => $fileName,
            'path' => $filePath,
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('files.index')->with('success', 'File has been uploaded.');
    }

    public function destroy($id)
    {
        $file = File::findOrFail($id);
        Storage::delete('public/'.$file->path);
        $file->delete();

        return back()->with('success', 'File has been deleted.');
    }
}
