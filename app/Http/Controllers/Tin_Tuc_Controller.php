<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Tin_Tuc_Controller extends Controller
{
    public function index()
    {
        $tintuc = DB::table('tin_tuc')->get();

        return view('posts.Tin_Tuc_index', compact('tintuc'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $path = $request->file('image')->store('image', 'public');

        db::table('tin_tuc')->insert([
            'tieu_de' => $request->get('title'),
            'noi_dung' => $request->get('content'),
            'hinh_anh' =>  $path
        ]);
        return redirect()->route('posts.index')->with('success', 'Create Post SuccessFully');
    }


    public function edit($ma_tin_tuc){
        $post = DB::table('tin_tuc')->where('ma_tin_tuc', $ma_tin_tuc)->first();
        if(!$post){
            abort(404);
    }
           return view('posts.edit', compact('post'));
}


    public function update(StorePostRequest $request, $ma_tin_tuc){
                 $post = DB::table('tin_tuc')->where('ma_tin_tuc', $ma_tin_tuc)->first();

                // Nếu người dùng upload hình ảnh mới
                if ($request->hasFile('image')) {
               $path = $request->file('image')->store('image', 'public');
                  } else {
                   // Không upload hình mới => giữ ảnh cũ
                  $path = $post->hinh_anh;
                 }
        DB::table('tin_tuc')->where('ma_tin_tuc', $ma_tin_tuc)->update([
            'tieu_de' => $request->get('title'),
            'noi_dung'=> $request->get('content'),
            'hinh_anh'=> $path

        ]);
        return redirect()->route('posts.index')->with('message','Edit post successfully');
    }
}
