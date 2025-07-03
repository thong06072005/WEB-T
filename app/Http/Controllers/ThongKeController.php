<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ThongKeController extends Controller
{
    public function index(Request $request)
    {
        $loai = $request->get('loai', 'ngay');
        $now = Carbon::now();

        $thang = $request->get('thang', $now->month);
        $nam = $request->get('nam', $now->year);
        $ngay = $request->get('ngay', $now->toDateString()); // yyyy-mm-dd
        $tuan = $request->get('tuan', $now->isoWeek());       // ISO week number

        switch ($loai) {
            case 'tuan':
                $from = Carbon::parse($request->get('from_date', $now->startOfWeek()->toDateString()));
                $to = Carbon::parse($request->get('to_date', $now->endOfWeek()->toDateString()));
                break;


            case 'thang':
                $from = Carbon::createFromDate($nam, $thang, 1)->startOfMonth();
                $to = Carbon::createFromDate($nam, $thang, 1)->endOfMonth();
                break;

            case 'nam':
                $from = Carbon::createFromDate($nam, 1, 1)->startOfYear();
                $to = Carbon::createFromDate($nam, 1, 1)->endOfYear();
                break;

            case 'ngay':
            default:
                $from = Carbon::parse($ngay)->startOfDay();
                $to = Carbon::parse($ngay)->endOfDay();
                break;
        }

        $tong_doanh_thu = DB::table('don_hang')
            ->whereBetween('ngay_tao', [$from, $to])
            ->sum('gia_tri_don_hang');

        $doanh_thu_danh_muc = DB::table('don_hang as dh')
            ->join('chi_tiet_don_hang as ctdh', 'dh.ma_don_hang', '=', 'ctdh.ma_don_hang')
            ->join('chi_tiet_san_pham as ctsp', 'ctdh.ma_chi_tiet_san_pham', '=', 'ctsp.ma_chi_tiet_san_pham')
            ->join('san_pham as sp', 'ctsp.ma_san_pham', '=', 'sp.ma_san_pham')
            ->join('danh_muc_san_pham as dmsp', 'sp.ma_danh_muc', '=', 'dmsp.ma_danh_muc')
            ->whereBetween('dh.ngay_tao', [$from, $to])
            ->select('dmsp.ten_danh_muc', DB::raw('SUM(ctdh.so_luong * ctdh.don_gia) as doanh_thu'))
            ->groupBy('dmsp.ten_danh_muc')
            ->get();

        return view('thongke.index', compact(
            'tong_doanh_thu',
            'doanh_thu_danh_muc',
            'loai',
            'thang',
            'nam',
            'ngay',
            'tuan',
            'from',
            'to'
        ));
    }
}
