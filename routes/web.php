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
Route::get('/wisata/{id}', [HomeController::class, 'wisata_index_detail']);

Route::get('/kuliner', [HomeController::class, 'kuliner_index']);
Route::get('/kuliner/{id}', [HomeController::class, 'kuliner_index_detail']);

Route::get('/about-us', [HomeController::class, 'about_index']);

Route::post('/wisata-list', [HomeController::class, 'wisata_list']);
Route::post('/wisata-list/search', [HomeController::class, 'wisata_search']);

Route::post('/kuliner-list', [HomeController::class, 'kuliner_list']);
Route::post('/kuliner-list/search', [HomeController::class, 'kuliner_search']);

Route::get('/login-admin',[AdminController::class,'login_admin_index']);
Route::post('/login-admin',[AdminController::class,'proccess_login']);
Route::post('/logout-admin',[AdminController::class,'proccess_logout']);

Route::middleware('admin')->group(function() {
  Route::get('/dashboard',[AdminController::class,'admin_index']);

  Route::get('/dashboard/kuliner',[AdminController::class,'kuliner_index']);
  Route::post('/dashboard/kuliner/posts',[AdminController::class,'kuliner_posts']);
  Route::post('/dashboard/kuliner/delete/{id}',[AdminController::class,'kuliner_delete']);

  Route::get('/dashboard/wisata',[AdminController::class,'wisata_index']);
  Route::post('/dashboard/wisata/add',[AdminController::class,'add_wisata']);
  Route::post('/dashboard/wisata/delete/{id}',[AdminController::class,'delete_wisata']);

  Route::get('/dashboard/admin-list',[AdminController::class,'admin_list_index']);
  Route::post('/dashboard/admin/add',[AdminController::class,'admin_add']);
  Route::post('/dashboard/admin/delete/{id}',[AdminController::class,'delete_admin']);

  Route::get('/dashboard/admin/categories',[AdminController::class,'categories_index']);
  Route::post('/dashboard/admin/categories/add',[AdminController::class,'categories_add']);
  Route::post('/dashboard/admin/categories/delete/{id}',[AdminController::class,'categories_delete']);

});
