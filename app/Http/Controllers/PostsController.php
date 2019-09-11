<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
   
public function store(Request $request) {
  Post::create($request->all());
  return redirect('posts');
}
}
