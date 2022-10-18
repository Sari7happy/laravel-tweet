<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Postscontorller extends Controller
{
public function index()
{
    return view ('posts/post');
}
}