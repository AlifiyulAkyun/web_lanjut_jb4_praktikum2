<?php


use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 // Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [PostController::class,'index']);

Route::get('/index', function(){
   return view('/layouts/index');
});

Route::get('/support', function(){
   return view('support');
});
Route::get('/account', function(){
   return view('account');
});
Route::get('/store', function(){
   return view('store');
});
Route::get('/contact', function(){
   return view('contact');
});