<?php

namespace App\Http\Controllers;

use App\Http\Requests\LienHeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lien_He_Controller extends Controller
{
    public function store(LienHeRequest $request)
    {
        DB::table('thong_tin_gop_y')->insert([
            'fullname' => $request->fullname, //full name tức là gọi đúng tên cột trong data base, tương tự với các dòng ở dưới
            'email' => $request->email,
            'NoiDungGopY' => $request->feedback,
        ]);
        return redirect()->route('lienhe')->with('success', 'Gửi liên hệ thành công!');
    }
    public function index()
    {
        $thongtin = DB::table('thong_tin_gop_y')->get(); //Dùng querry builder để có thể lấy toàn bộ dữ liệu từ bảng 
        return view('Lien_He_index', compact('thongtin')); //compact nghĩa là gửi biến thông tin ở trên sang cho view để dùng foreach
    }
}
