<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\KabupatenController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/gempa', function () {
    return view('gempa');
});
Route::get('/peta',[PetaController::class, 'index']);
Route::get('/kabupaten',[KabupatenController::class, 'index']);