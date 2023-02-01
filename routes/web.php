<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KasirController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
// Route::resource('kasir', KasirController::class);
Route::middleware([login::class])->group(function () {

    Route::resource('manajer', ManajerController::class)->middleware('manajer');
    Route::get('laporan', [ManajerController::class,'laporan'])->middleware('manajer');
    Route::resource('admin', AdminController::class)->middleware('admin');
    Route::get('logout', [LoginController::class,'logout']);
    Route::resource('kasir', KasirController::class)->middleware('kasir');
    Route::get('cetak', [ManajerController::class, 'cetak']);
    Route::post('/filter', [ManajerController::class, 'filter']);

});
Route::get('/login', [LoginController::class,'login']);


// composer install
// composer update
// php artisan key:generate
// php artisan migrate
// php artisan db:seed
// php artisan serve
