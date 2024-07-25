<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Berita;

class NewsController extends Controller
{
    /**
     * Display the news page.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $beritas = Berita::all();
        return view('frontend.news',compact('beritas'));
    }
}
