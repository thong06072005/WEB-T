<?php

use App\Http\Controllers\Lien_He_Controller;
use Illuminate\Support\Facades\Route;


Route::view('/Lien_He', 'Lien_He')->name('lienhe');
Route::post('/store', [Lien_He_Controller::class, 'store'])->name('store');
Route::view('/Tin_Tuc', 'Tin_Tuc')->name('tintuc');

