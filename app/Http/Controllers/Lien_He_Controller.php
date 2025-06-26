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
    'fullname' => $request->fullname,
    'email' => $request->email,
    'NoiDungGopY' => $request->feedback,
]);
    return redirect()->route('lienhe')->with('success', 'Gửi liên hệ thành công!');
}
    public function index(){
        $thongtin = DB::table('thong_tin_gop_y')->get();
        return view('Lien_He_index', compact('thongtin'));
    }
}
