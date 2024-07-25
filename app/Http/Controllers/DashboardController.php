<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\KategoriWisata;

class DashboardController extends Controller
{
    public function index(Request $request)
    { 

        $kategoriWisata = KategoriWisata::all(); // Ambil semua data file dari model File
        $totalUsers = User::count();
        return view('dashboard', compact('kategoriWisata','totalUsers'));
    



    }
}



   

