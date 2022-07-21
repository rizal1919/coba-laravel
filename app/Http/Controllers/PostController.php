<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


// dd(request('search'));
// ngecek variabel request

class PostController extends Controller
{   

    
    public function index(){

        // dd(request('search'));

        $posts = Post::latest();
        
        // CARA-1
        // cek dulu, ada nggak parameter dari variable search dari halaman blog
        // kalau gada, dia langsung ke bag.return view
        // if(request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%');
        // }

        // CARA-2
        if(request('search')){
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        return view('blog', [
            "active" => "posts",
            'title' => 'All Posts',
            "posts" => $posts->get()
            // "posts" => Post::with(['author','category'])->latest()->get()
            // mencari postingan terakhir
        ]);
    }

    public function show(Post $post){
        // dia menggunakan konsep Route Model Binding, jadi diikat gitulah
        // ngirimin model kesini, diiket disini
        return view('miniblog', [
            "active" => "posts",
            "title" => 'Miniblog',
            "new_post" => $post
        ]);
    }
}
