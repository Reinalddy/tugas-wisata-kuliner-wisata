<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home.content.home');
    }

    public function menu_index(Request $request)
    {
        return view('home.menu');
    }

    public function wisata_index(Request $request)
    {
        return view('home.wisata.wisata');
    }
    public function kuliner_index(Request $request)
    {
        return view('home.kuliner.kuliner');

    }
    public function about_us_index(Request $request)
    {
        return view('home.about_us.about_us');

    }
}
