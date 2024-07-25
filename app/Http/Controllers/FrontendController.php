<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home'); // Pastikan view 'home' ada di resources/views/home.blade.php
    }
}
