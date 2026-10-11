<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BarangController::class, 'dashboard'])->name('dashboard');
Route::resource('barang', BarangController::class)->except(['show']);