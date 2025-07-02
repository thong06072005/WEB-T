<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoucherRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = DB::table('giam_gia')->orderByDesc('ma_giam_gia')->get();
        return view('vouchers.index', compact('vouchers'));
    }

    public function create()
    {
        return view('vouchers.create');
    }

    public function store(StoreVoucherRequest $request)
    {


        // Lưu thông tin vào DB
        DB::table('giam_gia')->insert([
            'ma_giam_gia' => $request->get('ma_giam_gia'),
            'phuong_thuc' => $request->get('phuong_thuc'),
            'gia_tri' => $request->get('gia_tri'),
            'ngay_hieu_luc' => $request->get('ngay_hieu_luc'),
            'ngay_het_han' => $request->get('ngay_het_han'),
            'bac_thanh_vien_ap_dung' => $request->get('bac_thanh_vien_ap_dung')
        ]);

        return redirect()->route('vouchers.index')->with('success', 'Gửi bài viết thành công!');
    }



    public function edit($ma_giam_gia)
    {
        $vouchers = DB::table('giam_gia')->where('ma_giam_gia', $ma_giam_gia)->first();
        if (!$vouchers) {
            abort(404);
        }
        return view('vouchers.edit', compact('vouchers'));
    }
    public function update(StoreVoucherRequest $request, $ma_giam_gia)
    {
        $vouchers = DB::table('giam_gia')->where('ma_giam_gia', $ma_giam_gia)->first();



        DB::table('giam_gia')->where('ma_giam_gia', $ma_giam_gia)->update([
            'ma_giam_gia' => $request->get('ma_giam_gia'),
            'phuong_thuc' => $request->get('phuong_thuc'),
            'gia_tri' => $request->get('gia_tri'),
            'ngay_hieu_luc' => $request->get('ngay_hieu_luc'),
            'ngay_het_han' => $request->get('ngay_het_han'),
            'bac_thanh_vien_ap_dung' => $request->get('bac_thanh_vien_ap_dung')

        ]);
        return redirect()->route('vouchers.index')->with('message', 'Edit post successfully');
    }


    public function destroy($ma_giam_gia)
    {
        DB::table('giam_gia')->where('ma_giam_gia', $ma_giam_gia)->delete();
        return back()->with('message', 'Delete post successfully');
    }
}
