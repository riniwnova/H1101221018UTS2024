<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\MasterJabatanController;


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