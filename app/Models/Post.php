<?php

namespace App\Models;

class Post
{
    private static $blog_post =  [
        [
            "title" => "Judul pertama",
            "slug" => "judul-pertama",
            "author" => "Jeremy Diaz Prasetyo",
            "content" => "
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quas provident unde consequatur debitis molestias, eaque dignissimos mollitia doloremque, cumque laudantium esse praesentium animi excepturi voluptate beatae harum nisi. Consequuntur ut libero temporibus sapiente quae ad quasi veritatis ea rem odio voluptatibus hic, molestias architecto, harum magnam blanditiis, adipisci fugiat vero quisquam laboriosam. Aliquid, in assumenda. Fugit dicta nam pariatur mollitia minus cumque iure quos, illum assumenda totam. Maiores in recusandae voluptate dolorum ex laudantium provident ducimus quas non consectetur?",
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "M. Fiqri Ananda",
            "content" => "
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe quas provident unde consequatur debitis molestias, eaque dignissimos mollitia doloremque, cumque laudantium esse praesentium animi excepturi voluptate beatae harum nisi. Consequuntur ut libero temporibus sapiente quae ad quasi veritatis ea rem odio voluptatibus hic, molestias architecto, harum magnam blanditiis, adipisci fugiat vero quisquam laboriosam. Aliquid, in assumenda. Fugit dicta nam pariatur mollitia minus cumque iure quos, illum assumenda totam. Maiores in recusandae voluptate dolorum ex laudantium provident ducimus quas non consectetur?",
        ],
    ];

    public static function all(){

        return collect(self::$blog_post);
    }

    public static function find($slug){

        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
