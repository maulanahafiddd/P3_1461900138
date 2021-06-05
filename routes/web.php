<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maulanaController;
use Illuminate\Support\Facades\DB;

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

Route::get('/pasien', [maulanaController::class,'pasien']);
Route::get('/pasien/tambah', [maulanaController::class,'tambah']);
Route::get('/pasien/hapus/{id}', [maulanaController::class,'hapus']);
Route::post('/pasien/store',[maulanaController::class,'store']);
Route::get('/pasien/edit/{id}',[maulanaController::class,'edit']);
Route::post('/pasien/update',[maulanaController::class,'update']);
Route::get('/pasien/cari',[maulanaController::class,'cari']);