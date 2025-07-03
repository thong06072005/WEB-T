<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaiKhoanController extends Controller
{
    public function chonLoai()
    {
        return view('tai_khoan.chon');
    }

    public function index($loai)
    {
        $vaitro = $loai == 'khach-hang' ? 'khach_hang' : 'nhan_vien';
        $taiKhoans = DB::table('tai_khoan')
            ->where('vai_tro', $vaitro)
            ->get();

        return view('tai_khoan.index', compact('taiKhoans', 'vaitro'));
    }

    public function updateVaiTro(Request $request, $ma_tai_khoan)
    {
        DB::table('tai_khoan')
            ->where('ma_tai_khoan', $ma_tai_khoan)
            ->update(['vai_tro' => $request->vai_tro]);

        return back()->with('success', 'Cập nhật vai trò thành công');
    }

    public function destroy($ma_tai_khoan)
    {
        DB::table('tai_khoan')->where('ma_tai_khoan', $ma_tai_khoan)->delete();
        DB::table('thong_tin_khach_hang')->where('ma_tai_khoan', $ma_tai_khoan)->delete();

        return back()->with('success', 'Xóa tài khoản thành công');
    }

    public function show($ma_tai_khoan)
    {
        $thongTin = DB::table('thong_tin_khach_hang')
            ->where('ma_tai_khoan', $ma_tai_khoan)
            ->first();

        return view('tai_khoan.chi_tiet', compact('thongTin'));
    }
}
