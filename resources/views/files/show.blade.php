<style>
    .img-large {
        width: 100%; /* Mengatur lebar gambar menjadi 100% dari kontainer */
        max-width: 800px; /* Tentukan lebar maksimum gambar (sesuai kebutuhan Anda) */
        height: 900px; /* Pertahankan rasio aspek gambar */
        <style>

    }
    .one-line {
        max-width: 400px; /* Atur panjang maksimum teks */
        overflow: hidden; /* Sembunyikan teks yang melebihi panjang maksimum */
        text-overflow: ellipsis; /* Tambahkan elipsis (...) jika teks terpotong */
        white-space: nowrap; /* Mencegah teks membungkus ke baris baru */
    }
    
</style>

    


<!-- resources/views/berita/show.blade.php -->
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="my-4">{{ $file->title }}</h1>

        <div class="row file-list">
            <div class="col-md-3 file-item">
                <a href="{{ Storage::url($file->path) }}" target="_blank">
                    <img src="{{ Storage::url($file->path) }}" alt="{{ $file->title }}" class="img-thumbnail img-large" class="img-fluid mb-3">
                </a>
                
                <p class="text-break">{{ $file->deskripsi }}</p>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>
@endsection

