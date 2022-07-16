<?php

namespace App\Models;


class Post
{
    static $blog_posts = [
		[
			"title" => "Post 1",
			"slug" => "post-1",
			"author" => "Rizal Fathurrahman",
			"body" => "Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Harum amet soluta aut inventore nemo minima deserunt repellendus quidem, dolor atque, esse ullam aspernatur? Dicta autem molestias ad sequi rerum quae."
		],
		[
			"title" => "Post 2",
			"slug" => "post-2",
			"author" => "Dede SR",
			"body" => "Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Harum amet soluta aut inventore nemo minima deserunt repellendus quidem, dolor atque, esse ullam aspernatur? Dicta autem molestias ad sequi rerum quae."
		]
	];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
        // cari baris pertama dimana slugnya sama dengan $lug
    }
}


