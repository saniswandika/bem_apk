<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;
  
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Auth::routes();

// route login user pages

Route::middleware(['auth', 'user-access:user'])->group(function () {
    
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

// route login admin pages

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
