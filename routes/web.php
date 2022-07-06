<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\seller\SellerController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('front.index');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard',[AdminController::class, 'index']);
});

Route::prefix('seller')->middleware('auth')->group(function () {
    Route::get('dashboard',[SellerController::class, 'index']);
});

Route::prefix('user')->middleware('auth')->group(function () {
//    Route::get('home',[FrontController::class, 'index']);
});








Route::get('logout',function (){
   auth()->logout();
});
