<?php

namespace App\Http\Controllers;

use App\Http\Requests\LienHeRequest;
use Illuminate\Http\Request;

class Lien_He_Controller extends Controller
{
    public function store(LienHeRequest $request)
{
    // Giả sử bạn có model LienHe và muốn lưu

    return redirect()->route('lienhe')->with('success', 'Gửi liên hệ thành công!');
}

}
