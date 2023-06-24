<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\User;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function admin_index(Request $request)
    {
        return view('admin.dashboard.dashboard');
    }

    public function kuliner_index(Request $request)
    {
        $kuliner = Culinary::with('user')->get();
        return view('admin.dashboard.kuliner',[
            'kuliner' => $kuliner
        ]);
    }

    public function wisata_index(Request $request)
    {
        return view('admin.dashboard.wisata');
    }

    public function admin_list_index(Request $request)
    {
        return view('admin.dashboard.admin');
    }

    public function login_admin_index(Request $request)
    {
        return view('admin.dashboard.login');
    }

    public function proccess_login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email Is Required',
            'password.required' => 'Password Is Required'
        ]
        );

        if($validator->fails()){
            return response()->json([
                'code'=> 400,
                'message'=> $validator->messages(),
                'data' => 'Input Required'
            ]);
        }

        try {

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

                $user = User::where('email', $request->email)->first();

                return response()->json([
                    'code' => 200,
                    'message' => 'login Success',
                    'data' => $user,
                ]);

            } else {
                return response()->json([
                    'code' => 400,
                    'message' => 'Password Or email Not valid',
                    'data' => null
                ]);
            }



        } catch (\Throwable $exception) {
            //throw $th;
            DB::rollBack();
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

    public function proccess_logout(Request $request)
    {
        try {

            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();

            return response()->json([
                'code'=> 200,
                'message' => "log out success",
                'data' => "logout"
            ]);

        } catch (\Throwable $exception) {
            //throw $th;
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
}

