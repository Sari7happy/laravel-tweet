<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Image extends Controller
{
    public function upload(Request $request)
    {
        $dir = 'images';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        return redirect('/');
    }
}
