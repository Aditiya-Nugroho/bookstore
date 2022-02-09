<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/beli', function () {
    return view('beli');
});
Route::get('/indexadmin', function () {
    return view('admin.indexadmin');
});
Route::get('/kategori', function () {
    return view('admin.kategori');
});
Route::get('/transaksi', function () {
    return view('admin.transaksi');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/databeli', function () {
    return view('databeli');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/tambahbuku', function () {
    return view('admin.tambahbuku');
});
Route::get('/kategoribuku', function () {
    return view('admin.kategoribuku');
});
Route::get('/customer', function () {
    return view('admin.customer');
});
Route::get('/daftaradmin', function () {
    return view('admin.daftaradmin');
});
Route::get('/tambahadmin', function () {
    return view('admin.tambahadmin');
});

