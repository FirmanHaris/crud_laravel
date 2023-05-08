<?php

use App\Http\Controllers\contohM;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('layout.home');
});
Route::get('/home', function () {
    return view('layout.home');
});
Route::get('/mahasiswa/add', function () {
    return view('mahasiswa.formadd');
});
Route::resource('mahasiswa', MahasiswaController::class);
// Route::get('hapusMahasiswa/{id}', [contohM::class, 'hapus']);

Route::controller(contohM::class)->group(function () {
    route::get('hapusMahasiswa/{id}', 'hapus');
});
