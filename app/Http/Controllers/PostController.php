<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {     
        $values=Post::all();
        return view ('post/post',compact('values'));
    }

}
    

