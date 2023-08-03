<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori=kategori::all();

        return view ('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        kategori::create ([
            'nama_kategori' => $request->input('nama_kategori')
        ]);

        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = kategori::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        kategori::findOrFail($id)->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('kategori.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index');
    }
}
