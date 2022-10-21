<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageTitleController extends Controller
{
  public function index()
  {
    return view ('dashboard');
  }
  public function store(Request $request)
  {
    $request->validate([
        'image'=>'required|image|mimes:png,jpg,jpeg|max:2048'
    ]);
    $imageName=time().'_'.$request->image->extension();
// public Folder
    $request->image->move(public_path('images'),$imageName);

    // store instorage Folder
    // $request->image->storeAs('images',$imageName);
// // store inS3
//     $request->image->storeAs('images',$imageName,'s3');


    // store image inDB
    return back()->with('success','Image uploaded Successfully!')
    ->with('image',$imageName);

  }
  
}
