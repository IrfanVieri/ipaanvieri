<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;

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

// Route Bagian Depan

Route::get('/', [HomepageController::class, 'index'])-> name('home.index');
Route::get('/about', [HomepageController::class, 'about'])-> name('home.about');
Route::get('/kontak', [HomepageController::class, 'kontak'])-> name('home.kontak');
Route::get('/kategori', [HomepageController::class, 'kategori'])-> name('home.kategori');

// Route::get('/dashboard', function()
//         {
//          return view('layouts.dashboard');
            
//         }
// );

Route:: group(['prefix' => 'admin' ], function(){
        Route::get('/', [DashboardController::class, 'index'])-> name('dashboard.index');
// route kategori
Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);
});