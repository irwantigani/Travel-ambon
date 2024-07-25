<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peta;

class PetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petas = Peta::all();
        return view('peta.index', compact('petas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
        ]);

        Peta::create($request->all());

        return redirect()->route('peta.index')
                        ->with('success', 'Peta created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $peta = Peta::findOrFail($id);
        return view('peta.show', compact('peta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $peta = Peta::findOrFail($id);
        return view('peta.edit', compact('peta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
        ]);

        $peta = Peta::findOrFail($id);
        $peta->update($request->all());

        return redirect()->route('peta.index')
                        ->with('success', 'Peta updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peta = Peta::findOrFail($id);
        $peta->delete();

        return redirect()->route('peta.index')
                        ->with('success', 'Peta deleted successfully.');
    }
}
