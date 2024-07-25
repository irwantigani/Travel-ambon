<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $files = File::all(); 
        return view('frontend.galeri', compact('files'));
    }
}
