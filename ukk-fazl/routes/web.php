<?php

use App\Http\Controllers\LoginController;
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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('login-account', [LoginController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});


Route::get('/menu', function () {
    return view('dashboard.menu');
});
Route::get('/meja', function () {
    return view('dashboard.meja');
});
Route::get('/pemesanan', function () {
    return view('dashboard.pemesanan');
});
Route::get('/pembayaran', function () {
    return view('dashboard.pembayaran');
});
Route::get('/laporan', function () {
    return view('dashboard.laporan');
});
