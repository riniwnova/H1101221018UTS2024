<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('testing');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/masterjabatan', function () {
    return view('masterjabatan');
});