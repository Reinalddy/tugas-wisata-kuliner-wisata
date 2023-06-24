<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMidleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',  {
//     // return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/wisata', [HomeController::class, 'wisata_index']);
Route::get('/kuliner', [HomeController::class, 'kuliner_index']);
Route::get('/about-us', [HomeController::class, 'about_index']);

Route::get('/login-admin',[AdminController::class,'login_admin_index']);
Route::post('/login-admin',[AdminController::class,'proccess_login']);
Route::post('/logout-admin',[AdminController::class,'proccess_logout']);

Route::middleware('admin')->group(function() {
  Route::get('/dashboard',[AdminController::class,'admin_index']);
  Route::get('/dashboard/kuliner',[AdminController::class,'kuliner_index']);
  Route::get('/dashboard/wisata',[AdminController::class,'wisata_index']);
  Route::get('/dashboard/admin-list',[AdminController::class,'admin_list_index']);

});
