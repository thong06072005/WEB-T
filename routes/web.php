<?php

use App\Http\Controllers\Lien_He_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tin_Tuc_Controller;

Route::view('/Lien_He', 'Lien_He')->name('lienhe');
Route::post('/store', [Lien_He_Controller::class, 'store'])->name('store');
Route::view('/Tin_Tuc', 'Tin_Tuc')->name('tintuc');
Route::get('/Lien_He_index', [Lien_He_Controller::class,'index'])->name('Lien_He_index');

Route::prefix('posts')->controller(Tin_Tuc_Controller::class)->name('posts.')->
group(function (){


    Route::get('/','index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store','store')->name('store');





});