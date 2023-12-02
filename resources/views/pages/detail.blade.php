@extends('layouts.main')
@section('title', 'Detail Buku')


@section('content')
<style>
    .container {
        margin-top: 200px;
    }
    div.container div.row div#gambar img.img-thumbnail{ 
        aspect-ratio: 3/4;
        width: 400px;
        object-fit: cover;
        border-radius: 20px;
        transition: cubic-bezier(.17,.91,.28,.81) 0.8s;
    }
    h1{
        padding-left: 85px ;
    }
</style>

    <div class="container">
        <h1 class="h3 mb-2 text-dark">{{ $buku->judul }}</h1>
        <div class="row">
            <div class="col-md-4" id="gambar">
                <img src="{{ asset('storage/' . $buku->gambar) }}" alt="{{ $buku->judul }}" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Pengarang:</strong> {{ $buku->pengarang }}</li>
                    <li class="list-group-item"><strong>Penerbit:</strong> {{ $buku->penerbit }}</li>
                    <li class="list-group-item"><strong>Kategori:</strong> {{ $buku->kategori }}</li>
                    <li class="list-group-item"><strong>Stock:</strong> {{ $buku->stock }}</li>
                </ul>

                @can('admin')
                    
                @else
                <form action="{{ route('peminjaman.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="buku_id" value="{{ $buku->id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <button type="submit" class="btn btn-primary mt-3">Pinjam Dulu Seratus</button>
                </form>
                @endcan
                
            </div>
        </div>
        <a href="{{ route('buku.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection
