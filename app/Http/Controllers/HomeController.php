<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use App\Models\Culinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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


    public function kuliner_list(Request $request)
    {
        try {

             $kuliner = Culinary::with(['user','categories'])->get();

            return response()->json([
                'code' => 200,
                'message' => 'Fetch Data Success',
                'data' => $kuliner
            ]);
        } catch (\Throwable $exception) {
            $message = array(
                "url"       => url()->current(),
                "error"     => $exception->getMessage() . " LINE : " . $exception->getLine(),
                "data"      => $request,
                "controller"=> app('request')->route()->getAction(),
            );
            Log::critical($message);
            return response()->json([
                'code' => 400,
                'message' => trans('messages.went_wrong'),
                'data' => $message
            ]);
        }
    }

    public function wisata_index(Request $request)
    {
        $wisata = Tours::with('user')->get();

        return view('home.wisata.wisata',[
            'wisata' => $wisata
        ]);
    }

    public function wisata_list(Request $request)
    {
        try {
            $wisata = Tours::with(['user','categories'])->get();

            return response()->json([
                'code' => 200,
                'message' => 'Fetch Data Success',
                'data' => $wisata
            ]);
        } catch (\Throwable $exception) {
            $message = array(
                "url"       => url()->current(),
                "error"     => $exception->getMessage() . " LINE : " . $exception->getLine(),
                "data"      => $request,
                "controller"=> app('request')->route()->getAction(),
            );
            Log::critical($message);
            return response()->json([
                'code' => 400,
                'message' => trans('messages.went_wrong'),
                'data' => $message
            ]);
        }
    }

    public function wisata_search(Request $request)
    {
        try {
            $kuliner = Tours::with(['user','categories'])->where('name','like','%'.$request->search.'%',)->get();

            return response()->json([
                'code' => 200,
                'message' => "Search Data Success",
                'data' => $kuliner
            ]);
        } catch (\Throwable $exception) {
            $message = array(
                "url"       => url()->current(),
                "error"     => $exception->getMessage() . " LINE : " . $exception->getLine(),
                "data"      => $request,
                "controller"=> app('request')->route()->getAction(),
            );
            Log::critical($message);
            return response()->json([
                'code' => 400,
                'message' => trans('messages.went_wrong'),
                'data' => $message
            ]);
        }
    }

    public function kuliner_search(Request $request)
    {
        try {
            $kuliner = Culinary::with(['user','categories'])->where('name','like','%'.$request->search.'%',)->get();

            return response()->json([
                'code' => 200,
                'message' => "Search Data Success",
                'data' => $kuliner
            ]);
        } catch (\Throwable $exception) {
            $message = array(
                "url"       => url()->current(),
                "error"     => $exception->getMessage() . " LINE : " . $exception->getLine(),
                "data"      => $request,
                "controller"=> app('request')->route()->getAction(),
            );
            Log::critical($message);
            return response()->json([
                'code' => 400,
                'message' => trans('messages.went_wrong'),
                'data' => $message
            ]);
        }
    }

    public function about_index(Request $request)
    {
        return view('home.about_us.about_us');
    }
}
