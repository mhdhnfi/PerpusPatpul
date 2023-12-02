<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebukuRequest;
use App\Http\Requests\UpdatebukuRequest;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;

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
            'gambar'    => 'required',
            'judul'     => 'required',
            'pengarang' => 'required',
            'penerbit'  => 'required',
            'kategori'  => 'required',
            'stock'     => 'required',
        ]);

        $gambar = $request->file('gambar');

        $filename = $gambar->store('cover-buku');
        $validated['gambar'] = $filename;

        Buku::create($validated);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::find($id);
        return view('pages.detail', compact('buku'));
        
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
        $validated = $request->validate([
            'judul'     => 'required',
            'pengarang' => 'required',
            'penerbit'  => 'required',
            'kategori'  => 'required',
            'stock'     => 'required',
        ]);

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar');
            $filename = $gambar->store('cover-buku');
            $validated['gambar'] = $filename;
            Storage::delete($buku->gambar);
        }
        
        $buku->update($validated);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->back();
    }
}
