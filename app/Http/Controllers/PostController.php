<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('blog', [
            "active" => "posts",
            'title' => 'posts',
            "posts" => Post::latest()->get()
            // "posts" => Post::with(['author','category'])->latest()->get()
            // mencari postingan terakhir
        ]);
    }

    public function show(Post $post){
        // dia menggunakan konsep Route Model Binding, jadi diikat gitulah
        // ngirimin model kesini, diiket disini
        return view('miniblog', [
            "active" => "posts",
            "new_post" => $post
        ]);
    }
}
