<?php

namespace App\Models;



class Post
{
    private static $blog_post = [
        [
            "title" => "blog post pertama",
            "slug" => "judul-post-pertama",
            "author" => "samuel",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Dolores rerum molestiae recusandae illo error consequuntur perspiciatis blanditiis 
            distinctio id! Eum quos dolorem accusantium neque quod quaerat illo vel,
             sit culpa quo optio adipisci est quisquam iure hic reiciendis amet ipsum. 
             Eligendi voluptatem reiciendis totam officia id eos modi ex, eaque aliquid at? 
             Dolore deleniti deserunt repudiandae laboriosam officia autem rerum commodi neque nisi,
           a maxime eum labore, corrupti illum! Nulla rem laudantium cumque corrupti, illo quidem sunt aliquid iste. Eveniet"
          ],
          [ 
              "title" => "blog post kedua 2",
              "slug" => "judul-post-kedua",
              "author" => "edward",
              "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Dolores rerum molestiae recusandae illo error consequuntur perspiciatis blanditiis 
              distinctio id! Eum quos dolorem accusantium neque quod quaerat illo vel,
               sit culpa quo optio adipisci est quisquam iure hic reiciendis amet ipsum. 
               Eligendi voluptatem reiciendis totam officia id eos modi ex, eaque aliquid at? 
               Dolore deleniti deserunt repudiandae laboriosam officia autem rerum commodi neque nisi,
             a maxime eum labore, corrupti illum! Nulla rem laudantium cumque corrupti, illo quidem sunt aliquid iste. Eveniet"
          ]
    ];
    
    
    public static function all()
    {
        return collect(self ::$blog_post);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p)
        // {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        $test = $posts->firstWhere('slug', $slug);
        // mendapatkan data pertama pada array
        // $data = $test['author'];
        // var_dump($data);
         return $posts->firstWhere('slug', $slug);
}}