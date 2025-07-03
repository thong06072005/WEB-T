<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Tin_Tuc_Controller extends Controller
{
    public function index()
    {
        $tintuc = DB::table('tin_tuc')->orderByDesc('ma_tin_tuc')->get();
        return view('posts.Tin_Tuc_index', compact('tintuc'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        // Lưu ảnh vào thư mục public/image
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName(); // đang đặt tên cho ảnh là thời gian tạo cùng đuôi image
        $image->move(public_path('image'), $imageName); //lưu ảnh vào thư mục public 

        // Lưu thông tin vào DB
        DB::table('tin_tuc')->insert([
            'tieu_de' => $request->get('title'),
            'noi_dung' => $request->get('content'),
            'hinh_anh' => $imageName
        ]);

        return redirect()->route('posts.index')->with('success', 'Gửi bài viết thành công!');
    }



    public function edit($ma_tin_tuc)
    {
        $post = DB::table('tin_tuc')->where('ma_tin_tuc', $ma_tin_tuc)->first();
        if (!$post) {
            abort(404);
        }
        return view('posts.edit', compact('post'));
    }


    public function update(StorePostRequest $request, $ma_tin_tuc)
    {
        $post = DB::table('tin_tuc')->where('ma_tin_tuc', $ma_tin_tuc)->first();

        // Nếu người dùng upload hình ảnh mới
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $path = $imageName;
        } else {
            $path = $post->hinh_anh;
        }
        DB::table('tin_tuc')->where('ma_tin_tuc', $ma_tin_tuc)->update([
            'tieu_de' => $request->get('title'),
            'noi_dung' => $request->get('content'),
            'hinh_anh' => $path

        ]);
        return redirect()->route('posts.index')->with('message', 'Edit post successfully');
    }

    public function destroy($ma_tin_tuc)
    {
        DB::table('tin_tuc')->where('ma_tin_tuc', $ma_tin_tuc)->delete();
        return back()->with('message', 'Delete post successfully');
    }
}
