<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request; 

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        If(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }
        
        If(request('author'))
        {
            $author = User::firstWhere('username', request('author'));
            $title = ' By '. $author->name;
        }
        //dd(request('search'));
       //get data
        //    $posts = Post::latest();
        //    if(request('search'))
        //    {
        //        $posts->where('title','like','%' . request('search') . '%');
        //    }

        return view('blog' ,[
            "title" => "All Post" . $title,
            "active" =>'blog',
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
            
        ]);
        
    }
    public function show(Post $post)
    {
        //$test =  Post::All()->firstWhere('slug', $post->slug)->load('category', 'author');
        return view('post', 
        [
            'title' => "Single Post",
            "active" =>'Post',
            "post" => $post
        ]);
    }
    public function sortbyauthor($author)
    {
        $test =  User::All()->firstWhere('username', $author);
        return view('blog', 
        [
            'title' => "Post by Author : $test->name",
            "active" =>'blog',
            'posts'=> $test->posts->load('category', 'author')
        ]);
    }
}
