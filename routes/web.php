<?php

use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MahasiswaController::class, 'index'])->name('index');  // menampilkan home inde
Route::get('/create', [MahasiswaController::class, 'create'])->name('create'); // menampilkabn halaman create
Route::post('/store', [MahasiswaController::class, 'store'])->name('store'); // submit create data
Route::get('/show/{id}', [MahasiswaController::class, 'show'])->name('show'); // untuk menampilkan edit
Route::post('/update/{id}', [MahasiswaController::class, 'update'])->name('update'); // Untuk submit update
Route::get('/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('destroy'); // untuk hapus