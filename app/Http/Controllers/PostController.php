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
        
        // CARA-1
        // dibawah ini kita mencari berdasarkan judulnya saja
        // cek dulu, ada nggak parameter dari variable search dari halaman blog
        // kalau gada, dia langsung ke bag.return view
        // if(request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%');
        // }

        // CARA-2
        // dibawah ini kita mencari berdasarkan judul dan di dalam body nya
        // if(request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //           ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        // CARA-3
        // hapus bagian if keseluruhan di atas pindahkan ke model. lihat deh di model bagian scopeFilter
        // disana kita akan membuat sebuah model yang punya kelebihan yaitu memanfaatkan function2 built-in di laravel. jadi pasti akan lebih memudahkan dan lebih laravel
        
        $title = '';
        if(request('category')){
            $category = \App\Models\Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('user')){
            $user = \App\Models\User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }

        return view('blog', [
            "active" => "posts",
            'title' => 'All Posts' . $title,

            // ->filter() itu diambil dari model post yang di bag. scopeFilter()
            // kalau misalkan ada request yang berisi search, m
            // kenapa pake array? karna supaya nanti saya pake buat cari category dan author nantinya supaya nanti bisa dikirimkan pake array
            "posts" => Post::latest()->filter(request(['search','category','user']))->paginate(7)->withQueryString()
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
