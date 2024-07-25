<!-- resources/views/berita/show.blade.php -->
@extends('layouts.app')

@section('title', $berita->judul) <!-- Judul halaman sesuai dengan judul berita -->

@section('content')
    <div class="container">
        <h1 class="my-4">{{ $berita->judul }}</h1>

        <div class="card">
            <div class="card-body">
                <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid mb-3" alt="{{ $berita->judul }}">
                <p>{{ $berita->konten }}</p>
                <p class="text-muted">Diposting pada: {{ $berita->created_at->format('d F Y') }}</p>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
