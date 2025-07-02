<?php

use App\Http\Controllers\Lien_He_Controller;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Tin_Tuc_Controller;

Route::view('/Lien_He', 'Lien_He')->name('lienhe');
Route::post('/store', [Lien_He_Controller::class, 'store'])->name('store');
Route::get('/Lien_He_index', [Lien_He_Controller::class, 'index'])->name('Lien_He_index');
Route::get('/Tin_Tuc', function () {
    $tintuc = DB::table('tin_tuc')->orderByDesc('ma_tin_tuc')->get();
    return view('Tin_Tuc', compact('tintuc'));
})->name('Tin-Tuc');

Route::prefix('posts')->controller(Tin_Tuc_Controller::class)->name('posts.')->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/destroy/{ma_tin_tuc}', 'destroy')->name('destroy');
    Route::get('/{ma_tin_tuc}', 'edit')->name('edit');
    Route::put('/{ma_tin_tuc}', 'update')->name('update');
    
});



Route::prefix('vouchers')->name('vouchers.')->controller(VoucherController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{ma_giam_gia}/edit', 'edit')->name('edit');
    Route::put('/{ma_giam_gia}', 'update')->name('update');
    Route::delete('/{ma_giam_gia}', 'destroy')->name('destroy');
});