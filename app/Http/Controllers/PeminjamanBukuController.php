<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBuku;
use App\Http\Requests\StorePeminjamanBukuRequest;
use App\Http\Requests\UpdatePeminjamanBukuRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Http\Controllers\pages;



class PeminjamanBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->admin) {
            $data = PeminjamanBuku::all();
        } else {
            $data = PeminjamanBuku::where('user_id', auth()->user()->id)->get();
        }
        

        return view('pages.peminjaman', [
            'data' => PeminjamanBuku::all()
        ]);
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
    public function store(StorePeminjamanBukuRequest $request)
    {
        $validated = $request->validate([
            'buku_id' => 'required',
            'user_id' => 'required',
        ]);

        PeminjamanBuku::create($validated);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PeminjamanBuku $peminjamanBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeminjamanBuku $peminjamanBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeminjamanBukuRequest $request, $id)
    {
        $validated = $request->validate([
            'mengembalikan' => 'required|date',
        ]);

        $peminjaman = PeminjamanBuku::findOrFail($id);
        $peminjaman->mengembalikan = $validated['mengembalikan'];
        $peminjaman->save();

        $buku = Buku::find($peminjaman->buku_id);
        $peminjaman->update([
            'status' => 1,
        ]);
        
        $buku->update(["stock" => $buku->stock - 1]);
        return redirect()->back()->with('success', 'Tanggal berhasil di-update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeminjamanBuku $peminjamanBuku)
    {
        //
    }
    
    
    public function reject($id)
    {
        $peminjaman = PeminjamanBuku::find($id);
        $peminjaman->update([
            "status" => 0
        ]);
    
        return redirect()->back()->with('error', 'Request rejected');
    }
    
}
