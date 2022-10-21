<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class Image extends Controller
{
    
        public function index()
        {
            return view ('upload.index');
        }
    
        public function create(Request $request)
        {
            return view('upload.create');
        }
    
        public function store(Request $request)
        {
            $img=$request->file('img_path');
            if (isset($img)) {
                // storage > public > img配下に画像が保存される
                $path = $img->store('img','public');
                // store処理が実行できたらDBに保存処理を実行
             
                    // DBに登録する処理
                
            
            }
            return redirect()->route('upload.index');
        }
    }    