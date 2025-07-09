<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\InforController;
use App\Http\Controllers\Lien_He_Controller;
use App\Http\Controllers\Tin_Tuc_Controller;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\ThongKeController;

/*
|--------------------------------------------------------------------------
| Trang liên hệ
|--------------------------------------------------------------------------
*/

Route::view('/lien-he', 'Lien_He')->name('lien_he.form');
Route::post('/lien-he/store', [Lien_He_Controller::class, 'store'])->name('lien_he.store');
Route::get('/lien-he/index', [Lien_He_Controller::class, 'index'])->name('lien_he.index');

/*
|--------------------------------------------------------------------------
| Trang tin tức công khai (hiển thị)
|--------------------------------------------------------------------------
*/
Route::get('/tin-tuc', function () {
    $tintuc = DB::table('tin_tuc')->orderByDesc('ma_tin_tuc')->get();
    return view('Tin_Tuc', compact('tintuc'));
})->name('tin_tuc');

/*
|--------------------------------------------------------------------------
| Quản lý bài viết tin tức
|--------------------------------------------------------------------------
*/
Route::prefix('posts')->name('posts.')->controller(Tin_Tuc_Controller::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{ma_tin_tuc}', 'edit')->name('edit');
    Route::put('/{ma_tin_tuc}', 'update')->name('update');
    Route::get('/destroy/{ma_tin_tuc}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Quản lý mã giảm giá (voucher)
|--------------------------------------------------------------------------
*/
Route::prefix('vouchers')->name('vouchers.')->controller(VoucherController::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/{ma_giam_gia}/edit', 'edit')->name('edit');
    Route::put('/{ma_giam_gia}', 'update')->name('update');
    Route::delete('/{ma_giam_gia}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Quản lý tài khoản (admin, khách hàng, nhân viên)
|--------------------------------------------------------------------------
*/
Route::prefix('tai-khoan')->name('tai_khoan.')->controller(TaiKhoanController::class)->group(function () {
    Route::get('/', 'chonLoai')->name('chon');
    Route::get('/{loai}', 'index')->name('index');
    Route::get('/chi-tiet/{ma_tai_khoan}', 'show')->name('show');
    Route::post('/update-vai-tro/{ma_tai_khoan}', 'updateVaiTro')->name('update');
    Route::delete('/xoa/{ma_tai_khoan}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Trang thống kê doanh thu
|--------------------------------------------------------------------------
*/
Route::get('/thong-ke', [ThongKeController::class, 'index'])->name('thongke.index');
