<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Requests\StorebukuRequest;
use App\Http\Requests\UpdatebukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.buku', [
            'data' => Buku::all()
        ]);

        $title  = 'Perpus40 | Buku';
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebukuRequest $request)
    {
        $validated = $request->validate([
            'judul'     => 'required',
            'pengarang' => 'required',
            'penerbit'  => 'required',
            'kategori' => 'required',
        ]);

        Buku::create($validated);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebukuRequest $request, Buku $buku)
    {
        $buku->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);
        return redirect()->back();
    }
}
