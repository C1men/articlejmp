<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article=article::all();

        return view ('artikel.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori=kategori::all();
        
        return view ('artikel.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,heic,svg,gif|max:2048',
            'cover' => 'required',
            'id_kategori' => 'required',
            'desc' => 'required',
            'id_user' => 'required'
        ]);

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
        }
        else {
            return redirect()->back()->withInpiut()->withErrors(['gambar' => 'Image file is required']);
        }


        article::create ([
            'judul' => $request->input('judul'),
            'cover' => $filename,
            'alt' => $request->input('alt'),
            'id_kategori' => $request->input('id_kategori'),
            'desc' => $request->input('desc'),
            'slug' => Str::slug($request->input('judul')),
            'id_user' => $request->input('id_user'),
        ]);

        return redirect()->route('artikel.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
