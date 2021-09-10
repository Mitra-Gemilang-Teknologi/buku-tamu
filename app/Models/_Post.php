<?php

namespace App\Models;


class Post 
{
 private  static $blog_posts = [
     
    [
    "title" => "Judul Utama 1",
    "author" => "Dani Hidayat",
    "slug"=> "judul-utama-1",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quod sint! Eaque maxime molestiae incidunt harum delectus quas est, quos facere dolor qui possimus inventore. Impedit nam ea perferendis soluta sapiente quos, cumque quia error dolorem magni expedita at ipsam dolore? Fugit itaque aut, reiciendis, ipsum provident recusandae nam inventore culpa, laboriosam rerum libero quis. Nam ea in provident labore ut vel excepturi placeat sit, facilis, obcaecati id vero officia iusto aliquam! Praesentium debitis, inventore voluptatibus nemo at quam vitae ad animi! Consequuntur ducimus, incidunt sit quam exercitationem blanditiis nemo beatae! Quam, totam dolorem ea nemo atque labore in veniam."
],
[
    "title" => "Judul Utama 2",
    "author" => "Leo Hidayat",
    "slug"=> "judul-utama-2",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quod sint! Eaque maxime molestiae incidunt harum delectus quas est, quos facere dolor qui possimus inventore. Impedit nam ea perferendis soluta sapiente quos, cumque quia error dolorem magni expedita at ipsam dolore? Fugit itaque aut, reiciendis, ipsum provident recusandae nam inventore culpa, laboriosam rerum libero quis. Nam ea in provident labore ut vel excepturi placeat sit, facilis, obcaecati id vero officia iusto aliquam! Praesentium debitis, inventore voluptatibus nemo at quam vitae ad animi! Consequuntur ducimus, incidunt sit quam exercitationem blanditiis nemo beatae! Quam, totam dolorem ea nemo atque labore in veniam."
]
];   

public static function all(){
    return collect(self::$blog_posts);
}

public static function find($slug)
{
    $posts = static::all();
        
    // $post =[];
    // foreach($posts as $p){
    //     if($p['slug'] === $slug){
    //     $post = $p;
    //     }
    // }
    return $posts->firstWhere('slug',$slug);;
}
}
