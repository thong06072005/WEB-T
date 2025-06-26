<?php

use App\Http\Controllers\Lien_He_Controller;
use Illuminate\Support\Facades\Route;


Route::view('/lienhe', 'Lien_He')->name('lienhe');
Route::post('/store', [Lien_He_Controller::class, 'store'])->name('store');
Route::view('/tintuc', 'Tin_Tuc')->name('tintuc');

