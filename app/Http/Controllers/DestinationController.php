<?php

// app/Http/Controllers/DestinationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriWisata;

class DestinationController extends Controller
{
    public function index(Request $request)
    {
        $kategoriWisata = KategoriWisata::all();
        return view('frontend.destination.index', compact('kategoriWisata'));
    }

    public function detailsejarah()
    {
        return view('frontend.destination.detail');
    }

    public function detailpantai()
    {
        return view('frontend.destination.detailpantai');
    }

    public function detailalam()
    {
        return view('frontend.destination.detailalam');
    }

    public function detailedukasi()
    {
        return view('frontend.destination.detailedukasi');
    }
}
