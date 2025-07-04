<?php

use App\Http\Controllers\InforController;
use App\Http\Controllers\Lien_He_Controller;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Tin_Tuc_Controller;

//Chức năng và hiển thị của trang liên hệ
Route::view('/Lien_He', 'Lien_He')->name('lienhe');
Route::post('/store', [Lien_He_Controller::class, 'store'])->name('store');
Route::get('/Lien_He_index', [Lien_He_Controller::class, 'index'])->name('Lien_He_index');

//hiển thị trang tin tức
Route::get('/Tin_Tuc', function () {
    $tintuc = DB::table('tin_tuc')->orderByDesc('ma_tin_tuc')->get();
    return view('Tin_Tuc', compact('tintuc'));
})->name('Tin-Tuc');


//chức năng và hiển thị của danh sách tin tức
Route::prefix('posts')->controller(Tin_Tuc_Controller::class)->name('posts.')->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/destroy/{ma_tin_tuc}', 'destroy')->name('destroy');
    Route::get('/{ma_tin_tuc}', 'edit')->name('edit');
    Route::put('/{ma_tin_tuc}', 'update')->name('update');
    
});


//Trang quản lý voucher và các chức năng
Route::prefix('vouchers')->name('vouchers.')->controller(VoucherController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{ma_giam_gia}/edit', 'edit')->name('edit');
    Route::put('/{ma_giam_gia}', 'update')->name('update');
    Route::delete('/{ma_giam_gia}', 'destroy')->name('destroy');
});

use App\Http\Controllers\TaiKhoanController;

//Trang quản lý tài khoản và các chức năng
Route::get('/tai-khoan', [TaiKhoanController::class, 'chonLoai'])->name('tai_khoan.chon');
Route::get('/tai-khoan/{loai}', [TaiKhoanController::class, 'index'])->name('tai_khoan.index');
Route::get('/tai-khoan/chi-tiet/{ma_tai_khoan}', [TaiKhoanController::class, 'show'])->name('tai_khoan.show');
Route::post('/tai-khoan/update-vai-tro/{ma_tai_khoan}', [TaiKhoanController::class, 'updateVaiTro'])->name('tai_khoan.update');
Route::delete('/tai-khoan/xoa/{ma_tai_khoan}', [TaiKhoanController::class, 'destroy'])->name('tai_khoan.destroy');

use App\Http\Controllers\ThongKeController;

//Trang thống kê và chức năng
Route::get('/thong-ke', [ThongKeController::class, 'index'])->name('thongke.index');
