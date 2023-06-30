<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Tours;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $kuliner = Culinary::with('user')->where('category_id', 1)->get();
        $tours = Tours::with('user')->where('category_id', 1)->get();

        return view('home.content.home',[
            'kuliner' => $kuliner,
            'tours' => $tours
        ]);
    }

    public function menu_index(Request $request)
    {
        return view('home.menu');
    }

    public function kuliner_index(Request $request)
    {
        $kuliner = Culinary::with('user')->get();
        return view('home.kuliner.kuliner',[
            'kuliner' => $kuliner
        ]);
    }

    public function wisata_index(Request $request)
    {
        $wisata = Tours::with('user')->get();

        return view('home.wisata.wisata',[
            'wisata' => $wisata
        ]);
    }

    public function about_index(Request $request)
    {
        return view('home.about_us.about_us');
    }
}
