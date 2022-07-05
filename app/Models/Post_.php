<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul_post_pertama",
            "author" => "Alam",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore facilis harum obcaecati voluptas. Incidunt assumenda blanditiis cumque labore nihil impedit nobis eum eius aliquid possimus corrupti, eligendi reiciendis sapiente."
        ],
        [
            "title" => "Judul Post Alam",
            "slug" => "judul_post_kedua",
            "author" => "Bagas",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore facilis harum obcaecati voluptas. Incidunt assumenda blanditiis cumque labore nihil impedit nobis eum eius aliquid possimus corrupti, eligendi reiciendis sapiente."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul_post_ketiga",
            "author" => "Restu",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore facilis harum obcaecati voluptas. Incidunt assumenda blanditiis cumque labore nihil impedit nobis eum eius aliquid possimus corrupti, eligendi reiciendis sapiente."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts =  static::all(); 

        // $post = [];

        // foreach($posts as $p){
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
