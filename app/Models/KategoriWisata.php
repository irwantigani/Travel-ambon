<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriWisata extends Model
{
    use HasFactory;

   
    protected $table = 'kategori_wisatas';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama',
        'deskripsi',
        'gambarPath',
    ];
}
