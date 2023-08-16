<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection\split;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=article::orderBy('id', 'DESC')->paginate(6);
        $kategori=kategori::all();
        $sidearticle=article::orderBy('id', 'DESC')->limit(5)->get();

        return view ('article', compact('articles', 'kategori', 'sidearticle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $detail=article::where(['slug'=>$slug])->first();
        $kategori=kategori::all();
        $sidearticle=article::orderBy('id', 'DESC')->limit(5)->get();

        return view ('detail', compact('detail', 'kategori', 'sidearticle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
