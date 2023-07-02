<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Culinary;
use App\Models\Tours;
use App\Models\User;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File as RulesFile;

class AdminController extends Controller
{
    public function admin_index(Request $request)
    {
        $adminCount = User::all()->count();
        $culinaryCount = Culinary::all()->count();
        $toursCount = Tours::all()->count();

        return view('admin.dashboard.dashboard',[
            'admin' => $adminCount,
            'culinary' => $culinaryCount,
            'tours' => $toursCount

        ]);
    }

    public function kuliner_index(Request $request)
    {
        $kuliner = Culinary::with('user')->get();
        $categories = Category::all();
        return view('admin.dashboard.kuliner',[
            'kuliner' => $kuliner,
            'categories' => $categories
        ]);
    }

    public function kuliner_posts(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'image' => 'mimes:jpg,bmp,png',
            'name' => 'required',
            'desc' => 'required'
        ],
        [
            'image.required' => "Image Is Required",
            'name.required' => "Title is required",
            'desc.required' => "Description Is Required",
            'image.mimes' => "image format must jpg,bmp,png"
        ]);

        if($validator->fails()){
            return response()->json([
                'code' => 422,
                'message' => $validator->messages(),
                'data' => null

            ]);
        }

        try {
            //code...
            DB::beginTransaction();
            
            $kuliner = new Culinary();
            $kuliner->name = $request->name;
            $kuliner->desc = $request->desc;
            $kuliner->image_path = $request->file('image')->store('assets/culinary', 'public');
            $kuliner->uploaded_by = Auth::user()->id;
            $kuliner->category_id = $request->category;
            $kuliner->google_maps = $request->gmaps;
            $kuliner->save();

            DB::commit();

            return response()->json([
                'code' => 200,
                'message' => 'Add new Kuliner Success',
                'data' => $kuliner
            ]);

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

    public function kuliner_delete(Request $request, $id)
    {
        try {
            $kuliner = Culinary::find($id);
            $kuliner->delete();

            return response()->json([
                'code' => 200,
                'message' => 'Delete Kuliner Success',
                'data' => $kuliner
            ]);

        } catch (\Throwable $exception) {
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

    public function wisata_index(Request $request)
    {
        $wisata = Tours::with('user')->get();
        $categories = Category::all();
        return view('admin.dashboard.wisata',[
            'wisata' => $wisata,
            'categories' => $categories
        ]);
    }

    public function add_wisata(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'image' => 'mimes:jpg,bmp,png',
            'name' => 'required',
            'desc' => 'required'
        ],
        [
            'image.required' => "Image Is Required",
            'name.required' => "Title is required",
            'desc.required' => "Description Is Required",
            'image.mimes' => "image format must jpg,bmp,png"
        ]);

        if($validator->fails()){
            return response()->json([
                'code' => 422,
                'message' => $validator->messages(),
                'data' => null

            ]);
        }

        try {
            //code...
            DB::beginTransaction();
            
            $tours = new Tours();
            $tours->name = $request->name;
            $tours->desc = $request->desc;
            $tours->image_path = $request->file('image')->store('assets/culinary', 'public');
            $tours->uploaded_by = Auth::user()->id;
            $tours->category_id = $request->category;
            $tours->google_maps = $request->gmaps;
            $tours->save();

            DB::commit();

            return response()->json([
                'code' => 200,
                'message' => 'Add new tours Success',
                'data' => $tours
            ]);

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

    public function delete_wisata(Request $request, $id)
    {
        try {
            $tours = Tours::find($id);
            $tours->delete();

            return response()->json([
                'code' => 200,
                'message' => 'Delete tours Success',
                'data' => $tours
            ]);

        } catch (\Throwable $exception) {
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

    public function admin_list_index(Request $request)
    {
        $admin = User::all();
        return view('admin.dashboard.admin',[
            'users' => $admin
        ]);
    }

    public function delete_admin(Request $request, $id)
    {
        try {
            $user = User::find($id);
            $user->delete();

            return response()->json([
                'code' => 200,
                'message' => 'Delete user Success',
                'data' => $user
            ]);

        } catch (\Throwable $exception) {
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

    public function admin_add(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ],
        [
            'image.required' => "Image Is Required",
            'name.required' => "Title is required",
            'desc.required' => "Description Is Required",
            'image.mimes' => "image format must jpg,bmp,png",
            'role.required' => "role is required",
        ]);

        if($validator->fails()){
            return response()->json([
                'code' => 422,
                'message' => $validator->messages(),
                'data' => null

            ]);
        }

        try {
            //code...
            DB::beginTransaction();
            
            $user = new user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role_id = $request->role;
            $user->save();

            DB::commit();

            return response()->json([
                'code' => 200,
                'message' => 'Add new user Success',
                'data' => $user
            ]);

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

    public function categories_index(Request $request)
    {
        $categories = Category::all();
        return view('admin.dashboard.categories',[
            'categories' => $categories
        ]);
    }

    public function categories_add(Request $request)
    {
        $validator = Validator::make($request->all(),[
            // 'image' => 'mimes:jpg,bmp,png',
            'name' => 'required',
            // 'desc' => 'required'
        ],
        [
            // 'image.required' => "Image Is Required",
            'name.required' => "Title is required",
            // 'desc.required' => "Description Is Required",
            // 'image.mimes' => "image format must jpg,bmp,png"
        ]);

        if($validator->fails()){
            return response()->json([
                'code' => 422,
                'message' => $validator->messages(),
                'data' => null

            ]);
        }

        try {
            //code...
            DB::beginTransaction();
            
            $categories = new Category();
            $categories->name = $request->name;
            $categories->save();

            DB::commit();

            return response()->json([
                'code' => 200,
                'message' => 'Add new categories Success',
                'data' => $categories
            ]);

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

    public function categories_delete(Request $request, $id)
    {
        try {
            $categories = Category::find($id);
            $categories->delete();

            return response()->json([
                'code' => 200,
                'message' => 'Delete categories Success',
                'data' => $categories
            ]);

        } catch (\Throwable $exception) {
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

