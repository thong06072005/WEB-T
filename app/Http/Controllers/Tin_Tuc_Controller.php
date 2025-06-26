<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Tin_Tuc_Controller extends Controller
{
    public function index(){
        $tintuc = DB::table('tin_tuc')->get();

        return view('posts.Tin_Tuc_index',compact('tintuc'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePostRequest $request){
        $path = $request->file('hinh_anh')->store('image', 'public');

        db::table('tin_tuc')->insert([
            'title'=> $request->get('title'),
            'content' => $request->get('content'),
            'hinh_anh'=>  $path
        ]);
        return redirect()->route('posts.Tin_Tuc_index')->with('success','Create Post SuccessFully');
    }
}
