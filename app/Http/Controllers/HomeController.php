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
}
